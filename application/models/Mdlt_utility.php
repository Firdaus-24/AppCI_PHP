<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdlt_utility extends CI_Model {

    public function __construct() {
        parent::__construct();

	}

    public function getData($tbl,$field,$key,$args)
    {   
        $this->db->select($field);
        $this->db->from($tbl);
        $this->db->where($key,$args);
        $query = $this->db->get();  

        if($query->num_rows()>0){
            return $query->result();
        }else{
            return 0;
        }
    }

    public function getDAll($tbl,$field,$order,$args)
    {   
        $this->db->order_by($order, $args);
        $this->db->select($field);
        $this->db->from($tbl);

        $query = $this->db->get();  
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return 0;
        }
    }

    public function find($tbl,$field,$orderby)
    {   
        $this->db->order_by($field, $orderby);
        $this->db->select($field);
        $this->db->from($tbl);
        $this->db->limit(1);

        $query = $this->db->get();  
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return 0;
        }
    }

    public function insertTable($tbl,$data)
    {   
        $this->db->insert($tbl,$data);
    }
    
    public function updateTable($tbl,$key,$arg,$data)
    {   
        $this->db->where($key,$arg);
        $this->db->update($tbl, $data);     
    }

    public function deleteTable($tbl,$key,$arg)
    {   
        $this->db->where($key,$arg)
                ->delete($tbl);
    }

}




