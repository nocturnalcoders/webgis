<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
    }

	public function index()
	{
		$data = array(
            'title' => 'Home',
            'isi' => 'v_home'
        );
        $data['hasil'] = $this->m_data->read();
        $this->load->view('template/v_wrapper', $data, FALSE);
	}

    public function hasil()
	{
		$data = array(
            'title' => 'Hasil',
            'isi' => 'v_hasil'
        );
        $data['hasil'] = $this->m_data->read_hasil();
        $this->load->view('template/v_wrapper', $data, FALSE);
	}

    public function perubahanLahan()
	{
		$data = array(
            'title' => 'Perubahan Lahan',
            'isi' => 'v_perubahan'
        );
        $data['hasil'] = $this->m_data->read1()->result_array();
        $this->load->view('template/v_wrapper', $data, FALSE);
	}
}
