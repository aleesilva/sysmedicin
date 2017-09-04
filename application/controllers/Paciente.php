<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paciente extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Paciente_model','paciente',TRUE);
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->library('session');
		
		
	}

	//função autocomplete
	public function search()
	{
		if(isset($_GET['term'])){
			$nome = strtoupper($_GET['term']);
			$this->paciente->autocomplete($nome);
		}
	
	}

	public function index()
	{
	
		
		$data['paciente_count'] = count($this->paciente->getPacienteCount());
		$data['agenda_count'] = count($this->paciente->getAgendaByData());
		$data['prontuario_count'] =  count($this->paciente->getProntuarioCount());

		$this->template->load('layout','home',$data);

	}
	//função para popular tabela de pacientes cadastrados
	public function listaCadastro()
	{		
			$busca = $this->input->get('busca');
             $url_paginacao = $busca != NULL ? base_url('lista-pacientes?busca='.$busca.'&') :
                 base_url('lista-pacientes?'); 
           
           /**Paginação*/
                $get_total_results = $this->paciente->getPacientes($busca);
               
                 $total_resultados = $get_total_results['total'];
                 $get_paginacao = $this->paginacao_func($url_paginacao, $total_resultados, 30);
                 
                 
                 $get_users = $this->paciente->getPacientes($busca,$get_paginacao['inicio'],$get_paginacao['qtidade_re']);
                 
                 
   //              $this->load->view('paginado',
   //                      );

			// $data['Lista'] = $this->paciente->getPacientes();
			$this->template->load('layout','pacientes/listagem-pacientes',
					array("Lista"=>$get_users['dados'],
                    'busca'=>$busca,
                    "paginacao"=>$get_paginacao['paginacao']));
	}


	//Função que cadastra as consultas do dia
	public function cadastroConsultas()
	{	
		 $busca = $this->input->get('busca');
             $url_paginacao = $busca != NULL ? base_url('agenda?busca='.$busca.'&') :
                 base_url('agenda?'); 
           
           /**Paginação*/
                $get_total_results = $this->paciente->getAgenda($busca);
               
                 $total_resultados = $get_total_results['total'];
                 $get_paginacao = $this->paginacao_func($url_paginacao, $total_resultados, 10);
                 
                 
                 $get_users = $this->paciente->getAgenda($busca,$get_paginacao['inicio'],$get_paginacao['qtidade_re']);
                 

		 // $data['Agenda'] = $this->paciente->getAgendaByData();
		// $nomes = $this->paciente->PopulaSelect();
		 // var_dump($this->session->userdata('usuario_logado'));die;
		 // $this->template->load('layout','pacientes/cadastro-de-consultas',$data);
		 $this->template->load('layout','pacientes/cadastro-de-consultas',
					array("Agenda"=>$get_users['dados'],
                    'busca'=>$busca,
                    "paginacao"=>$get_paginacao['paginacao']
                    ));


	}
	//função que exibe a agenda do dia
	public function Agenda()
	{
		$busca = $this->input->get('busca');
             $url_paginacao = $busca != NULL ? base_url('agenda?busca='.$busca.'&') :
                 base_url('agenda?'); 
           
           /**Paginação*/
                $get_total_results = $this->paciente->getAgenda($busca);
               
                 $total_resultados = $get_total_results['total'];
                 $get_paginacao = $this->paginacao_func($url_paginacao, $total_resultados, 10);
                 
                 
                 $get_users = $this->paciente->getAgenda($busca,$get_paginacao['inicio'],$get_paginacao['qtidade_re']);
                 
                 
                // $this->load->view('paginado',
                //         array("user"=>$get_users['dados'],
                //     'busca'=>$busca,
                //     "pag"=>$get_paginacao['paginacao']));
            



		// $data['Agenda'] = $this->paciente->getAgenda();
		$this->template->load('layout','pacientes/agenda',
					array("Agenda"=>$get_users['dados'],
                    'busca'=>$busca,
                    "paginacao"=>$get_paginacao['paginacao']));
	}
	//função para criar prontuario.
	public function Prontuario()
	{	

		// $data['nomes'] = $this->paciente->PopulaSelect();
		// $json = $this->paciente->PopulaSelect();
		// $nomes = json_encode($json);
		// // echo "<pre>";print_r($nomes); echo "</pre>"; die;

		$this->template->load('layout','pacientes/prontuario');	
	}
	//função que lista os prontuarios existentes
	public function listaProntuario()
	{	
		$busca = $this->input->get('busca');
             $url_paginacao = $busca != NULL ? base_url('listagem-de-prontuario?busca='.$busca.'&') :
                 base_url('listagem-de-prontuario?'); 
           
           /**Paginação*/
                $get_total_results = $this->paciente->getProntuarios($busca);
               
                 $total_resultados = $get_total_results['total'];
                 $get_paginacao = $this->paginacao_func($url_paginacao, $total_resultados, 30);
                 
                 
                 $get_users = $this->paciente->getProntuarios($busca,$get_paginacao['inicio'],$get_paginacao['qtidade_re']);
                 
                 
                // $this->load->view('paginado',
                //         array("list"=>$get_users['dados'],
                //     'busca'=>$busca,
                //     "pag"=>$get_paginacao['paginacao']));



		// $data['List'] = $this->paciente->getProntuarios();
		$this->template->load('layout','pacientes/lista-prontuario', array("list"=>$get_users['dados'],
                    'busca'=>$busca,
                    "paginacao"=>$get_paginacao['paginacao']));	
	}
	public function listaExames()
	{
		$busca = $this->input->get('busca');
             $url_paginacao = $busca != NULL ? base_url('listagem-de-exames?busca='.$busca.'&') :
                 base_url('listagem-de-exames?'); 
           
           /**Paginação*/
                $get_total_results = $this->paciente->getExames($busca);
               
                 $total_resultados = $get_total_results['total'];
                 $data['lista'] = $this->paciente->getExames();
                 $get_paginacao = $this->paginacao_func($url_paginacao, $total_resultados, 30);
                 
                 
                 $get_users = $this->paciente->getExames($busca,$get_paginacao['inicio'],$get_paginacao['qtidade_re']);
                 
                 
                // $this->load->view('paginado',
                //         array("user"=>$get_users['dados'],
                //     'busca'=>$busca,
                //     "pag"=>$get_paginacao['paginacao']));
            
		// $data['lista'] = $this->paciente->getExames();
		$this->template->load('layout','pacientes/lista-exames',
								array("lista"=>$get_users['dados'],
					                  "busca"=>$busca,
					                  "paginacao"=>$get_paginacao['paginacao']));
						}

	//função que cadastra exames
	public function Exames()
	{	//$data['nomes'] = $this->paciente->PopulaSelect();
		$this->template->load('layout','pacientes/cadastro-de-exames');		
	}



	 public function cadastro()
	 {
	 	$this->template->load('layout','pacientes/cadastro');
	 }



//Rotinas Controller Paciente


	 public function cadastrarPaciente()
	 {
	 		//rotina para cadastro
	 	


				$data['nome'] = $this->input->post('nome');
				$data['cpf'] = $this->input->post('cpf');
				$data['rg'] = $this->input->post('rg');
				$data['tipo_sanguineo'] = $this->input->post('tipsang');
				$data['estado_civil'] = $this->input->post('estcivil');
				$data['sexo'] = $this->input->post('sexo');
				$data['data_nascimento'] = $this->input->post('DataNasc');
				$data['idade'] = $this->input->post('idade');
				$data['cep'] = $this->input->post('cep');
				$data['rua'] = $this->input->post('rua');
				$data['bairro'] = $this->input->post('bairro');
				$data['cidade'] = $this->input->post('cidade');
				$data['estado'] = $this->input->post('uf');
				$data['ibge'] = $this->input->post('ibge');
				$data['telefone1'] = $this->input->post('telefone1');
				$data['telefone2'] = $this->input->post('telefone2');
				$data['telefone3'] = $this->input->post('telefone3');
				$data['telefone4'] = $this->input->post('telefone4');
				$data['email'] = $this->input->post('email');
				$data['observacoes'] = $this->input->post('obs');
				$data['indicacao'] = $this->input->post('indicacao');
				// echo "<pre>";var_dump($data);die;
				
				if($this->paciente->insertPaciente($data));
				 redirect('cadastro-paciente');
	 }
	 public function cadastrarConsulta()
	 {
	 			$data['nome'] = $this->input->post('paciente');
		 		$data['data'] = $this->input->post('dataconsulta');
				$data['horario'] = $this->input->post('horario');
				$data['motivo'] = $this->input->post('motivo');
				$data['observacoes'] = $this->input->post('observacao');	
			if($this->paciente->insertConsulta($data))
				redirect('cadastro-de-consultas','refresh');
			
	
				
	 }
	 public function consultaRealizada()
	 {
	 	date_default_timezone_set('America/Sao_Paulo');
		$date = date('H:i:s');
	 	$data['id'] =  $this->input->post('id');
	 	$data['status'] = 'consulta realizada';
	 	$data['hora_saida'] = $date;
	 	if($this->paciente->consultaRealizada($data));
	 		redirect('agenda','refresh');

	 }
	 public function chegada()
	 {
	 	date_default_timezone_set('America/Sao_Paulo');
		$date = date('H:i:s');
	 	$data['id'] = $this->input->post('id');
	 	$data['status'] = 'chegada';
	 	$data['hora_chegada'] = $date;
	 	if ($this->paciente->chegada($data));
	 		redirect('agenda','refresh');
	 }
	 public function confirmarConsulta()
	 {
	 	
	 	$data['id'] =  $this->input->post('id');
	 	$data['status'] = 'confirmar consulta';
	 	
	 	if($this->paciente->confirmarConsulta($data));
	 		redirect('agenda','refresh');
	 }
     public function editarConsulta()
	{
		$data['id'] = $this->input->post('id');
		$data['paciente'] = $this->paciente->getPacienteById($data);
		$data['Agenda'] = $this->paciente->getAgenda();
		$this->template->load('layout','pacientes/editar-consulta',$data);
	}
	 public function editarPaciente()
	{
		$data['id'] = $this->input->post('id');
		$data['paciente'] = $this->paciente->PacienteById($data);
		$this->template->load('layout','pacientes/editar-paciente',$data);
	}
	 public function alterarPaciente()
	{
		$data['id'] = $this->input->post('id');
		$data['nome'] = $this->input->post('nome');
		$data['cpf'] = $this->input->post('cpf');
		$data['rg'] = $this->input->post('rg');
		$data['tipo_sanguineo'] = $this->input->post('tipsang');
		$data['estado_civil'] = $this->input->post('estcivil');
		$data['sexo'] = $this->input->post('sexo');
		$data['data_nascimento'] = $this->input->post('DataNasc');
		$data['idade'] = $this->input->post('idade');
		$data['cep'] = $this->input->post('cep');
		$data['rua'] = $this->input->post('rua');
		$data['bairro'] = $this->input->post('bairro');
		$data['cidade'] = $this->input->post('cidade');
		$data['estado'] = $this->input->post('uf');
		$data['ibge'] = $this->input->post('ibge');
		$data['telefone1'] = $this->input->post('telefone1');
		$data['telefone2'] = $this->input->post('telefone2');
		$data['telefone3'] = $this->input->post('telefone3');
		$data['telefone4'] = $this->input->post('telefone4');
		$data['email'] = $this->input->post('email');
		$data['observacoes'] = $this->input->post('obs');
		$data['indicacao'] = $this->input->post('indicacao');
		if($this->paciente->alterarPaciente($data));
			redirect('lista-pacientes','refresh');
	}
	 public function alteraConsulta()
	{
		$data['id'] = $this->input->post('id');
		$data['data'] = $this->input->post('dataconsulta');
		$data['horario'] = $this->input->post('horario');
		$data['motivo'] = $this->input->post('motivo');
		$data['observacoes'] = $this->input->post('observacao');
		// var_dump($data); die;
		if($this->paciente->alteraConsulta($data));
			redirect('agenda','refresh');
	}
	 public function cadastraProntuario()
	{
		$data['paciente'] = $this->input->post('paciente');
		$data['sexo'] = $this->input->post('sexo');
		$data['alergias'] = $this->input->post('alergias');
		$data['historico_doenca'] = $this->input->post('molestia');
		$data['antecedentes_habitos'] = $this->input->post('habitos');
		$data['antecedentes_medicacao'] = $this->input->post('medicamentos');
		if($this->paciente->cadastraProntuario($data));
			redirect('listagem-de-prontuario','refresh');
	}
	 public function editaProntuario()
	{
		$data['id'] = $this->input->post('id');
		$data['prontuario'] = $this->paciente->getProntuarioById($data);
		$this->template->load('layout','pacientes/editar-prontuario',$data);

	}
	 public function alterarProntuario()
	{
		$data['id_prontuario'] = $this->input->post('id');
		$data['paciente'] = $this->input->post('paciente');
		$data['sexo'] = $this->input->post('sexo');
		$data['alergias'] = $this->input->post('alergias');
		$data['historico_doenca'] = $this->input->post('molestia');
		$data['antecedentes_habitos'] = $this->input->post('habitos');
		$data['antecedentes_medicacao'] = $this->input->post('medicamentos');
		 // echo "<pre>";var_dump($data);die;
		if($this->paciente->alterarProntuario($data));
			redirect('listagem-de-prontuario','refresh');
	}
	 public function cadastroExames()
	{
		$data['paciente'] = $this->input->post('paciente');
		$data['data_exame'] = $this->input->post('dataexame');
		$data['exames'] = $this->input->post('exames');
		$data['laboratorio'] = $this->input->post('laboratorio');
		$data['realizacao'] = $this->input->post('realizacao');
		// echo "<pre>";var_dump($data);die;
		if($this->paciente->cadastraExames($data));
			redirect('listagem-de-exames','refresh');
	}
	 public function fichaPaciente()
	{
		$id['id'] = $this->input->post('id');
		$data['dados'] = $this->paciente->fichaPaciente($id);
		// $paciente['pacientes'] = $this->paciente->teste1($data);
		// $data['prontuario'] = $this->paciente->teste2($data);
		// echo "<pre>";var_dump($data); die;
		$this->template->load('layout','pacientes/ficha-paciente',$data);
	}
	 public function imprimiEnvelope()
	{
			$data['id'] = $this->input->post('id');
			$data['dados'] = $this->paciente->getDadosEnvelope($data);
			$this->load->view('pacientes/imprimir-envelope',$data);
	}
	 public function imprimiProntuario()
	{
			$data['id'] = $this->input->post('id');
			$data['dados'] = $this->paciente->PacienteById($data);
			$this->load->view('pacientes/imprimir-prontuario',$data);	
	}
	 public function paginado(){
            
            /*Paginação*/
        }
        /*Função generica coloque onde quiser*/
        public function paginacao_func($url_pagination,$total_resultados,$resultados_per_pagina=10){
            $config['base_url'] = $url_pagination;

            $config['total_rows'] = $total_resultados;
            $config['per_page'] = $resultados_per_pagina;
            $config['page_query_string'] = TRUE;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';

            $config['first_link'] = 'Primeiro';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';

            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';

            $config['last_link'] = 'Último';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';

            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';

            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';

            $config['cur_tag_open'] = '<li class="current"><a href="">';
            $config['cur_tag_close'] = '</a></li>';

            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';

            $qtidade = $config['per_page'];
            $this->pagination->initialize($config);
            
            $dados['qtidade_re'] = $qtidade;
            $dados['inicio'] = $this->input->get('per_page') != NULL ? $this->input->get('per_page') :  '0'; 
            $dados['paginacao'] = $this->pagination->create_links();
            return $dados;
        }

}
/* End of file Paciente.php */
/* Location: ./application/controllers/Paciente.php */