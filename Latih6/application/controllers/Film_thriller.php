<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Film_thriller extends CI_Controller {


	public function index()
	{
		$this->load->view('film_thriller');
	}
}
