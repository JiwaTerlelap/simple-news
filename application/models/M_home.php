<?php
/**
 *  
 */
 class M_home extends CI_Model
 {
 	
 	function tentang(){
 		return $this->db->get('tentang');
 	}
 	function berita_lainya(){
 		$this->db->select('*');
 		$this->db->from('berita');
 		$this->db->join('kategori', 'berita.id_kategori = kategori.id_kategori');
 		$query = $this->db->order_by('id', 'RANDOM')->limit(4)->get();
 		return $query;
 	}
 	function paling(){
 		$this->db->select('*');
 		$this->db->from('berita');
 		$this->db->join('kategori', 'berita.id_kategori = kategori.id_kategori');
 		$query = $this->db->order_by('id', 'RANDOM')->limit(8)->get();
 		return $query;
 	}
 	function berita_utama(){
 		$this->db->select('*');
 		$this->db->from('berita');
 		$this->db->join('kategori', 'berita.id_kategori = kategori.id_kategori');
 		$query = $this->db->order_by('id', 'RANDOM')->limit(1)->get();
 		return $query;
 	}

 	function berita_right(){
        $this->db->select('*');
 		$this->db->from('berita');
 		$this->db->join('kategori', 'berita.id_kategori = kategori.id_kategori');
 		$query = $this->db->order_by('id', 'RANDOM')->limit(2)->get();
 		return $query;
 	}
 	function berita_terbaru(){
 		$this->db->select('*');
 		$this->db->from('berita');
 		$this->db->join('kategori', 'berita.id_kategori = kategori.id_kategori');
 		$query = $this->db->order_by('id', 'DESC')->limit(6)->get();
 		return $query;
 	}
 	function get_berita($page){
 		$offset = 5*$page;
 		$limit = 5;
 		$query = $this->db->query("SELECT * FROM berita,kategori WHERE berita.id_kategori = kategori.id_kategori ORDER BY id DESC limit $offset, $limit")->result();
 		return $query;
 	}
 } 

?>