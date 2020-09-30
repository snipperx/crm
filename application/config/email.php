<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
	'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
	'smtp_host' => 'smtp.mailtrap.io',
	'smtp_port' => 465,
	'smtp_user' => '687c12a985b74e',
	'smtp_pass' => 'bbc069f26c8fa6',
	'smtp_crypto' => 'tls', //can be 'ssl' or 'tls' for example
	'mailtype' => 'html', //plaintext 'text' mails or 'html'
	'smtp_timeout' => '4', //in seconds
	'charset' => 'iso-8859-1',
	'wordwrap' => TRUE
);
