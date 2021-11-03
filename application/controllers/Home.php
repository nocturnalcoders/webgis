<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = array(
            'title' => 'GIS',
            'isi' => 'v_home'
        );
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
}
