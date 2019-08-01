<?php

class Siswa extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("view_siswa");
	}

	public function add()
	{

		$this->load->view("new_siswa");
	}

  
}