<?php 
/**
* 
*/
class M_cari extends CI_Model
{
	function cari($keyword){
		$this->db->like('judul', $keyword);
		$this->db->or_like('berita', $keyword);
		$this->db->or_like('tanggal', $keyword);
		$this->db->or_like('penulis', $keyword);
		$result = $this->db->get('berita')->result();
		return $result;
	}
}
?>