<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration_Model extends CI_Model
{
    public function index($name,$emailid,$password)
    {
        $data=array(
        'Name'=>$name,
        'Email'=>$emailid,
        'Password'=>$password);

        $query=$this->db->insert('vendor_info',$data);
        if($query)
        {
            $this->session->set_flashdata('success','Registration successful, Now you can login.');	
            redirect('Registration');
        } 
        else 
        {
            $this->session->set_flashdata('error','Something went wrong. Please try again.');	
            redirect('Registration');	
        }
    }
}