<?php

namespace App\Controllers;

use App\Models\RegisterModel;

class LoginController extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        return view('loginView');
    }

    public function authenticate(){

        $loginModel = new RegisterModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

       $user = $loginModel->where('username',$username)->first();

       if(!$user || !password_verify($password,$user['password'])){
            return redirect()->back()->withInput()->with('error','Invalid username or password');
       }

       $userData = [
                'id' => $user['id'],
                'username' => $user['username'],
                'email' => $user['email'],
                'login_status' => true,
       ];

       session()->set($userData);

       return redirect()->to('/');
    }

    public function logout(){

        session()->destroy();
        return redirect()->to('/');

    }


}
