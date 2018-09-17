<?php
defined('BASEPATH') OR exit('No direct script acces allowed');


class Detail extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('M_Detail');
		$this->load->model('M_home');

	}

	function baca($slug = ""){
       if($slug == ""){
       	  $data['title'] = "BERITA TERAKTUAL TERKINI";
       	  $data['kategori'] = $this->db->get('kategori');
       	  $data['news'] = $this->M_home->paling();
       	  $data['iklan'] = $this->db->get_where('iklan', array('ukuran' => '728x90px'))->row();
       	  $this->load->view('home/layout/header', $data);
		  $this->load->view('home/berita', $data);
       }else{
			$data['berita'] = $this->M_home->berita_utama();
			$data['berita_lain'] = $this->M_home->paling();
			$data['baca'] = $this->M_Detail->get_slug($slug);
			$data['title'] = "BERITA TERAKTUAL TERKINI";
			$data['kategori'] = $this->db->get('kategori');
			$data['iklan'] = $this->db->get_where('iklan', array('ukuran' => '728x90px'))->row();
			$this->load->view('home/layout/header', $data);
			$this->load->view('home/single', $data);

	}
}
function kategori(){
	if($this->uri->segment(3) == ""){
           show_404();
	}else{
    $data['kat'] = $this->M_Detail->ambil_kat($this->uri->segment(3));
  	$data['title'] = "BERITA TERAKTUAL TERKINI";
    $data['kategori'] = $this->db->get('kategori');
    $data['kate'] = $this->M_Detail->details($this->uri->segment(3)) or die(show_404());
    $data['iklan'] = $this->db->get_where('iklan', array('ukuran' => '728x90px'))->row();
    $data['news'] = $this->M_home->paling();
    $data['berita'] = $this->M_home->berita_utama();
	$this->load->view('home/layout/header', $data);
	$this->load->view('home/kategori', $data);
}

}
	
	
}

?>