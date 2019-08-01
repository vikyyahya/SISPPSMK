<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_level extends CI_Model
{
	private $_table = "level";

	public $id_level;
	public $level;
	

	public function rules()
	{
		return [
			['field' => 'id_level',
			'label' => 'id_level',
			'rules' => 'required'],

			['field' => 'level',
			'label' => 'level',
			'rules' => 'required']
			
		];
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_level" => $id])->row();
    }

    public function save()
    {
    	$post = $this->input->post();
    	$this->id_level = $post["id_level"];
    	$this->level= $post["level"];
    	$this->db->insert($this->_table, $this);
    }

    public function update()
    {
    	$post = $this->input->post();
    	$this->id_level = $post["id_level"];
    	$this->level = $post["level"];
    	$this->db->update($this->_table, $this, array('id_level'=> $post['id_level']));
    }

    public function delete($id)
    {
    	return $this->db->delete($this->_table, array("id_level"=>$id));
    }
}