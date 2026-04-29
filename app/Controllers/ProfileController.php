<?php

namespace App\Controllers;

class ProfileController extends BaseController
{
    public function index()
    {
        return view('v_profile', [
            'username' => session()->get('username'),
            'role' => session()->get('role'),
            'email' => session()->get('email'),
            'login_time' => session()->get('login_time'),
            'login_status' => session()->get('login_status') ?? 'Belum Login',
        ]);
    }
}
