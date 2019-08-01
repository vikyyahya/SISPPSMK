<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("model_user");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["petugas"] = $this->model_user->joinTable();
		$data["level"] = $this->model_user->levelTable();

        // load view admin/overview.php
        $this->load->view("view_user", $data);
	}

	public function add()
	{
		$petugas = $this->model_user;
		$validation = $this->form_validation;
		$validation->set_rules($petugas->rules());

		if($validation->run()){
			$petugas->save();
			$this->session->set_flashdata('success','berhasil disimpan');
			$data["petugas"] = $this->model_user->getAll();
			$this->load->view("view_user", $data);
		}

		$this->load->view("new_user");
	}
	public function delete($id=null)
  	{
        if (!isset($id)) show_404();
        if ($this->model_user->delete($id)) {
            redirect("user");
        }
    }
}