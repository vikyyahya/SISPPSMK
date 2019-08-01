<?php

class Level extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("model_level");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["jabatan"] = $this->model_level->getAll();
        // load view admin/overview.php
        $this->load->view("view_level", $data);
	}

	public function add()
	{
		$jabatan=$this->model_level;
		$validation=$this->form_validation;
		$validation->set_rules($jabatan->rules());

		if($validation->run()){
			$jabatan->save();
			$this->session->set_flashdata('success','Berhasil disimpan');
			$data["jabatan"]=$this->model_level->getAll();
			// $this->load->view("view_level", $data);
			redirect("level");
		}
		$this->load->view("new_level");
	}

	public function delete($id=null)
  	{
        if (!isset($id)) show_404();
        if ($this->model_level->delete($id)) {
            redirect("level");
        }
    }
}