<?php

class Home_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
	}

    public function index() {
        
        $this->db->select('invest_scheme_details.*, partners_theme.*');
        $this->db->from('invest_scheme_details');
        $this->db->join('partners_theme ', 'invest_scheme_details.Vendor_ID  = partners_theme.partner_id','left');
        $query = $this->db->get();
        return  $query->result_array();
    }

    public function get_schemes() {

        $this->db->select('invest_scheme_details.*, partners_theme.*');
        $this->db->from('invest_scheme_details');
        $this->db->join('partners_theme ', 'invest_scheme_details.Vendor_ID  = partners_theme.partner_id','left');
        $query = $this->db->get();
        return  $query->result_array();
    }

    public function get_scheme_details($id) {
        
        $this->db->select('invest_scheme_details.*, partners_theme.*');
        $this->db->from('invest_scheme_details');
        $this->db->join('partners_theme ', 'invest_scheme_details.Vendor_ID  = partners_theme.partner_id','left');
        $this->db->where('invest_scheme_details.Vendor_ID', $id); 
        $query = $this->db->get();
        return $query->row_array();
    }
}