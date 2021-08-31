<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {



  public function __construct()
  {
    parent :: __construct();
    $this->load->model('User_model');
  }


	public function index()
	{
    $ceksesi = $this->User_model->cek_session();
    if ($ceksesi==false) 
    {
      redirect('home');
    }
    $data['titel'] = 'Login';
    $this->load->view('layout/head', $data);
    $this->load->view('layout/header_toform');
    $this->load->view('login');
    $this->load->view('layout/footer');
    $this->load->view('layout/script');
    $this->load->view('layout/foot');
  }

  

  public function cekLogin()
  {
    $kunci    = $this->input->post('kunci');
    $password = $this->input->post('password');
    $where = array(
      'email' => $kunci,
      'password' => md5($password)
      );
    $cek = $this->User_model->cek_login("pengaduan_user",$where)->num_rows();
    if($cek > 0)
    {

      $data_session = array(
        'email' => $kunci,
        'status' => "login"
        );

      $this->session->set_userdata($data_session);

      redirect(base_url("home"));

    }
    else
    {
      echo 
      "
      <script>
        alert('Username dan Password anda salah') ;
        window.location='login';
      </script>
      ";
    }
  }

  public function userMasuk()
  {
    
    $data['titel'] = 'Profil';
    $this->load->view('layout/head', $data);

    $profil = $this->User_model->userProfile();
    foreach($profil as $p)
    {
      $data['idPengadu'] = $p->id_pengduser;
      $data['namaPengadu'] = $p->nama_pengadu;
      $data['noHp'] = $p->nohp;
      $data['email'] = $p->email;
    }
    
    $header = $this->User_model->headerLogin();

    $this->load->view("layout/$header");
    
    $this->load->view('profil', $data);
    $this->load->view('layout/footer');
    $this->load->view('layout/script');
    $this->load->view('layout/foot');
  }

  public function logout()
  {
    $this->User_model->keluar_sesi();
    redirect('home');
    
  }
    
    
}
