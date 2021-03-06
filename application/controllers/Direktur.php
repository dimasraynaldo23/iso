<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Direktur extends CI_Controller 
{


	public function index()
	{
		$data['title'] = 'Chart';
		$data['user'] =  $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('direktur/chart', $data);
		$this->load->view('templates/footer');

	}

	public function table()
	{
		$data['title'] = 'Table';
		$data['user'] =  $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('direktur/table', $data);
		$this->load->view('templates/footer');

	}

	public function note()
	{
		$data['title'] = 'Catatan';
		$data['user'] =  $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('direktur/note', $data);
		$this->load->view('templates/footer');

	}



}