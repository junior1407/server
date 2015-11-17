<?php
class LoginModel extends CI_Model {



    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    function Confere($login,$senha,$tipo){

        $senha = md5($senha);

        $this->db->where('login', $login);
        $this->db->where('senha', $senha);
        $this->db->where('tipo',$tipo);
        $query = $this->db->get('logins');


        if (count($query->result())==1){
           return true;
        }
        return false;

    }

    function getByLogin($login){



        $this->db->where('login', $login);
        $query = $this->db->get('logins');


        return $query->result()[0]->idacessor;

    }



}
