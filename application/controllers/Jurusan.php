<?php

class Jurusan extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("model_jurusan");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["Jurusan"] = $this->model_jurusan->getAll();
        // load view admin/overview.php
        $this->load->view("view_jurusan", $data);
	}

	public function add()
	{

		$Jurusan=$this->model_jurusan;
		$validation=$this->form_validation;
		$validation->set_rules($Jurusan->rules());

		if($validation->run()){
			$Jurusan->save();
			$this->session->set_flashdata('success','Berhasil disimpan');
			$data["Jurusan"]=$this->model_jurusan->getAll();

			// $this->load->view("view_jurusan", $data);
		}
		$this->load->view("new_jurusan");

	}
	
}