<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_jurusan extends CI_Model
{
	private $_table = "jurusan";

	public $id_jurusan;
	public $nama_jurusan;
	public $biaya;

	

	public function rules()
	{
		return [
			['field' => 'id_jurusan',
			'label' => 'id_jurusan',
			'rules' => 'required'],

			['field' => 'nama_jurusan',
			'label' => 'nama_jurusan',
			'rules' => 'required'],

			['field' => 'biaya',
			'label' => 'biaya',
			'rules' => 'required']
			
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

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_jurusan" => $id])->row();
    }

    public function save()
    {
    	$post = $this->input->post();
    	$this->id_jurusan = $post["id_jurusan"];
    	$this->nama_jurusan= $post["nama_jurusan"];
    	$this->biaya= $post["biaya"];
    	$this->db->insert($this->_table, $this);
    }

    public function update()
    {
    	$post = $this->input->post();
    	$this->id_jurusan = $post["id_jurusan"];
    	$this->nama_jurusan = $post["nama_jurusan"];
    	$this->biaya= $post["biaya"];
    	$this->db->update($this->_table, $this, array('id_jurusan'=> $post['id_jurusan']));
    }

    public function delete($id)
    {
    	return $this->db->delete($this->_table, array("id_jurusan"=>$id));
    }
}