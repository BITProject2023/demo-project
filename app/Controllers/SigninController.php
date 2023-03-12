<?php

namespace App\Controllers;

class SigninController extends BaseController
{
    public function index()
    {
        return view('signinView');
    }

    public function forgetPassword($userid = null){

        echo "forgetPassword function" . $userid  ;

    }

    public function _remap($method, $para1 = null)
    {
      
        // if($method=="index"){
        //   // return $this->index();

        //   return $this->$method();
        // }
        // elseif($method == "forgetPassword"){

        //     return $this->$method($para1);
            
        // }else{
        //    // echo "Page Not Found";

        //    return $this->index();
        // }

        if(method_exists($this,$method)){
            return $this->$method($para1);
        }else{
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }



        
    }




}
