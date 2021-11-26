<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Index
 *
 * @author Geri
 */

class Kerdoiv extends CI_Controller {
    public function __construct(){
         parent::__construct();
    
         $this->load->model('Kerdoiv_model','k_model');
    }
    
    public function Index(){
        //$this->k_model->add_table_cols();
        


       $this->load->view('read/survey');

       
       
    }

}
