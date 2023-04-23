<?php

namespace App\Controllers;
use App\Libraries\CustLib;

class TestLibController extends BaseController
{
    public $custLib;
    
    public function __construct(){
         $this->custLib = new CustLib();
    }

    public function index()
    {
        
        $data =  $this->custLib->getData();

        print_r($data);

    }


}
