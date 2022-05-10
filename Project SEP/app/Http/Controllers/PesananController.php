<?php

namespace App\Http\Controllers;

use App\Models\PESANANCART;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use RealRashid\SweetAlert\Facades\Alert;
use SebastianBergmann\Environment\Console;

class PesananController extends Controller
{
    public function listorder()
    {
        if(Auth::user()==null){
            return redirect('selenium/login');
        }
        else{
            $grandtotal=0;
            $listorder = PESANANCART::where('akun_id',Auth::user()->akun_id)->get();
            foreach ($listorder as $item) {
                // if($item->verifikasi==true){
                    $grandtotal=$grandtotal+($item->menu_relation->harga_menu * $item->quantity);
                // }
            }

            return view('RoleMeja.listpesanan',[
                        "cart"=>$listorder,
                        "grandtotal"=>$grandtotal
            ]);
        }

    }

    public function update(Request $request)
    {
       $cart_id = $request->cart_id;
       $quantity =$request->quantity;
      $cartmaudiupdate = PESANANCART::where('pesanancart_id',$cart_id)->first();
      $cartmaudiupdate->quantity=$quantity;
        if($cartmaudiupdate->save()){
            return response()->json([
                "sukses",
                "cart_id"=>$cart_id,
                $quantity
               ]);
        }
    }


    public function total(Request $request)
    {
        // $isikeranjang = PESANANCART::where('users_id',Auth::user()->users_id)
        //                                 ->where('cart_checked',1)
        //                                 ->get();
        $isikeranjang = PESANANCART::all();
        $grandtotal=0;
        foreach ($isikeranjang as $item) {
            $qty = $item->quantity;
            $harga = $item->menu_relation->harga_menu;
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
        PESANANCART::where('pesanancart_id',$request->pesanancart_id)->delete();
        return redirect(URL::to('/selenium/pesanan'));
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

    public function pembayaran(Request $request)
    {
        // $user=Auth::user()->users_id;
        // $saldo= Auth::user()->users_saldo;
        $items=PESANANCART::where('akun_id',1)
        ->get();
        $total = 0;
        foreach ($items as $item) {
            $qty = $item->quantity;
            $harga = $item->menu_relation->harga_menu;
            $total=$total+($qty*$harga);
        }
        return response()->json([
           $invoice= array(
                'totaltagihan'=>$total,
            )
        ]);
    }
}
