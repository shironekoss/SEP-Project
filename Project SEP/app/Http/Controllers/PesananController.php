<?php

namespace App\Http\Controllers;

use App\Models\PESANANCART;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use RealRashid\SweetAlert\Facades\Alert;

class PesananController extends Controller
{
    public function listorder()
    {
        $grandtotal=0;
        // $isikeranjang = Cart::where('users_id',Auth::user()->users_id)->get();
        $listorder = PESANANCART::where('akun_id',1)->get();
        foreach ($listorder as $item) {
            if($item->verifikasi==true){
                $grandtotal=$grandtotal+($item->menu_relation->harga_menu * $item->quantity);
            }
        }
        return view('RoleMeja.listpesanan',[
                    "cart"=>$listorder,
                    "grandtotal"=>$grandtotal
        ]);
    }

    public function update(Request $request)
    {
       $cart_id = $request->cart_id;
       $quantity =$request->quantity;
      $cartmaudiupdate = PESANANCART::where('cart_id',$cart_id)->first();
      $cartmaudiupdate->cart_quantity=$quantity;
        if($cartmaudiupdate->save()){
            return response()->json([
                'sukses'
               ]);
        }
    }


    public function total(Request $request)
    {
        // $isikeranjang = PESANANCART::where('users_id',Auth::user()->users_id)
        //                                 ->where('cart_checked',1)
        //                                 ->get();
        $isikeranjang = PESANANCART::where('akun_id',1)->get();
        $grandtotal=0;
        foreach ($isikeranjang as $item) {
            $qty = $item->cart_quantity;
            $harga = $item->game_relation->game_sell_price;
            $grandtotal=$grandtotal+($qty*$harga);
        }
        return response()->json([
            array(
                $grandtotal
            )
        ]);
    }


    public function changecheckbox(Request $request)
    {
       $updatecheck = PESANANCART::where('cart_id',$request->cart_id)->first();
       if( $request->checked=='true'){
        $updatecheck->cart_checked = 1;
       }
       if( $request->checked=='false'){
        $updatecheck->cart_checked = 0;
       }

        if($updatecheck->save()){
            return response()->json([
                $request->checked,
                $updatecheck->cart_checked,
                $updatecheck->cart_id
               ]);
        }
    }

    protected function hapuscart (Request $request){
        PESANANCART::where('cart_id',$request->cart_id)->delete();
        return redirect(URL::to('/selenium/listorder'));
    }

    public function simpan(Request $request){
        // $isikeranjang = Cart::where('users_id',Auth::user()->users_id)
        //                                 ->where('cart_checked',1)
        //                                 ->get();
        $isikeranjang = PESANANCART::where('akun_id',1)->get();

        if(count($isikeranjang)==0){
            Alert::warning('Warning Title', 'keranjang Kosong');
            return redirect(URL::to('/LudensGameStore/cart'));
        }
        return redirect(URL::to('/LudensGameStore/Checkout'));
    }
}
