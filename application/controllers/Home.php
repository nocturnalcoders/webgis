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

    public function marker()
	{
		$data = array(
            'title' => 'Marker Location',
            'isi' => 'v_marker'
        );
        $this->load->view('template/v_wrapper', $data, FALSE);
	}

    public function polyline()
	{
		$data = array(
            'title' => 'Polyline',
            'isi' => 'v_polyline'
        );
        $this->load->view('template/v_wrapper', $data, FALSE);
	}

    public function geojson()
	{
		$data = array(
            'title' => 'GeoJSON (Polygon)',
            'isi' => 'v_geojson'
        );
        $data['hasil'] = $this->m_data->read();
        $this->load->view('template/v_wrapper', $data, FALSE);
	}
}
