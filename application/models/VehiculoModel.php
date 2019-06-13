<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VehiculoModel
 *
 * @author duoc
 */
class VehiculoModel extends CI_Model
{
    function getVehiculo($vin)
    {
        $this->db->select("vin, patente, marca, modelo, color, anio");
        $this->db->from("vehiculo");
        $this->db->where("vin",$vin);
        $query = $this->db->get();
        return $query->result();
    }
}
