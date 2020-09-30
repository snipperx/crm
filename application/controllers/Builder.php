<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Builder extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//  $this->load->model('Estudiante_model');
		//$this->load->model('Carrera_model');
	}

	public function index()
	{
		$this->load->view('Builder/index');
	}


	public function about_us()
	{
		$this->load->view('Builder/about_us');
	}

	public function service()
	{
		$this->load->view('Builder/service');
	}

	public function projects()
	{
		$this->load->view('Builder/projects');
	}

	public function contact_us()
	{
		$this->load->view('Builder/contact_us');
	}

}
