<?php
class login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_app');
    }

    function index(){
        $this->load->view('login/v_login');
    }

    function cek_login() {
        
        $username = $this->input->post('username');
        $password = $this->input->post('password');
       
        $result = $this->model_app->login($username, $password);
        if($result) {
            $sess_array = array();
            foreach($result as $row) {
                
                $sess_array = array(
                    'kd_user' => $row->kd_user,
                    'nm_user' => $row->nm_user,
                    'notelp'=>$row->notelp,
                    'username'=>$row->username,
                    'password' => $row->password,
                    'level' => $row->level,
                    'login_status'=>true,
                );
                
                $this->session->set_userdata($sess_array);
                redirect('Dashboard','refresh');
            }
            return TRUE;
        } else {
            
            redirect('Dashboard','refresh');
            return FALSE;
        }
    }

    function logout() {
        $this->session->unset_userdata('kd_user');
        $this->session->unset_userdata('nm_user');
        $this->session->unset_userdata('notelp');
        $this->session->unset_userdata('NAME');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('level');
        $this->session->unset_userdata('login_status');
        $this->session->set_flashdata('notif','Terima Kasih Telah Login');
        redirect('authentication/login');
    }
}
