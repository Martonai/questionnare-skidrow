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
class Index extends CI_Controller {
    public function __construct(){
        return parent::__construct();
    }
    
    public function Index(){
        $this->load->view('read/Questions');
    }
}
