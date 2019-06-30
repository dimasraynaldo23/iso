<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model
{
	public function getSubMenu()
	{
		$query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
			  	  FROM `user_sub_menu` JOIN `user_menu`
			  	  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
			";

		return $this->db->query($query)->result_array();
	}


 public function hapusDataMenu($id)
 {
 	$this->db->where('id', $id);
 	$this->db->delete('user_menu');
 }

  public function hapusDataSubmenu($id)
 {
 	$this->db->where('id', $id);
 	$this->db->delete('user_sub_menu');
 }


  public function editDataMenu($id)
 {
 	$this->db->where('id', $id);
 	$this->db->get('user_menu');
 }

}