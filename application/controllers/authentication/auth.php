<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

//fungsi menegecek login user
public function cekAkun(){
	//load model user_error
	$this->load->model('m_login');
	
	//membuat validasi login
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	
	
	$query = $this->m_login->cekAkun($username, $password);
	
	if($query === 1 ){
		return "User tidak ditemukan";
	}else if ($query === 2){
		return "user tidak aktif";
	}else if ($query ===3 ){
		return "Password Salah";
	}else{
		//membuat session dengan nama userdata
		$userData = array(
			'kd_user'=> $query->kd_user,
			'level'=> $query->level,
			'logged_in' => true
		);
		$this->session->set_userdata($userData);
		return TRUE;
	}
	
}

public function login(){
	//melakukan pengalihan halaman sesuai akses atau level user
	if ($this->session->userdata('level') == "Admin"){redirect('Dashboard');}
    if ($this->session->userdata('level') == "Kasir"){redirect('Dashboard');}
	
	//Proses login dan validasi
	if($this->input->post('submit')){
		$this->load->model('m_login');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$error = $this->cekAkun();
      
	  if ($this->form_validation->run() && $error === TRUE) {
        $data = $this->m_login->cekAkun($this->input->post('username'), $this->input->post('password'));
		
		//jika bernilai TRUE maka alihkan halaman sesuai dengan level nya
        if($data->level == 'Admin'){
          redirect('Dashboard');
        }
        else if($data->level == 'Kasir'){
          redirect('Dashboard');
        }
		
	}
	
	    //Jika bernilai FALSE maka tampilkan error
      else{
        $data['error'] = $error;
        $this->load->view('v_login', $data);
      }
    }
    //Jika tidak maka alihkan kembali ke halaman login
    else{
      $this->load->view('v_login');
    }
  }
  
public function logout() {
    //Menghapus semua session (sesi)
    $this->session->sess_destroy();
    redirect('authentication/auth/login');
  }
  
  



	
}
?>
