<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends MY_Controller {
	function __construct()  
	{  
		parent::__construct();
		$this->load->model('Pegawai_model');
	}


}