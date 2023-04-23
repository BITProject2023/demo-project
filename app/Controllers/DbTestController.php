<?php

namespace App\Controllers;

use CodeIgniter\Database\Exceptions\DatabaseException;

class DbTestController extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();

       $query = $db->query('select * from student');

        //$result = $query->getResult();

       // $result = $query->getRow(1);

      // $data = $query->getFieldNames();

        echo "<pre>";
       // print_r($data);
        
        

         //   echo $query->getNumRows();

          //  echo "Count :". $db->table('student')->like('std_fname', 'd')->countAllResults();


           // echo "DB Platform " . $db->getPlatform();

           // echo $db->getVersion();


       // echo "<br> <hr>";

      // $this->getTrainingData(); 

        // foreach ($query->getResult() as $row) {
        //     echo "<br>" . $row->std_fname;
        //     echo "<br>" . $row->std_lname;
        //     echo "<br>" . $row->std_email_adress;
        // }

        // foreach ($query->getResult('array') as $row) {
        //     echo "<br>" . $row['std_fname'];
        //     echo "<br>" . $row['std_lname'];
        //     echo "<br>" . $row['std_email_adress'];
        // }


      //  $builder = $db->table('student');
        //$query   = $builder->get();
       // $builder->select('std_lname,std_email_adress');
       // $builder->selectMax('std_id', 'max_student_no');
       // $query = $builder->getWhere(['std_id ' => 2]);
       // $query = $builder->get();


        $builder = $db->table('student');
        $builder->select('*');
        $builder->join('tbl_courses', 'tbl_courses.course_id = student.std_course_id');
       // $builder->where('course_id', 1);
      // $builder->where("std_course_id=2");
       // $builder->like('student.std_lname', 'ba');
        $builder->orderBy('std_id', 'DESC');
        $query = $builder->get();


        try {
            $db->transException(true)->transStart();
            $db->query('select * from student');
            $db->query('select * from tbl_courses');
            
            $db->transComplete();
           // echo "Success...!";
        } catch (DatabaseException $e) {
            echo "Automatically rolled back already.";
            print_r($e);
        }


        $tables = $db->listTables();

            foreach ($tables as $table) {
              //  echo $table;
            }

            // $db->setPrefix('tbl_');
            // $db->prefixTable('student');

           ///echo   $DBPrefix = $db->getPrefix();

            // echo $db->prefixTable('student');



        //$result = $query->getResult();
      //  print_r($result);

    }


    public function getTrainingData(){

        $db2 = \Config\Database::connect("dbcon2");

        $query = $db2->query('SELECT * FROM `tbl_training_types`');

        $result = $query->getResult();

        echo "<br> <hr> <pre>";

        //print_r($result);


    }

    


}

?>
