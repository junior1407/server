<?php
class PessoaModel extends CI_Model {



    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    function Confere($numero){


    $this->db->where('numero', $numero);
    $query = $this->db->get('pessoa');


    if (count($query->result())==1){
        return true;
    }
    return false;

}
    function getByNumero($numero){


        $this->db->where('numero', $numero);
        $query = $this->db->get('pessoa');

        return $query->result()[0];


    }

    function add($nome, $numero){
        $data = array(
            'nome' => $nome,
            'numero' => $numero,
        );

        $this->db->insert('pessoa', $data);
        return $this->db->insert_id();


    }




}
