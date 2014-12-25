<?php 
    class Test extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->library('session');
            $this->load->model('user_model','user');
        }
        public function index(){
            //$this->user->insert();
            //$this->user->update(array('username'=>'yangjianbin'),array('nickname'=>'lisi'));
            //$res=$this->user->select(array('user_id'=>1));
            $res=$this->user->delete(array('username'=>'yangjianbin'));
            var_dump($res);
        }
    }

 ?>

