<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model
{
	private $_table = "user";

	public $iduser;
	public $nama_user;
	public $username;
	public $password;

	public function rules()
	{
		return [
			['field' => 'nama_user',
			'label' => 'nama_user',
			'rules' => 'required'],

			['field' => 'username',
			'label' => 'username',
			'rules' => 'required'],

			['field' => 'password',
			'label' => 'password',
			'rules' => 'required']
			
		];
	}

	public function joinTable()
	{
		$this->db->select('*');
		$this->db->from('user u');
		$this->db->join('level l','l.id_level = u.id_level');
		$query=$this->db->get();
		return $query->result();
	}

	public function levelTable()
	{
		$this->db->select('*');
		$this->db->from('level');
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
        return $this->db->get_where($this->_table, ["iduser" => $id])->row();
    }

    public function save()
    {
    	$post = $this->input->post();
    	$this->iduser = null;
    	$this->nama_user= $post["nama_user"];
    	$this->username = $post["username"];
    	$this->password = $post["password"];
    	$this->db->insert($this->_table, $this);
    }

    public function update()
    {
    	$post = $this->input->post();
    	$this->iduser = $post["iduser"];
    	$this->nama_user = $post["nama_user"];
    	$this->username = $post["username"];
    	$this->password = $post["password"];
    	$this->db->update($this->_table, $this, array('iduser'=> $post['iduser']));
    }

    public function delete($id)
    {
    	return $this->db->delete($this->_table, array("iduser"=>$id));
    }
}