<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kelas extends CI_Model
{
	private $_table = "kelas";

	public $id_kelas;
	public $kelas;
	public $id_jurusan;

	public function rules()
	{
		return [
			['field' => 'id_kelas',
			'label' => 'id_kelas',
			'rules' => 'required'],

			['field' => 'kelas',
			'label' => 'kelas',
			'rules' => 'required']

			// ['field' => 'jurusan',
			// 'label' => 'jurusan',
			// 'rules' => 'required']

			// ['field' => 'biaya',
			// 'label' => 'biaya',
			// 'rules' => 'required']
			
		];
	}

	public function joinTable()
	{
		$this->db->select('*');
		$this->db->from('jurusan j');
		$this->db->join('kelas k','k.id_jurusan = j.id_jurusan');
		$query=$this->db->get();
		return $query->result();
	}

	public function jurusanTable()
	{
		$this->db->select('*');
		$this->db->from('jurusan');
		// $this->db->join('kelas k','k.id_jurusan = j.id_jurusan');
		$query=$this->db->get();
		return $query->result();
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_kelas" => $id])->row();
    }

    public function save()
    {
    	$post = $this->input->post();
    	$this->id_kelas = $post["id_kelas"];
    	$this->kelas= $post["kelas"];
    	$this->id_jurusan = $post["id_jurusan"];

    	$this->db->insert($this->_table, $this);
    }

    // public function update()
    // {
    // 	$post = $this->input->post();
    // 	$this->id_kelas = $post["id_kelas"];
    // 	$this->kelas = $post["kelas"];
    // 	$this->jurusan = $post["id_jurusan"];
    // 	$this->biaya = $post["biaya"];
    // 	$this->db->update($this->_table, $this, array('id_kelas'=> $post['id_kelas']));
    // }

    public function delete($id)
    {
    	return $this->db->delete($this->_table, array("id_kelas"=>$id));
    }
}