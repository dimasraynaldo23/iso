<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Menu_model');
	}

	public function index()
	{
		$data['title'] = 'Menu Management';
		$data['user'] =  $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	

		$data['menu'] = $this->db->get('user_menu')->result_array();

		// rules
		$this->form_validation->set_rules('menu', 'Menu', 'required');

		if ($this->form_validation->run() == false) { 
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('menu/index', $data);

			$this->load->view('templates/footer');
		} else {
			$this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
			 $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">new menu added!</div>');
  			 	redirect('menu');
		}
		// edit
		$this->form_validation->set_rules('menu', 'Menu', 'required');

		if ($this->form_validation->run() == false) { 
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('menu/index', $data);

			$this->load->view('templates/footer');
		} else {
			$this->db->where('menu', $menu);
 			$this->db->get('user_menu');
			 $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">new menu added!</div>');
  			 	redirect('menu');
		}

	}

	public function submenu()
	{
		$data['title'] = 'Submenu Management';
		$data['user'] =  $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->model('Menu_model', 'menu');

			$data['subMenu'] = $this->menu->getSubMenu();
 			$data['menu'] = $this->db->get('user_menu')->result_array();


 			$this->form_validation->set_rules('title', 'Title', 'required');
 			$this->form_validation->set_rules('menu_id', 'Menu', 'required');
 			$this->form_validation->set_rules('url', 'URL', 'required');
 			$this->form_validation->set_rules('icon', 'icon', 'required');



 		if ($this->form_validation->run() == false) { 
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('menu/submenu', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				'title' => $this->input->post('title'),
				'menu_id' => $this->input->post('menu_id'),
				'url' => $this->input->post('url'),
				'icon' => $this->input->post('icon'),
				'is_active' => $this->input->post('is_active'),
			];
			$this->db->insert('user_sub_menu', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">new submenu added!</div>');
  			 	redirect('menu/submenu');
		}
	}

	public function hapus($id)
	{
		$this->Menu_model->hapusDataMenu($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Deleted successfully!</div>');
		redirect('menu');
	}

	public function hapuss($id)
	{
		$this->Menu_model->hapusDataSubmenu($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Deleted successfully!</div>');
		redirect('menu/submenu');
	}

	public function edit($menu)
	{
		$this->Menu_model->editDataMenu($menu);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edited Menu successfully!</div>');
		redirect('menu');
	}

	
}