<?php	

class Query extends CI_Model
{
	var $lokasi_path;

	function selectall($tabel)
	{
		$this->db->from($tabel);
		return $this->db->get();
	}
	
	function insert($tabel,$data)
	{
		$this->db->insert($tabel,$data);
	}

	function delete($tabel,$kolom,$id)
	{
		$this->db->where($kolom,$id);
		$this->db->delete($tabel);
	}

	function delete_multiple($tabel,$idprimary,$id){
        $this->db->query('DELETE FROM '.$tabel.' WHERE '.$idprimary.' ='.$id);
   }

	function update($tabel,$idprimary,$data,$id)
	{
		$this->db->where($idprimary,$id);
		$this->db->update($tabel,$data);
	}

	function get_id($tabel,$idprimary,$id)
	{
		$this->db->where($idprimary,$id);
		return $this->db->get($tabel);
	}

	public function pencarian($tabel,$field,$post)
    {
        $this->db->select('*');
        $this->db->from($tabel);
        $this->db->like($field,$post);
        
		return $this->db->get();
    }




}
