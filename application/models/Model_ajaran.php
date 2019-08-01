<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ajaran extends CI_Model
{
	private $_table = "thn_ajaran";

	public $id_t_ajaran;
	public $t_ajaran;

	

	public function rules()
	{
		return [
			['field' => 'id_t_ajaran',
			'label' => 'id_t_ajaran',
			'rules' => 'required'],

			['field' => 't_ajaran',
			'label' => 't_ajaran',
			'rules' => 'required']

			
		];
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_t_ajaran" => $id])->row();
    }

    // public function save()
    // {
    // 	$post = $this->input->post();
    // 	$this->id_jurusan = $post["id_jurusan"];
    // 	$this->nama_jurusan= $post["nama_jurusan"];
    // 	$this->biaya= $post["biaya"];
    // 	$this->db->insert($this->_table, $this);
    // }

    // public function update()
    // {
    // 	$post = $this->input->post();
    // 	$this->id_jurusan = $post["id_jurusan"];
    // 	$this->nama_jurusan = $post["nama_jurusan"];
    // 	$this->biaya= $post["biaya"];
    // 	$this->db->update($this->_table, $this, array('id_jurusan'=> $post['id_jurusan']));
    // }

    // public function delete($id)
    // {
    // 	return $this->db->delete($this->_table, array("id_jurusan"=>$id));
    // }
}