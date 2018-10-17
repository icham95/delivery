<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->config('private');
	}

	public function index()
	{
		$this->load->view($this->config->item('theme') . '/public/templates/header');
		$this->load->view($this->config->item('theme') . '/public/index');
		$this->load->view($this->config->item('theme') . '/public/templates/footer');
	}

	public function register()
	{
		$this->load->view($this->config->item('theme') . '/public/templates/header');
		$this->load->view($this->config->item('theme') . '/public/register');
		$this->load->view($this->config->item('theme') . '/public/templates/footer');	
	}

	public function login()
	{
		$this->load->view($this->config->item('theme') . '/public/templates/header');
		$this->load->view($this->config->item('theme') . '/public/login');
		$this->load->view($this->config->item('theme') . '/public/templates/footer');	
	}
}
