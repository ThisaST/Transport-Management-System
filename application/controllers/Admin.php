<?php

class Admin extends CI_Controller{
	public function index(){

		$data['admins'] = $this->Admin_model->get_admins();

		$data["content"] = "user/adminUser_list_view";
		$data["sidebar"] = false; #if admin then true else false
		$data["nevigation_bar"] = "layout/user_nevigationbar_view";
		$this->session->set_userdata('image', '1.png');

        $this->load->view("main_view", $data);
	}

	public function view_moreadmin($id){
		$data['id'] = $id;
		$this->load->view('adminmore_view', $data);
	}
}

?>