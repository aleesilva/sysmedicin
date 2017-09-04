<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Financeiro_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function adicionaPagamento($data)
	{
		return $this->db->insert('tb_financeiro',$data);
	}
	public function getMovimento($nomebusca=null,$inicio=NULL,$quantidade=NULL)
	{
		
		$inicio = $inicio != NULL ? "LIMIT {$inicio},{$quantidade}" : "";
        $sql = $this->db->query("SELECT  *  FROM  tb_financeiro WHERE data LIKE '%{$nomebusca}%' {$inicio}");
        $dados['inicio'] = $inicio;
        $dados['total'] =$sql->num_rows();
        $dados['dados'] = $sql->result_array();         
        
        return $dados;



		// return $this->db->get('tb_financeiro')->result_array();

	}
	public function getRecibo($data)
	{
		$this->db->where('id', $data['id']);
		$query = $this->db->get('tb_financeiro');
		return $query->row_array();
	}

}

/* End of file Financeiro_model.php */
/* Location: ./application/models/Financeiro_model.php */