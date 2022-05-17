<?php 

class m_apotek extends CI_Model{
	public function tampil_obat($num,$offset){
		$query = $this->db->get('obat', $num, $offset);
			return $query->result();
	}
	
	public function input_obat($data,$table){
		$this->db->insert($table,$data);
	}
	
	public function hapus_obat($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
 
	public function edit_obat($where,$table){		
			$this->db->select('*');
			$this->db->from('obat');
			$this->db->where('kode_obat',$where);
			return $this->db->get();
	}
 
	public function update_obat($where,$data,$table){
		$this->db->where('kode_obat',$where);
		$this->db->update($table,$data);
	}	
	
	
}

?>