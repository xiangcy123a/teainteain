<?php 
    class Login extends CI_Controller{
        public function __construct(){
            parent::__construct();
            

        }


        public function index(){
            $this->load->view('login.php');
        }
        public function do_login(){
            $this->load->view('manage.php');
        }
        public function logout(){
            $this->session->userdata('');
        }


    }


 ?>