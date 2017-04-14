<?php

class Vehicle extends CI_Controller {
    public function index(){
        $data['startDate'] = strtotime("+25 hours");
        $data["endDate"] = strtotime("+27 hours");
        $data["vehicleTypes"] = Vehicle::getVehicleType_Array();
        $data["selectedVehicleType"] = 'all';

        $data['availableVehicles'] = $this->Vehicle_model->getAvailebleVehicleList(
            0,
            date('Y-m-d H:i:s', $data['startDate']),
            date('Y-m-d H:i:s', $data["endDate"])
        );

        $data['reservedVehicles'] = $this->Vehicle_model->getReservedVehicleList(
            0,
            date('Y-m-d H:i:s', $data['startDate']),
            date('Y-m-d H:i:s', $data["endDate"])
        );

        $data["content"] = "vehicle/available_vehicle_view";
        $data["sidebar"] = false; #if admin then true else false
        $data["nevigation_bar"] = "layout/user_nevigationbar_view";

        $this->load->view("main_view", $data);
    }

    public function available_vehicles(){
        $this->form_validation->set_rules('from_date', 'Start Date', 'required');
        $this->form_validation->set_rules('from_time', 'Start Time', 'required');
        $this->form_validation->set_rules('to_date', 'End Date', 'required');
        $this->form_validation->set_rules('to_time', 'ENd Time', 'required');

        if($this->form_validation->run() == FALSE){
            redirect('vehicle');
            return;
        }
        $from_date = $this->input->post('from_date');
        $from_time = $this->input->post('from_time');
        $to_date = $this->input->post('to_date');
        $to_time = $this->input->post('to_time');
        $vehicle_type = $this->input->post('vehicle_type');

        $data['startDate'] = strtotime("$from_date $from_time");
        $data["endDate"] = strtotime("$to_date $to_time");
        $data["vehicleTypes"] = Vehicle::getVehicleType_Array();
        $data["selectedVehicleType"] = $vehicle_type;

        $data['availableVehicles'] = $this->Vehicle_model->getAvailebleVehicleList(
            $vehicle_type,
            date('Y-m-d H:i:s', $data['startDate']),
            date('Y-m-d H:i:s', $data["endDate"])
        );

        $data['reservedVehicles'] = $this->Vehicle_model->getReservedVehicleList(
            $vehicle_type,
            date('Y-m-d H:i:s', $data['startDate']),
            date('Y-m-d H:i:s', $data["endDate"])
        );

        $data["content"] = "vehicle/available_vehicle_view";
        $data["sidebar"] = false; #if admin then true else false
        $data["nevigation_bar"] = "layout/user_nevigationbar_view";

        $this->load->view("main_view", $data);
    }

    public function getVehicleType_Array(){
        $rows = $this->Vehicle_model->getVehicleTypes();
        $arr = array("All");

        $i = 1;
        foreach($rows as $row){
            $arr[$i] = $row->vehicleType;
            $i++;
        }
        return $arr;
    }
}

?>