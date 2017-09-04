<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Paciente_model','paciente',TRUE);
		$this->load->model('Usuarios_model','usuario',TRUE);
		$this->load->library('session');

	}


	public function index()
	{	
		
		// $this->template->load('login',$data);
		$this->load->view('login');
		
	}
	public function login()
	{

		$user = $this->input->post('usuario');
		$senha = md5($this->input->post('senha'));
		$data['Agenda'] = $this->paciente->getAgendaByData();
		$data['paciente_count'] = count($this->paciente->getPacienteCount());
		$data['agenda_count'] = count($this->paciente->getAgendaByData());
		$data['prontuario_count'] = count($this->paciente->getProntuarioCount());

		if($this->session->unset_userdata('usuario_logado'))
		{
			$this->template->load('layout','home',$data);
		}
		$usuario = $this->usuario->buscaPorUsuarioSenha($user,$senha);
		if($usuario)
		{
			
			$this->session->set_userdata('usuario_logado',$usuario);
			$data['session'] = $this->session->userdata('usuario_logado');
			$this->template->load('layout','home',$data);

			
		}else{
			redirect('welcome','refresh');
		}
	}
	public function logout()
	{
		session_destroy();
		redirect('welcome','refresh');
	}
	public function home()
	{


		$data['Agenda'] = $this->paciente->getAgendaByData();
		$data['paciente_count'] = count($this->paciente->getPacienteCount());
		$data['agenda_count'] = count($this->paciente->getAgendaByData());
		$data['prontuario_count'] = count($this->paciente->getProntuarioCount());
		$data['session'] = $this->session->userdata('usuario_logado');


	
		$this->template->load('layout','home',$data);
	}

	
}
