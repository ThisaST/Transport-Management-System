<?php

class Vehicle_Model extends CI_Model{
    public function getAvailebleVehicleList($vehicleType, $fromTime, $toTime){
        $vehicleType;
        $typeQuery = "";

        #because first type is ALL
        if($vehicleType > 0){
            $typeQuery = "`typeID` = $vehicleType AND ";
        }

        //Mysql Query here
        $sql = "
            SELECT DISTINCT * 
            FROM `Vehicle`, `VehicleType`, `FuelType`
            WHERE $typeQuery `Vehicle`.`id` IN (
                SELECT `assignedVehicleID`
                FROM `Vehicle_Reservation`
                WHERE `reservationID` IN (
                    SELECT `id`
                    FROM `Reservation`
                    WHERE `complete` = 0 AND (`toTime` <= ? OR `fromTime` >= ?) 
                )
            ) AND `Vehicle`.`typeID` = `VehicleType`.`id` AND `fuelTypeID` = `FuelType`.`id`;
        ";

        $query = $this->db->query($sql, array($fromTime, $toTime));
        return $query->result();
    }

    public function getReservedVehicleList($vehicleType, $fromTime, $toTime){
        $vehicleType;
        $typeQuery = "";

        #because first type is ALL
        if($vehicleType > 0){
            $typeQuery = "`typeID` = $vehicleType AND ";
        }

        //Mysql Query here
        $sql = "
            SELECT DISTINCT * 
            FROM `Vehicle`, `VehicleType`, `FuelType`
            WHERE $typeQuery `Vehicle`.`id` NOT IN (
                SELECT `assignedVehicleID`
                FROM `Vehicle_Reservation`
                WHERE `reservationID` IN (
                    SELECT `id`
                    FROM `Reservation`
                    WHERE `complete` = 0 AND (`toTime` <= ? OR `fromTime` >= ?) 
                )
            ) AND `Vehicle`.`typeID` = `VehicleType`.`id` AND `fuelTypeID` = `FuelType`.`id`;
        ";

        $query = $this->db->query($sql, array($fromTime, $toTime));
        return $query->result();
    }

    public function getVehicleTypes(){
        return $this->db
            ->select('vehicleType')
            ->from('VehicleType')
            ->get()
            ->result();
    }
}

?>