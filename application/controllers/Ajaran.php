<?php

class Ajaran extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("model_ajaran");
		$this->load->library('form_validation');
	}

	public function index()
	{
        // load view admin/overview.php
		$data["Ajaran"] = $this->model_ajaran->getAll();

        $this->load->view("view_ajaran",$data);
	}

	public function add()
	{

		$this->load->view("new_ajaran");

	}
}