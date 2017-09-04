<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paciente_model extends CI_Model {

	

	public function __construct()
	{
		parent::__construct();

		
	}
	public function autocomplete($nome)
	{
		$this->db->select('nome');
		$this->db->like('nome',$nome);
		$query = $this->db->get('tb_paciente', 5);
		 // = $this->db->get();
		if($query->num_rows()>0)
		{
			foreach($query->result_array() as $nome){
				$row_set[] = htmlentities(stripslashes($nome['nome']));
			}
			echo json_encode($row_set);
		}

	}
	public function getProntuarioById($data)
	{
		$this->db->where('id_prontuario', $data['id']);
		$query = $this->db->get('tb_prontuario');
		return $query->row_array();	
	}
	public function PacienteById($data)
	{
		$this->db->where('id', $data['id']);
		$query = $this->db->get('tb_paciente');
		return $query->row_array();
	}
	public function getPacienteById($data)
	{
		$this->db->where('id', $data['id']);
		$query = $this->db->get('tb_consultas');
		return $query->row_array();
	}
	public function getExames($nomebusca=null,$inicio=NULL,$quantidade=NULL)
	{
		$inicio = $inicio != NULL ? "LIMIT {$inicio},{$quantidade}" : "";
        $sql = $this->db->query("SELECT *  FROM  tb_exames WHERE paciente LIKE '%{$nomebusca}%' {$inicio}");
        $dados['inicio'] = $inicio;
        $dados['total'] =$sql->num_rows();
        $dados['dados'] = $sql->result_array();         
        
        return $dados;

		// $query = $this->db->get('tb_exames');
		// return $query->result_array();
	}
	public function getPacientes($nomebusca=null,$inicio=NULL,$quantidade=NULL)
	{
		$inicio = $inicio != NULL ? "LIMIT {$inicio},{$quantidade}" : "";
        $sql = $this->db->query("SELECT *  FROM  tb_paciente WHERE nome LIKE '%{$nomebusca}%' {$inicio}");
        $dados['inicio'] = $inicio;
        $dados['total'] =$sql->num_rows();
        $dados['dados'] = $sql->result_array();         
        
        return $dados;
			
		// $query = $this->db->get('tb_paciente');
		// return $query->result_array();
	}
	public function getProntuarioCount()
	{
		$query =  $this->db->get('tb_prontuario');
		return $query->result_array();
	}
	public function getPacienteCount()
	{
		$query = $this->db->get('tb_paciente');
		return $query->result_array();
	}
	public function getAgendaByData()
	{		

		 $query = $this->db->query("SELECT *  FROM  tb_consultas WHERE data = CURDATE()");
		 return $query->result_array();
	}
	public function getAgenda($nomebusca=null,$inicio=NULL,$quantidade=NULL)
	{
		$inicio = $inicio != NULL ? "LIMIT {$inicio},{$quantidade}" : "";
        $sql = $this->db->query("SELECT *  FROM  tb_consultas WHERE data LIKE '%{$nomebusca}%' and data = CURDATE()");
        $dados['inicio'] = $inicio;
        $dados['total'] =$sql->num_rows();
        $dados['dados'] = $sql->result_array();         
        
        return $dados;

		// $query = $this->db->get('tb_consultas');
		// return $query->result_array();
	}
	public function getProntuarios($nomebusca=null,$inicio=NULL,$quantidade=NULL)
	{
		$inicio = $inicio != NULL ? "LIMIT {$inicio},{$quantidade}" : "";
        $sql = $this->db->query("SELECT *  FROM  tb_prontuario WHERE paciente LIKE '%{$nomebusca}%' {$inicio}");
        $dados['inicio'] = $inicio;
        $dados['total'] =$sql->num_rows();
        $dados['dados'] = $sql->result_array();         
        
        return $dados;

		// $query = $this->db->get('tb_prontuario');
		// return $query->result_array();
	}
	public function getDadosEnvelope($data)
	{
		$this->db->where('id', $data['id']);
		$query = $this->db->query("SELECT nome,data_primeira_consulta from tb_paciente");
		return $query->row_array();
	}
	public  function insertPaciente($data)
	{
		return $this->db->insert('tb_paciente', $data);
	}
	public function insertConsulta($data)
	{
		return $this->db->insert('tb_consultas',$data);
	}
	public function consultaRealizada($data)
	{
		$this->db->where('id',$data['id']);
		return $this->db->update('tb_consultas',$data);		
	}
	public function chegada($data)
	{
		$this->db->where('id',$data['id']);
		return $this->db->update('tb_consultas',$data);
	}
	public function confirmarConsulta($data)
	{
		$this->db->where('id',$data['id']);
		return $this->db->update('tb_consultas',$data);
	}
	public function alteraConsulta($data)
	{
		$this->db->where('id',$data['id']);
		return $this->db->update('tb_consultas',$data);
	}
	public function alterarPaciente($data)
	{
		$this->db->where('id',$data['id']);
		return $this->db->update('tb_paciente',$data);	
	}
	public function cadastraProntuario($data)
	{
		return $this->db->insert('tb_prontuario', $data);
	}
	public function alterarProntuario($data)
	{
		$this->db->where('id_prontuario',$data['id_prontuario']);
		return $this->db->update('tb_prontuario',$data);
	}
	public function cadastraExames($data)
	{
		return $this->db->insert('tb_exames',$data);
	}

	public function fichaPaciente($id)
	{
			$this->db->select('*');
			$this->db->from('tb_paciente');
			$this->db->join('tb_prontuario', 'tb_prontuario.paciente = tb_paciente.nome', 'inner');
			// $this->db->join('tb_exames', 'tb_exames.paciente = tb_paciente.nome','inner');
			$this->db->where('tb_paciente.id',$id['id']);
			$query = $this->db->get();
			return $query->result_array();
	}
	// public function teste1($data)
	// {	
	// 	$this->db->where('id', $data['id']);
	// 	return $this->db->get('tb_paciente')->result_array();
	// }
	// public function teste2($data)
	// {
	// 	$this->db->where('id_prontuario', $data['id']);
	// 	return $this->db->get('tb_prontuario')->result_array();
	// }
}

/* End of file Paciente_model.php */
/* Location: ./application/models/Paciente_model.php */