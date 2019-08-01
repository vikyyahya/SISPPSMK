<?php

class Kelas extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("model_kelas");
		$this->load->model("model_jurusan");
		$this->load->library('form_validation');
	}

	public function index()
	{
        // load view admin/overview.php
        $data["ruangkelas"]=$this->model_kelas->joinTable();
        $data["datajurusan"]=$this->model_kelas->jurusanTable();


        $this->load->view("view_kelas",$data);
	}

	public function add()
	{
        $data["datajurusan"]=$this->model_kelas->jurusanTable();

		$ruangkelas= $this->model_kelas;
		$validation= $this->form_validation;
		$validation->set_rules($ruangkelas->rules());

		if ($validation->run()){
			$ruangkelas->save();
			$this->session->set_flashdata('success', 'berhasil disimpan');
			$data["ruangkelas"] = $this->model_kelas->getAll();
			// $this->load->view("view_kelas", $data);
			redirect("kelas");
		}
		$this->load->view("new_kelas",$data);
	}
	public function delete($id=null)
  	{
        if (!isset($id)) show_404();
        if ($this->model_kelas->delete($id)) {
            redirect("kelas");
        }
    }
}