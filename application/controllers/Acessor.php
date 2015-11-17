<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acessor extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
	{
		parent::__construct();
		$this->load->model('LigacaoModel');
		if ($this->session->logged_in)
		{

			if ($this->session->tipo==2){

				//redirect admin
			}


		}	else{


			redirect('login');
		}

	}
	public function index()
	{


		//$this->load->view('welcome_message');
		$this->load->view('logado_acessor/cabecalho');
		$this->load->view('logado_acessor/index');
	//	$this->LigacaoModel->getAll();
	}

	public function adicionarLigacao(){
		$this->load->view('logado_acessor/cabecalho');
		$this->load->view('logado_acessor/addChamada1');

	}
	public function adicionarLigacao2(){
	  $tel = $this->input->post("telefone");
		$this->load->model('pessoaModel');
		if ($this->pessoaModel->Confere($tel)){
			$data['record']=  $this->pessoaModel->getByNumero($tel);
			$this->load->view('logado_acessor/cabecalho');
			$this->load->view('logado_acessor/addChamada2-1',$data);
		}
		else{
        $data['record'] = $tel;

			$this->load->view('logado_acessor/cabecalho');
			$this->load->view('logado_acessor/addChamada2-2', $data);
		}

}
	public function processaLigacao1(){
		$this->load->model('loginModel');
		$this->load->model('ligacaoModel');
		$this->load->model('pessoaModel');
		//$this->pessoaModel->add("adella", "2");
		$idacessor =$this->loginModel->getByLogin($this->session->login);
		   $data = date('Y-m-d H:i:s');
		$idpessoa = $this->input->post("idnumero");

           $interesse = $this->input->post("interesse");

		   $situacao  = $this->input->post("situacao");

		$observacao  = $this->input->post("obs");
		$this->ligacaoModel->add($data,$interesse,$situacao,$observacao,$idacessor,$idpessoa);

	}

	public function processaLigacao2(){
		echo "etrando";
		$this->load->model('loginModel');
		$this->load->model('ligacaoModel');
		$this->load->model('pessoaModel');

		$idacessor =$this->loginModel->getByLogin($this->session->login);
		$data = date('Y-m-d H:i:s');
		$nome = $this->input->post('nome');
		$numero =$this->input->post('telefone');

		$idpessoa = $this->pessoaModel->add($nome, $numero);


		$interesse = $this->input->post("interesse");

		$situacao  = $this->input->post("situacao");

		$observacao  = $this->input->post("obs");

		$this->ligacaoModel->add($data,$interesse,$situacao,$observacao,$idacessor,$idpessoa);

	}

}
