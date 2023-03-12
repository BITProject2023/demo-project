<?php

namespace App\Controllers;

class DbTestController extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();

        $query = $db->query('select * from student');

        $result = $query->getResult();
        echo "<pre>";
        print_r($result); 

        $this->getTrainingData();

    }

    public function getTrainingData(){

        $db2 = \Config\Database::connect("dbcon2");

        $query = $db2->query('SELECT * FROM `tbl_training_types`');

        $result = $query->getResult();

        echo "<br> <hr> <pre>";

        print_r($result);


    }


}
