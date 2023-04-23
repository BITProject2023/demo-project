<?php

namespace App\Models;
use CodeIgniter\Model;

class TestDataModel extends Model {

    public function getData(){

        $data = [
                    ['student_name' => 'Nimal Perera', 'email' => 'nimal@abc.com'],
                    ['student_name' => 'Supun Perera', 'email' => 'supun@abc.com'],
                    ['student_name' => 'Kasun Perera', 'email' => 'kasun@abc.com'],
                    ['student_name' => 'Madhawa Perera', 'email' => 'mad@abc.com'],
                ];

        return $data;

    }

    public function getDatafromDB(){

        $db = \Config\Database::connect();

        $query = $db->query('select * from student');

        $result = $query->getResult();

       if( (count($result)) > 0 ){

        return $result;

       }else{
        return false;
       }

    }

}

?>