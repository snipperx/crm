<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Email extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();

		$this->load->helper('url');
	}

	function send()
	{
		$this->load->config('email');
		$this->load->library('email');

		$fromName="info@dmi.co.za";
		$to='dedan@domain.com';

		$con_name = $this->input->post('con_name');
		$con_email = $this->input->post('con_email');
		$con_message = $this->input->post('con_message');

		$data['data'] = array('message' => $con_message ,'email' =>$con_email , 'name' => $con_name ,'support' => $fromName);


		$message = $this->load->view('Builder/email/email_template', $data, TRUE);

		$this->email->set_newline("\r\n");
		$this->email->from($fromName);
		$this->email->to($to);
		$this->email->subject('contact us');
		$this->email->message($message);

		if ($this->email->send()) {
			echo 'Your Email has successfully been sent.';
		} else {
			show_error($this->email->print_debugger());
		}
	}
}
