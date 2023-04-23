<?php

namespace App\Controllers;

class TestMailController extends BaseController
{
    public function index()
    {

        $to = 'adhiss3000@gmail.com';
        $subject = 'Test Email';
        $message = "Test Message";

        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom("maxhome3000@gmail.com");
        $email->setSubject($subject);
        $email->setMessage($message);
       if($email->send()){
        echo "email Sent";
       }else{
        $data = $email->printDebugger(['headers']);
        print_r($data);
       }


        //return view('homeView');
    }


}
