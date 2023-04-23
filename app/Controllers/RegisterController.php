<?php

namespace App\Controllers;

use App\Models\RegisterModel;

class RegisterController extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        return view('registerView');
    }

    public function create(){

        $data = [
                'username' => $this->request->getPost('username'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'email' => $this->request->getPost('email'),
        ];

        $regModel = new RegisterModel();

       if($regModel->save($data)){
            return redirect()->to('register')->with('success','Your account has been created.');
       }else{
            return redirect()->back()->withInput()->with('errors',$regModel->errors());
       }

        // print_r($data);



    }


}