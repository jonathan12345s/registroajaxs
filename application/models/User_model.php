<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

public function autenticar($email, $password)
	{
		$query= $this->db->get_where('usuario', array('nombre' => $email,'contrasena'=> $password));
		return $query->result_array();
	}	







	
  function save($usuario)
  {
    $r = $this->db->insert('usuario', $usuario);
    return $r;
  }

}
