<?php

class Admin_Model extends CI_Model{
	public function get_admins(){
		$query = $this->db
			->from('Admin')
			->order_by('create_date', 'DESC')
			->get();
		return $query->result();
	}
}

?>