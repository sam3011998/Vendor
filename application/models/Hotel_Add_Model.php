<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel_Add_Model extends CI_Model
{
    public function index($hotelname, $contactperson, $phone, $city, $address )
    {
        $data=array(
        'HotelName'     =>$hotelname,
        'ContactPerson' =>$contactperson,
        'Phone'         =>$phone,
        'City'          =>$city,
        'Address'       =>$address);



        $query=$this->db->insert('hotel_info',$data);
        if($query)
        {
            $this->session->set_flashdata('success','Hotel added successfully.');	
            redirect('Hotel_Add');
        } 
        else 
        {
            $this->session->set_flashdata('error','Something went wrong. Please try again.');	
            redirect('Hotel_Add');	
        }
    }
}