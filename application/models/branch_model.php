<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch_model extends CI_Model {

	public function get_branches($limit,$offset)
	{
		$this->db->limit($limit,$offset);
		$query = $this->db->get('branches');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	/*public function all_row()
	{
		$query = $this->db->get('branches');

		return $query;
	}
	*/
	public function count_all()
	{
		$this->db->count_all('branches');
	}
	



	public function get_branch($id)
	{
		$this->db->where('id', $id);

		$query = $this->db->get('branches');
		
		return $query->row();
	}

	public function add($data)
	{
		$query = $this->db->insert('branches', $data);

		return $query;
	}

	public function delete($id)
	{
		$this->db->where('id', $id);

		$query = $this->db->delete('branches');

		return $query;
	}

	public function edit_branch($id, $data)
	{
		$this->db->where('id', $id);
		$query = $this->db->update('branches', $data);

		return $query;
	}

}
