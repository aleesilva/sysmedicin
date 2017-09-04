<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Financeiro extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Paciente_model','paciente',TRUE);
		$this->load->model('Financeiro_model','financeiro',TRUE);
		$this->load->library('pagination');
	}

	public function index()
    {
        $this->template->load('layout','financeiro/pagamento.php');
	}
	public function movimento()
	{

		$busca = $this->input->get('busca');
             $url_paginacao = $busca != NULL ? base_url('movimento?busca='.$busca.'&') :
                 base_url('movimento?'); 
           
           /**Paginação*/
                $get_total_results = $this->financeiro->getMovimento($busca);
               
                 $total_resultados = $get_total_results['total'];
                 $get_paginacao = $this->paginacao_func($url_paginacao, $total_resultados, 10);
                 
                 
                 $get_users = $this->financeiro->getMovimento($busca,$get_paginacao['inicio'],$get_paginacao['qtidade_re']);
                 
                 
                // $this->load->view('paginado',
                //         array("user"=>$get_users['dados'],
                //     'busca'=>$busca,
                //     "pag"=>$get_paginacao['paginacao']));
            



		// $data['Agenda'] = $this->paciente->getAgenda();
		$this->template->load('layout','financeiro/lista-movimento',
					array("movimentos"=>$get_users['dados'],
                    'busca'=>$busca,
                    "paginacao"=>$get_paginacao['paginacao']));


		// $data['movimentos'] = $this->financeiro->getMovimento();
		// $this->template->load('layout','financeiro/lista-movimento.php',$data);	
	}
	public function adicionaPagamento()
	{
		$data['paciente'] = $this->input->post('paciente');
		$data['nome_pagante'] = $this->input->post('nomepagante');
		$data['cpf_pagante'] = $this->input->post('cpf');
		$data['data'] = $this->input->post('data');
		$data['valor'] = $this->input->post('pagamento');
		$data['tipo_pagamento'] = $this->input->post('tipopagamento');
		if($this->financeiro->adicionaPagamento($data));
			redirect('movimento','refresh');

	}
	public function imprimirRecibo()
	{
			$data['id'] = $this->input->post('id');
			$data['paciente'] = $this->financeiro->getRecibo($data);
			$this->load->view('financeiro/imprimir-recibo',$data);
	}
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

/* End of file financeiro.php */
/* Location: ./application/controllers/financeiro.php */