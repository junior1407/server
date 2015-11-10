<?php
class LigacaoModel extends CI_Model {

    public $title;
    public $content;
    public $date;

    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function getAll(){

        $query = $this->db->get('ligacao');
        echo var_dump($query->result());
     //  foreach($query->result() as $row){
      //      echo var_dump($row);
        //}

    }

}