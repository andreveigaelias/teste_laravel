<?php

namespace App\Http\Controllers;

use App\Menu;


class MenuControler extends Controller
{

    public function index()
    {
        $menu = Menu::with('Submenu')->get();

        return view('menu.index', compact('menu'));
    }


}
