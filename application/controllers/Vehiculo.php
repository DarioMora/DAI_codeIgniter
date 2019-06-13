<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehiculo extends CI_Controller
{
    public function __construct()
    {
        parent::_construct();
        $this->load->database();
        $this->load->model('VehiculoModel');
    }
    
    public function ver($vin)
    {
        $fromDB = $this->VehiculoModel->getVehiculo($vin);
        $data = array("vehiculo" => $fromDB);
        $this->load->view('welcome_message', $data);
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

