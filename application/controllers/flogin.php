<?php 
    class Flogin extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('user_model','user'); 


        }

        

        public function code(){
            $this->load->helper('captcha');
            $vals=array(
                'word'=>rand(1000,10000),//显示纯数字，这里有人不知道怎么做
                'img_path'=>'./captcha/',
                'img_url'=>base_url()."captcha/",
                'img_width'=>'60',
                'img_height'=>'34',
                'expiration'=>5
            );
            $cap=create_captcha($vals);
            $img=$cap['image'];
            $time=$cap['time'];
            $num=$cap['word'];
            $this->session->set_userdata('validate_code',$num);

            echo json_encode($time.'.jpg');      
        }
        public function check_username(){
            $email=$this->input->post('email');
            if($this->user->hava_data(array('email'=>$email))){
                echo json_encode(true);
            }else{
                echo json_encode(false);
            }
        }
        public function check_password(){
            $email=$this->input->post('email');
            $password=$this->input->post('password');
            if($this->user->hava_data(array('email'=>$email,'password'=>md5($password)))){
                echo json_encode(true);
            }else{
                echo json_encode(false);
            }
        }

        public function unique_email(){
            $email=$this->input->post('email');
            if($this->user->hava_data(array('email'=>$email))){
                echo json_encode(false);
            }else{
                echo json_encode(true);
            }
        }

        public function do_reg(){
            $email=$this->input->post('email');
            $password=$this->input->post('password');
            $this->user->insert(array('email'=>$email,'username'=>$email,'password'=>md5($password)));
            echo json_encode(true);

        }

        public function do_login(){
           /* if(!$this->session->userdata('is_login')){
                redirect(site_url().'/index/home');
            }*/
            if($this->session->userdata('validate_code')!=$this->input->post('validate_code')){
                echo json_encode(array('flag'=>false,'msg'=>'validate_code'));
                exit();
            }
            $email=$this->input->post('email');
            $password=$this->input->post('password');
            if($email&&$password){
                $user=$this->user->select_one(array('email'=>$email,'password'=>md5($password)));
                if(!$user){
                    echo json_encode(array('flag'=>false,'msg'=>'登录失败'));
                    exit();
                }
                $this->session->set_userdata('is_login',true);
                $this->session->set_userdata('user_id',$user->user_id);
                $this->session->set_userdata('username',$user->username);
                $this->session->set_userdata('nickname',$user->nickname);
               
                
                echo json_encode(array('flag'=>true,'msg'=>'登录成功'));
                exit();
            }

            echo json_encode(array('flag'=>false,'msg'=>'登录失败'));
            exit();




        }


        public function logout(){
            $this->session->unset_userdata('nickname');
            $this->session->unset_userdata('is_login');
            $this->session->unset_userdata('username');

            redirect(site_url().'/index/home');

        }


    }


 ?>