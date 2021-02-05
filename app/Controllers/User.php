<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        //Title
        $data['title'] = 'My Profile';

        //View
        return view('user/index', $data);
    }
}
