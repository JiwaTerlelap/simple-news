<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {
	function __construct(){
  	 parent::__construct();
     $this->load->helper(array('form','url','slug'));
     $this->load->model('M_aksi');
      if($this->session->userdata('status') != 1){
      	redirect('cari/login');
      }
     }

	function index(){
		$data['admin'] = $this->db->get('admin')->num_rows();
		$data['berita'] = $this->db->get('berita')->num_rows();
		$data['partner'] = $this->db->get('partner')->num_rows();
		$data['iklan'] = $this->db->get('iklan')->num_rows();
		$this->load->view('admin/index', $data);
	}
	function berita(){
		$data['kat'] = $this->db->get('kategori')->result();
		$this->load->view('admin/input_berita', $data);
	}
	function add_partner(){
		$data['part'] = $this->db->get('partner')->result();
		$this->load->view('admin/partner', $data);
	}
	function data_berita(){
		$data['berita'] = $this->db->order_by('id', 'DESC')->get('berita')->result_object();
		$this->load->view('admin/data_berita', $data);
	}
	function data_admin(){
		$data['admin'] = $this->db->get('admin')->result();
		$this->load->view('admin/data_admin', $data);
	}
	function tambah_admin(){
		$this->load->view('admin/admin');
	}
	function tentang(){
		$data['tentang'] = $this->db->get('tentang')->result();
		$this->load->view('admin/tentang', $data);
	}
	function kategori(){
		$data['kategori'] = $this->db->query("SELECT MAX(id_kategori)+1 AS id FROM kategori")->result_object();
		$this->load->view('admin/kategori', $data);
	}
	function data_kategori(){
		$data['kat'] = $this->db->get('kategori')->result_object();
		$this->load->view('admin/data_kategori', $data);
	}
	function simpan_berita(){
		$filename = md5(uniqid());
		$config = array(
              'upload_path' => "./assets/foto/berita",
              'allowed_types' => "jpg|png|jpeg",
              'width' => 1240,
              'height' => 200,
              'overwrite' => TRUE,
              'file_name' => $filename
		);
		$this->load->library('upload', $config);
		  if(!$this->upload->do_upload('gambar')){
		  	$error = $this->upload->display_errors();
		  	echo $error;
		  }else{
		  	 $gambar = $this->upload->data();
		  	  $resize = array(
                        'image_library' => 'gd2',
                        'source_image' => './assets/foto/berita/'.$gambar['file_name'],
                        'maintain_ratio' => TRUE,
                        'create_thumb' => FALSE,
                        'width' => 250,
                        'quality' => 100,
                        'height' => 300,
                        'overwrite' => TRUE

		  	  );
		  	  	  	$this->load->library('image_lib', $resize);
		  	   $hasil = $this->image_lib->resize();
		  	    if($hasil){
		  	    	 $data = array(
		            'judul' => htmlspecialchars($this->input->post('judul')),
		            'slug_berita' => slug($this->input->post('judul')),
		            'berita' => $this->input->post('berita'),
		            'id_kategori' => $this->input->post('kat'),
		            'tanggal' => date("j F, Y"),
		            'penulis' => $this->input->post('pen'),
		            'foto' => $gambar['file_name']
				 );
				 $valid = $this->db->insert('berita', $data);
				 if($valid){
				 	redirect('backend/data_berita');
				 }else{
				 	echo "<script>alert('gagal menambahkan berita !');history.go(-1);</script>";
				 }

		  	    }else{
		  	    	$error = $this->image_lib->display_errors();
		  	    	echo $error;
		  	    }

		  }

	}
	function delete_berita($id){

	            $hapus = $this->db->delete('berita', array('id' => $id));
	             if($hapus){
	             	echo "<script>alert('data berhasil di hapus');history.go(-1);</script>";
	             }else{
	             	echo "<script>alert('data gagal di hapus');history.go(-1);</script>";
	             }
		}

	function edit_berita($id = ""){
		if($id == ""){
			redirect('backend/data_berita');
		}else{
		$where = array('id' => $id);
		$data['kat'] = $this->db->get('kategori')->result();
		$data['berita'] = $this->M_aksi->edit_data($where, 'berita')->result();
		$this->load->view('admin/edit_berita', $data);
	}
	}
	function update_berita(){
		$filename = md5(uniqid());
		$config = array(
              'upload_path' => "./assets/foto/berita",
              'allowed_types' => "jpg|png|jpeg",
              'width' => 300,
              'height' => 250,
              'overwrite' => TRUE,
              'file_name' => $filename
		);
		$this->load->library('upload', $config);
		  if(!$this->upload->do_upload('gambar')){
		  	$error = $this->upload->display_errors();
		  	echo $error;
		  }else{
		  	 $gambar = $this->upload->data();
		  	  $resize = array(
                        'image_library' => 'gd2',
                        'source_image' => './assets/foto/berita/'.$gambar['file_name'],
                        'maintain_ratio' => TRUE,
                        'create_thumb' => FALSE,
                        'width' => 250,
                        'height' => 300,
                        'overwrite' => TRUE

		  	  );
		  	  	  	$this->load->library('image_lib', $resize);
		  	   $hasil = $this->image_lib->resize();
		  	    if($hasil){
		  	    	 $data = array(
		            'judul' => htmlspecialchars($this->input->post('judul')),
		            'slug_berita' => slug($this->input->post('judul')),
		            'berita' => $this->input->post('berita'),
		            'id_kategori' => $this->input->post('kat'),
		            'tanggal' => date("j F, Y"),
		            'penulis' => $this->input->post('pen'),
		            'foto' => $gambar['file_name']
				 );
		  	    $id = $this->input->post('id');
				 $valid = $this->db->update('berita', $data, array('id' => $id));
				 if($valid){
				 	redirect('backend/data_berita');
				 }else{
				 	echo "<script>alert('gagal menambahkan berita !');history.go(-1);</script>";
				 }

		  	    }else{
		  	    	$error = $this->image_lib->display_errors();
		  	    	echo $error;
		  	    }

		  }

	}
	function simpan_kat(){
		$data = [
             'id_kategori' => $this->input->post('id'),
             'kategori' => $this->input->post('kat'),
             'slug_kategori' => slug($this->input->post('kat'))
		];
		$valid = $this->db->insert('kategori', $data);
		 if($valid){
		 	redirect('backend/data_kategori');
		 }else{
             echo "<script>alert('gagal menambahkan kategori');history.go(-1)</script>";
		 }
	}
	function del_kat($id){
		$where = array('id_kategori' => $id);
		$valid = $this->db->delete('kategori', $where);
		 if($valid){
		 	 redirect('backend/data_kategori');
		 }else{
		 	echo "<script>alert('gagal menghapus data');histori.go(-1);</script>";
		 }

	}
	function edit_kat($id){
		$where = array('id_kategori' => $id);
		$data['kategori'] = $this->M_aksi->edit_data($where, 'kategori')->result();
		$this->load->view('admin/edit_kat', $data);
	}
	function update_kat(){
		$data = [
           'id_kategori' => $this->input->post('id'),
           'kategori' => $this->input->post('kat')
		];
		$id = $this->input->post('id');
		  $val = $this->db->update('kategori', $data, array('id_kategori' => $id));
		  if($val){
		  	redirect('backend/data_kategori');
		  }else{
		  	echo "<script>alert('gagal update data');histori.go(-1);</script>";
		  }
	}
	function update_tentang(){
		  	 $data = [
		  	 	'judul' => $this->input->post('judul'),
		  	 	'tentang' => $this->input->post('tentang'),
		  	 ];

		  $val = $this->db->update('tentang', $data, array('id' => '1'));
		    if($val){
		    	redirect('backend/tentang');
		    }else{
		    	echo "<script>alert('Gagal update data');histori.go(-1);</script>";
		    }
	}
	function simpan_part(){
		$config = array(
              'upload_path' => "./assets/foto/partner/",
              'allowed_types' => "jpg|png|jpeg",
              'width' => 300,
              'height' => 250,
              'overwrite' => TRUE,
              'file_name' => md5(uniqid())
			);
		$this->load->library('upload', $config);
		 if($this->upload->do_upload('gambar')){
		 	$gambar = $this->upload->data();
		 	$resize = array(
                        'image_library' => 'gd2',
                        'source_image' => './assets/foto/partner/'.$gambar['file_name'],
                        'maintain_ratio' => TRUE,
                        'create_thumb' => FALSE,
                        'width' => 250,
                        'height' => 300,
                        'overwrite' => TRUE

		  	  );
		 	 $this->load->library('image_lib', $resize);
		 	  if($this->image_lib->resize()){
		 	  	 $result = $this->db->insert('partner', array('foto' => $gambar['file_name'], 'link' => htmlspecialchars($this->input->post('link'))));
		 	  	  if($result){
		 	  	  	 redirect('backend/add_partner');
		 	  	  }else{
		 	  	  	$this->image_lib->display_errors();
		 	  	  }
		 	  }
		 }else{
		 	echo $this->upload->display_errors();
		 }
	}
	function delete_part($id){
		$result = $this->db->delete('partner', array('id' => $id));
		if($result){
			 redirect('backend/add_partner');
		}else{
			echo "<script>alert('Gagal hapus data');history.go(-1);</script>";
		}
	}
	function iklan(){
		$data['iklan'] = $this->db->get('iklan')->result();
		$this->load->view('admin/iklan', $data);
	}
function simpan_iklan(){
		$config = array(
              'upload_path' => "./assets/foto/iklan/",
              'allowed_types' => "jpg|png|jpeg",
              'width' => 300,
              'height' => 250,
              'overwrite' => TRUE,
              'file_name' => md5(uniqid())
			);
		$this->load->library('upload', $config);
		 if($this->upload->do_upload('gambar')){
		 	$gambar = $this->upload->data();
		 	$data = array(
		 	  		'foto' => $gambar['file_name'],
		 	  		'brand' => $this->input->post('brand'),
		 	  		'ukuran' => $this->input->post('ukuran'),
		 	  		'link' => $this->input->post('link')
		 	  	);
		 	$this->db->insert('iklan', $data);
		 	redirect('backend/iklan');
		 }else{
		 	echo $this->upload->display_errors();
		 }
}
function delete_iklan($id){
	$result = $this->db->delete('iklan', array('id' => $id));
	 if($result){
	 	redirect('backend/iklan');
	 }else{
	 	echo "gagal menghapus";
	 }

}
function simpan_admin(){
	 $config = array(
	 	'upload_path' => "./assets/foto/admin/",
	 	'allowed_types' => "jpg|png|jpeg",
	 	'width' => 300,
	 	'height' => 250,
	 	'overwrite' => TRUE,
	 	'file_name' => md5(uniqid())
	 );
	 $this->load->library('upload', $config);
	   if($this->upload->do_upload('gambar')){
	   	  $gambar = $this->upload->data();
	   	  $data = array(
           'username' => htmlspecialchars($this->input->post('username', TRUE)),
           'password' => md5(htmlspecialchars($this->input->post('password', TRUE))),
           'email' => htmlspecialchars($this->input->post('email')),
           'no_hp' => htmlspecialchars($this->input->post('nohp')),
           'umur' => htmlspecialchars($this->input->post('umur')),
           'alamat' => htmlspecialchars($this->input->post('alamat')),
           'add_by' => $this->input->post('by'),
           'foto' => $gambar['file_name'],
           'status' => 1
	   	  );
	   	  $result = $this->db->insert('admin', $data);
	   	   if($result){
	   	   	 redirect('backend/data_admin');
	   	   }else{
                echo "<script>alert('Gagal menambahkan admin');history.go(-1);</script>";
	   	   }
	   }else{
	   	echo $this->upload->display_errors();
	   }
}
function delete_admin($id){
	$result = $this->db->delete('admin', array('id' => $id));
	   if($result){
	   	 redirect('backend/data_admin');
	   }else{
	   	  echo "<script>alert('Gagal menambahkan admin');history.go(-1);</script>";
	   }
}
function update_admin(){
	  $config = array(
	 	'upload_path' => "./assets/foto/admin/",
	 	'allowed_types' => "jpg|png|jpeg",
	 	'width' => 300,
	 	'height' => 250,
	 	'overwrite' => TRUE,
	 	'file_name' => md5(uniqid())
	 );
	 $this->load->library('upload', $config);
	   if($this->upload->do_upload('gambar')){
	   	  $gambar = $this->upload->data();
	   	  $data = array(
           'username' => htmlspecialchars($this->input->post('username', TRUE)),
           'email' => htmlspecialchars($this->input->post('email')),
           'no_hp' => htmlspecialchars($this->input->post('nohp')),
           'umur' => htmlspecialchars($this->input->post('umur')),
           'alamat' => htmlspecialchars($this->input->post('alamat')),
           'add_by' => $this->input->post('by'),
           'foto' => $gambar['file_name'],
           'status' => 1
	   	  );
	   	  $id = $this->input->post('id');
	   	  $result = $this->db->update('admin', $data, array('id' => $id));
	   	   if($result){
	   	   	 redirect('backend/data_admin');
	   	   }else{
                echo "<script>alert('gagal edit admin');history.go(-1);</script>";
	   	   }
	   }else{
	   	echo $this->upload->display_errors();
	   }
}
function edit_admin($id=""){
		if($id == ""){
			redirect('backend/data_admin');
		}else{
			$where = array('id' => $id);
			$data['admin'] = $this->M_aksi->edit_data($where, 'admin')->result();
			$this->load->view('admin/edit_admin', $data);
	}
}
	
}

?>