<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}

	public function buscaPorUsuarioSenha($user,$senha)
	{
		$this->db->where('usuario', $user);
		$this->db->where('senha', $senha);

		$usuario = $this->db->get('tb_usuarios')->row_array();
		return $usuario;
	}
}

/* End of file Usuarios_model.php */
/* Location: ./application/models/Usuarios_model.php */