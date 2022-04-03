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
}
