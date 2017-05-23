<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	public function index()
	{
		$this->load->view('index');
	}





	public function crear() {
		// objener valores

		
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');

		$username = $this->input->post('username');
		$password = $this->input->post('password');




	






	$usuario = array(
			'Nombre ' => $first_name,
			'Apellido' => $last_name,
			'Usuario' => $username,
			'Contrasena' => $password
		);



	$r = $this->User_model->save($usuario);





		if(sizeof($r) > 0) {
		
   
      echo "listo";
		} else {

      echo json_encode("There was an error");
		}


	}


}
