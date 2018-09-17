<?php 

/**
* 
*/
class M_Detail extends CI_Model
{
	
	function get_slug($slug = NULL){

 		$slug = array('slug_berita' => $slug);
 		$query = $this->db->select('*')->from('berita')->join('kategori', 'berita.id_kategori = kategori.id_kategori')->where($slug)->get()->row();
 		return $query;
	}
	function ambil_kat($slug = NULL){
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('kategori', 'berita.id_kategori = kategori.id_kategori');
		$this->db->where('kategori.slug_kategori', $slug);
		$query = $this->db->get()->result_object();
		return $query;
	}
	function details($slug = NULL){
        $this->db->select('*');
		$this->db->from('berita');
		$this->db->join('kategori', 'berita.id_kategori = kategori.id_kategori');
		$this->db->where('kategori.slug_kategori', $slug);
		$query = $this->db->get()->row();
		return $query;
	}
}
?>