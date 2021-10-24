<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');

    }

    public function index_admin()
    {
        return view('index_admin');

    }
    public function index_user()
    {
        return view('index_user');

    }
}