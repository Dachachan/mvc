<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Model {

    
    function __construct(){
        parent::__construct();
    }

    function getAlumni(){
        $this->db->select('ID,Name,contact,adders,Phone');
        $result = $this->db->get('alumni');
        return $result;
    }
   
    function insert($data){
        $this->db->insert('alumni',$data);
    }
    /*
    
    function menu_delete($id){
        $this->db->where('ID', $id);
        $this->db->delete('alumni');  
    }	

    function menu_edit($mid){
        $this->db->select('ID,name, mcategory_id,mshop_id');
        $result = $this->db->get_where('menu', array('menu_id' => $mid));
        return $result;
    }
          */  
    function update($data,$A_ID){
        $this->db->where('A_ID',$A_ID);
        $this->db->update('alumni',$data);
    }	
}

