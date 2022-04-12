<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller
{
    //Validating login
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        
        $name=$this->session->userdata('name');	
        if($name != NULL)
        {
            $this->load->view('welcome',['name'=>$name]);
        }
        
        else
        {
            redirect('Registration');
        }
    }

}
