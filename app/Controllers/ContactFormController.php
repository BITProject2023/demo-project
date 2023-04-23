<?php

namespace App\Controllers;

use App\Models\FormDataModel;

class ContactFormController extends BaseController
{

   public $formDataModel;

    public function __construct(){

        //$session = \Config\Services::session();
        //$session->start();              
       // helper(['url', 'form']);
        
        $this->formDataModel = new FormDataModel();

      
        
    }


    public function index()
    {


        $dd = $this->formDataModel->VeryfyUser(19);

       // print_r($dd);

      //  echo verify_hash('23434324 rtyeryy','$2y$10$a09Qp9iOyzwShzWdEHFq2OMlLT4PAH9/hqkDgIX6ofNERhKGkws5.');

        $flag =  password_verify('abc','$2y$10$fOvmeALnn6xmP159XaHpreh4G0QK6c7s92hhWLRUxNQhC6vr.2JWi');

        if($flag == true){
            echo "True";
        }

        if($flag == false){
            echo "False";
        }
        
       

        $session = \Config\Services::session();

        $data = [];
        $validated_data = [];

        $rule = [
                'email' => 'required',
                'mobile' => 'required|numeric|exact_length[10]',
                'message' => 'required',                
        ];

       if($this->request->getMethod()=='post'){

        
            if($this->validate($rule)){
               
                $pw = $this->request->getVar('message',FILTER_SANITIZE_STRING);
               $ppw =  password_hash($pw, PASSWORD_BCRYPT);
               
                $validated_data = [
                                'cf_email'=>$this->request->getVar('email',FILTER_SANITIZE_STRING),
                                'cf_mobile'=>$this->request->getVar('mobile',FILTER_SANITIZE_STRING),
                                'cf_message'=>$ppw,
                                // 'cf_message'=>$this->request->getVar('message',FILTER_SANITIZE_STRING),
                ];

                $sts = $this->formDataModel->SaveData($validated_data);

                if($sts==true){
                    // echo "Saved ";
         
                    $session->setTempdata('success', 'Thanks we\'ll get back to you soon',3);
                    return redirect()->to(current_url());
                 }else{
                     $session->setTempdata('error', 'Sorry!, Try Again',3);
                     return redirect()->to(current_url());
         
                 }


            }else{

               $data['validation'] = $this->validator;

            }



       }

        return view('contactUsView', $data);
    }


}
