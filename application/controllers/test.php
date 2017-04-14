<?php

class Test extends CI_Controller{
    public function index(){
        $data["content"] = "vehicle/available_vehicle_view";
        $data["sidebar"] = false; #if admin then true else false
        $data["nevigation_bar"] = "layout/user_nevigationbar_view";

        $this->load->view("main_view", $data);
    }
}

?>