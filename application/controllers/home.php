<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class home extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $data['content']='home';
        $this->load->view('index',$data);
    }
}

