<?php

namespace App\Http\Controllers;

use App\Models\MENU as ModelsMENU;
use App\Models\PESANANCART;
use Database\Seeders\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class Home extends Controller
{
        public function home (){
        $listmenu = ModelsMENU::all();
        return view('Selenium',["listmenu"=>$listmenu]);
        }

        public function aboutus(){

            return view('aboutus');
        }

        public function menu(){
            $listmenu = ModelsMENU::orderby('updated_at','Desc')->Paginate(12);
            return view('menu',["listmenu"=>$listmenu]);
        }

        public function customorder(){
            return view('customorder');
        }


        public function menudetail(Request $Request,$nama_menu)
        {
            $MenuTampil = ModelsMENU::where('nama_menu',$nama_menu)->first();
            return view('menudetail',["menu"=>$MenuTampil]);
        }



        protected function addpesanan(Request $request,$nama_menu)
        {
            $quantity=$request->quantity;
            $menu=ModelsMENU::where('nama_menu',$nama_menu)->first();
            if($quantity<=0){
                return redirect()->back()->with('pesangagal','Quantity tidak boleh 0');
            }
            // elseif(Auth::user()==null){
            //     return redirect('LudensGameStore/login');
            // }
            else{
                $datakembar=PESANANCART::where('menu_id',$menu->menu_id)
                                        // ->where('users_id',Auth::user()->users_id)
                                        ->first();
                if($datakembar!=null){
                    $tempqty=$datakembar->quantity+$quantity;
                    $datakembar->quantity=$tempqty;
                    $datakembar->save();
                    Alert::success('Sukses menbambahkan ke list pesanan', $quantity.' mangkuk '.$menu->nama_menu);
                    return redirect()->back();
                }
                else{
                    PESANANCART::create([
                    'menu_id'=>$menu->menu_id,
                    'quantity'=>$quantity,
                    // 'akun_id'=>Auth::user()->users_id,
                    'akun_id'=>1,
                    'verifikasi'=>false
                ]);
                Alert::success('Sukses menbambahkan ke list pesanan', $quantity.' mangkuk '.$menu->nama_menu);
                return redirect()->back();
                }
            }
        }
}
