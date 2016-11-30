<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hallo_ronald extends CI_Controller {


	public function index()
	{
		$this->load->view('hallo_hallo');
	}
}
