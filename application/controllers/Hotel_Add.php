<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel_Add extends CI_Controller 
{
    public function index()
    {
        $this->form_validation->set_rules('hotelname','hotel name','required|is_unique[hotel_info.hotelname]');
		$this->form_validation->set_rules('contactperson','contact person','required');
		$this->form_validation->set_rules('phone','phone','required');
		$this->form_validation->set_rules('city','city','required');
        $this->form_validation->set_rules('address','address','required');


		$name=$this->session->userdata('name');	
        if($name != NULL)
        {
			if($this->form_validation->run())
			{
				
				$hotelname      =$this->input->post('hotelname');
				$contactperson  =$this->input->post('contactperson');
				$phone          =$this->input->post('phone');
				$city           =$this->input->post('city');
				$address        =$this->input->post('address');
	
				$this->load->model('Hotel_Add_Model');
				$this->Hotel_Add_Model->index($hotelname, $contactperson, $phone, $city, $address);
	
			}
	
			else
			{
				$this->load->view('hotel_add');
			}

        }
        else
        {
            redirect('Registration');
        }

	}
}