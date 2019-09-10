<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{

    public function home()
    {
        $page_name = "Home";

        $users = App::get('database')->selectAll('users');


        return view('index', compact([
            'users',
            'page_name'
        ]));
    }

    public function about()
    {
        $page_name = "About";

        return view('about', compact([
            'page_name'
        ]));
    }
}