<?php

namespace App\Controllers;

use App\Models\TestDataModel;

class TestModelController extends BaseController
{
    public function index()
    {
      
        $testModel = new TestDataModel();

       $data['students'] = $testModel->getData();

       // print_r($data);

        return view('TestView',$data);
    }

    public function getStudentInfo(){

        $testModel = new TestDataModel();

       $result["std_info"] = $testModel->getDatafromDB();

       return view('TestView',$result);

    }


}
