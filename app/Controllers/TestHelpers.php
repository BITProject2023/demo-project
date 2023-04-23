<?php

namespace App\Controllers;

class TestHelpers extends BaseController
{
    public function __construct(){
        helper("form");
    }

    public function index()
    {
        $data = [];
        $rules = [
            'username' => 'required',
            'email' => 'required|valid_email',
            'mobile' => 'required'
        ];

       


        if($this->request->getMethod()=='post'){

            if($this->validate($rules)){
                echo "Validated";
            }else{
                $data['validation'] = $this->validator;
            }

        }


        return view('helperFormView',$data);
    }


}
