<?php
namespace App\Libraries;
use App\Models\AutoModel;
class CustLib{

    public $db;
    public $am;

    public function __construct(){
        $this->db = \Config\Database::connect();
        $this->am = new AutoModel();
    }

    public function getData(){

        return  $this->am->findAll();

       // return $this->db->query('select * from student')->getResultArray();
    }

} 

?>