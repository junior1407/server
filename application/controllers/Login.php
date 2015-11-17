<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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

                  if ($this->session->logged_in)
                  {
					  if ($this->session->tipo ==1){
						  redirect('acessor');
					  }
					  if ($this->session->tipo==2){

						  //redirect admin
					  }
					  else{
						  redirect('login');
					  }
                   ///   redirect('login'); // the user is not logged in, redirect them!
                  }

	}
	public function index()
	{
		$data['erro'] = false;
		$this->load->view('login_page/index',$data);
	}
	public function processarLogin(){

           $tipo = $this->input->post('tipo');
		$login = $this->input->post('login');
		$this->load->model('LoginModel');
		if ($this->LoginModel->confere($login, $this->input->post('senha'), $tipo)){
			//Login com sucesso
			$userdata = array(
				'tipo' => $tipo,
				'login' => $login,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($userdata);
			redirect("/login", 'refresh');
		}
		else{
			$data['erro'] = true;
			$this->load->view('login_page/index',$data);
		}



	}





	/*public function index()
	{
		$this->load->model('LigacaoModel');

		//$this->load->view('welcome_message');
		$this->load->view('logado_acessor/index');
		$this->LigacaoModel->getAll();
	}*/



}
