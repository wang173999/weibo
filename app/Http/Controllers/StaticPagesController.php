<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //静态页面控制器中指定好三个页面对应的动作
    public function home()
    {
        return view('static_pages/home');
    }

    public function help()
    {
        return view('static_pages/help');
    }

    public function about()
    {
        return view('static_pages/about');
    }
}
