<?php

namespace App\Http\Controllers;

use App\Models\MENU as ModelsMENU;
use Database\Seeders\Menu;
use Illuminate\Http\Request;

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

}
