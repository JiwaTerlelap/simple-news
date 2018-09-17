<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

 function __construct(){
 	parent::__construct();
 	$this->load->model('M_home');
 }
	public function index()
	{
		$data = [
			'title' => "WEBSITE BERITA",
			'kategori' => $this->db->get('kategori'),
            'berita' => $this->M_home->berita_lainya(),
            'berita1' => $this->M_home->paling(),
            'berita_utama' => $this->M_home->berita_utama(),
            'berita_right' => $this->M_home->berita_right(),
            'berita_baru' => $this->M_home->berita_terbaru(),
            'iklan' => $this->db->get_where('iklan', array('ukuran' => '728x90px'))->row()
		];
		$this->load->view('home/layout/header', $data);
		$this->load->view('home/index', $data);
	}
	function berita(){
		$data['title'] = "BERITA TERAKTUAL TERKINI";
		$data['kategori'] = $this->db->get('kategori');
		$data['iklan'] = $this->db->get_where('iklan', array('ukuran' => '728x90px'))->row();
		$data['iklan1'] = $this->db->get_where('iklan', array('ukuran' => '300x250px'))->row();
		$this->load->view('home/layout/header', $data);
		$data['news'] = $this->M_home->paling();
		$data['news1'] = $this->M_home->berita_utama();
		$this->load->view('home/berita', $data);
	}
	function get_berita(){
		$page = $this->input->get('page');
		$berita = $this->M_home->get_berita($page);
		   foreach($berita as $row){
		   	echo '
					<div class="col-lg-5 post-left">
						<div class="feature-img relative">
							<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="'.base_url().'assets/foto/berita/'.$row->foto.'" alt="">
							</div>
							<ul class="tags">
							<li><a href="'.base_url().'detail/kategori/'.$row->slug_kategori.'">'.$row->kategori.'</a></li>
							</ul>
							</div>
							<div class="col-lg-7 post-right">
							<a href="'.base_url().'detail/baca/'.$row->slug_berita.'">
							<h4>'.$row->judul.'</h4>
							</a>
							<ul class="meta">
							<li><a href="#"><span class="lnr lnr-user"></span>'.$row->penulis.'</a></li>
							<li><a href="#"><span class="lnr lnr-calendar-full"></span>'.$row->tanggal.'</a></li>
							</ul>
							<p class="excert">
							     '.substr($row->berita,0,150).'
							</p>
						</div>';
		   }
		   exit();
	}
	function tentang(){
		$data['title'] = "BERITA TERAKTUAL TERKINI";
		$data['kategori'] = $this->db->get('kategori');
		$data['iklan'] = $this->db->get_where('iklan', array('ukuran' => '728x90px'))->row();
		$this->load->view('home/layout/header', $data);
		$data['tentang'] = $this->M_home->tentang()->result_object();
		$data['part'] = $this->db->get('partner')->result();
		$this->load->view('home/about', $data);
	}
	function kontak(){
		$data['title'] = "BERITA TERAKTUAL TERKINI";
		$data['kategori'] = $this->db->get('kategori');
		$data['iklan'] = $this->db->get_where('iklan', array('ukuran' => '728x90px'))->row();
		$this->load->view('home/layout/header', $data);
		$this->load->view('home/kontak');
	}
}
