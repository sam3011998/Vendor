<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel_Show extends CI_Controller 
{
    public function index()
    {
        $name=$this->session->userdata('name');	
        if($name != NULL)
        {
            $this->load->model('Hotel_Show_Model');
     
            $show = $this->Hotel_Show_Model->index();
            $this->load->view('hotel_show', ['data'=>$show]);
        }

        else
        {
            redirect('Registration');
        }
    }  
    public function getInfo()
    {
        $id = $this->uri->segment(3);
        echo $id;

        $this->load->model('Hotel_Show_Model');
        $show = $this->Hotel_Show_Model->getDataByID($id);

        echo '<pre>'; print_r($show); echo '</pre>';

        
    }
}
