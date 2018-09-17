<?php

class Welcome extends CI_Controller{

	public function index()
	{
		$this->load->view('user/index');
	}

	/*public function navbar()
	{
		$this->load->view('user/navbar');
	}*/

	public function about()
	{
		$this->load->view('user/about');
	}

    public function messages()
	{
		$this->load->view('user/messages');
	}
  	
  	public function infrastructure()
	{
		$this->load->view('user/infrastructure');
	}

	public function schemes()
	{
		$this->load->view('user/schemes');
	}

	public function placement()
	{
		$this->load->view('user/placement');
	}

	public function gallery()
	{
		$this->load->view('user/gallery');
	}
	public function contact()
	{
		$this->load->view('user/contact');
	}

	public function service()
	{
		$this->load->view('user/service');
	}
}
