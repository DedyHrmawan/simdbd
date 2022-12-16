<?php
class AuthController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User');   
    }

    public function auth()
    {
        $data = $_POST;
        $user = $this->User->get(['filter' => ['username' => $data['username']]]);
        if($user != null){
            if($data['password'] == $user[0]->kata_sandi){    
                $newdata = array(
                    'username'      => $user[0]->username,
                    'hak_akses'     => $user[0]->akses_user,
                    'logged_in'     => TRUE
                );   
                $this->session->set_userdata($newdata);                   
                redirect('home');
            }else{
                $this->session->set_flashdata('error_login', 'Username atau password salah!');  
                redirect('login');
            }
        }else{
            $this->session->set_flashdata('error_login', 'User belum terdaftar!'); 
            redirect('login');
        }
    }    

    public function logout(){
        $this->session->sess_destroy();

        redirect('/');
    }
}
