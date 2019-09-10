<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{

    public function index()
    {
        $page_name = "Users";

        $users = App::get('database')->selectAll('users');


        return view('users', compact([
            'users',
            'page_name'
        ]));
    }

    public function store()
    {
        App::get('database')->insert('users', [
            'name'=> $_REQUEST['name']
        ]);

        redirect('users');
    }

}