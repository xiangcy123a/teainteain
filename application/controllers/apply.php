<?php  
    class Apply extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('cloth_model','cloth_model');
            $this->load->model('goods_model','goods_model');
        }

        /*public function index(){
            $this->load->view('apply/index');
        }*/
        public function apply1(){
            $cloth_id=$this->input->get('cloth_id')?$this->input->get('cloth_id'):1;
            $size=$this->input->get('size')?$this->input->get('size'):'';
            $num=$this->input->get('num')?$this->input->get('num'):1;
            $cloth=$this->cloth_model->select_one(array('cloth_id'=>$cloth_id));
            $data=array('cloth'=>$cloth,'size'=>$size,'num'=>$num);
            $this->load->view('apply/apply1',$data);
        }
        public function apply2(){
            $this->goods_model->get_max_order();
            $cloth_id=$this->input->get('cloth_id')?$this->input->get('cloth_id'):1;
            $size=$this->input->get('size')?$this->input->get('size'):'';
            $num=$this->input->get('num')?$this->input->get('num'):1;
            //隶｢蜊品d
            $goods_id=$this->goods_model->get_max_order();

            $cloth=$this->cloth_model->select_one(array('cloth_id'=>$cloth_id));
            $data=array('cloth'=>$cloth,'size'=>$size,'num'=>$num,'goods_id'=>$goods_id);
            $dbdata=array(
                'goods_id'=>$goods_id,
                'cloth_id'=>$cloth_id,
                'status'=>'投产中',
                'quantity'=>$num,
                'trans_time'=>time(),
                'receive_name'=>'',
                'location'=>''
            );
           // $this->load->view('apply/apply2_1',$data);
            if(!$this->session->userdata('is_login')){
                $dbdata['user_id']=$this->session->userdata('user_id');
                $this->goods_model->insert($dbdata);
                $this->load->view('apply/apply2_1',$data);
            }else{
                $this->goods_model->insert($dbdata);
                $this->load->view('apply/apply2_2',$data);
            }
            
        }
        /*public function apply2_2(){
            $this->load->view('apply/apply2_2');
        }*/
        public function apply3(){
            print_r($_POST);

            // if($this->session->userdata('is_login')){

                

            //     //$this->load->view('apply/apply3');
            // }else{
            //     echo 'have no login';
            // }
            
        }






    }



 ?>