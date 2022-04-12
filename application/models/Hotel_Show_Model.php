<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel_Show_Model extends CI_Model
{
    public function index()
    {
        
        $fetchhotelname = $this->db->query('SELECT * FROM hotel_info');
        $storehotelname = $fetchhotelname->result();
        return $storehotelname;
    }
    
    public function getDataByID($id)
    {
        $fetchid = $this->db->query('SELECT * FROM hotel_info WHERE id=' .$id );
        $storeid = $fetchid->result();
        return $storeid;
    }
}