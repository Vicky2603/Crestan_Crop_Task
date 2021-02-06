<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ajax_model');
	}

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
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function sample()
	{
		
		$data['user_arr'] = $this->database_page->user_data();
		$this->load->view("vicky", $data);	
		// print_r($data["user_arr"][0]["name"]);

	}
	public function user_data()
	{
		$this->load->view("forum.php");
	}


	public function create()
	{
		$name = $this->input->post('user');
		$city = $this->input->post('city');
		$occupation = $this->input->post('occ');
	
		$data = array(
			'name' => $name,
			'city' => $city,
			'occupation' => $occupation,
		);
		// $this->load->model('ajax_model');
		$insert = $this->ajax_model->createData($data);
		echo json_encode($insert);
	}


	public function fetch_data()
	{
		$resultList = $this->ajax_model->fetchall("*", "formdata", array());
		// print_r($resultList);
		
		$result = array();
		$i = 1;
		foreach($resultList as $key => $value)
		{
			$result['data'][] = array(
				$i++,
				$value['name'],
				$value['city'],
				$value['occupation'],
			);
		}
		// print_r("<pre>");
		// print_r($resultList).exit();
		echo json_encode($result);
		

	}

}
