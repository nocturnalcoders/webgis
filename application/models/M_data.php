<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_data extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function read()
    {
        $this->db->select('*');
        $this->db->from('v_hasil');
        $this->db->where('tahun = 2020');
        $this->db->order_by("bulan", "asc");
        $query = $this->db->get();
        return $query;
    }

}
