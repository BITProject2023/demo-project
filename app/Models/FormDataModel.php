<?php

namespace App\Models;
use CodeIgniter\Model;


class FormDataModel extends Model {

    public function SaveData($data){

        $db = \Config\Database::connect();

        $builder = $db->table('contact_form');
        $res = $builder->insert($data);

        $affected_rows = $this->db->affectedRows();
        
        if($this->db->affectedRows() >= 1){

             return true;

         }else{

             return false;

         }
        
    }

    public function VeryfyUser($id){

        $db = \Config\Database::connect();

        $builder = $db->table('contact_form');
        $builder->select('cf_email,cf_mobile');
        $builder->where('cf_id',$id);
        $result = $builder->get();
        $row = $result->getRow();

        return $row;
        
    }


}

?>