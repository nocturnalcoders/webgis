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
    public function read_hasil()
    {
        $this->db->select('*');
        $this->db->from('v_hasil');
        $query = $this->db->get();
        return $query;
    }
    public function read1()
    {
        $this->db->select('*');
        $this->db->from('v_perubahanlahan');
        // $this->db->where('tahun = 2020');
        // $this->db->order_by("bulan", "asc");
        $query = $this->db->get();
        return $query;
    }

    public function getAllGroups()
    {
        $query = $this->db->query('SELECT DISTINCT nama_kecamatan FROM v_hasil');


        return $query->result();
    }

    public function getAllGroups2()
    {
        $query = $this->db->query('SELECT DISTINCT nama_kota FROM v_hasil');


        return $query->result();

    }
}
