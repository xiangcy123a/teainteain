<?php 
    class User extends CI_Controller{
        public function __construct(){
            parent::__construct();

            if(!$this->session->userdata('is_login')){
                redirect(site_url().'/index/home');
            }
            $this->load->model('user_model','user_model'); 
            $this->load->model('cloth_model','cloth_model'); 
            $this->load->model('mark_model','mark_model'); 
            $this->load->model('goods_model','goods_model');

        }

        public function index(){
            $user_id=$this->session->userdata('user_id');
            $fabu_count=$this->cloth_model->fabu_count($user_id);
            $shoucang_count=$this->mark_model->shoucang_count($user_id);
            $canyu_count=$this->goods_model->canyu_count($user_id);
            $data=
            array(
                'fabu_count'=>$fabu_count,
                'shoucang_count'=>$shoucang_count,
                'canyu_count'=>$canyu_count
            );
            $this->load->view('user/index',$data);

        }

        public function user_info(){
            $user_id=$this->session->userdata('user_id');
            $user=$this->user_model->select_one(array('user_id'=>$user_id));
            $data=array('user'=>$user);
            $this->load->view('user/user_info',$data);            
        }
        public function save_user_info(){
            $nickname=trim($this->input->post('nickname'));
            $smtalk=trim($this->input->post('smtalk'));
            $phone=trim($this->input->post('phone'));
            $qq=trim($this->input->post('QQ'));
            $user_id=$this->session->userdata('user_id');
            $data=array(
                'nickname'=>$nickname,
                'smtalk'=>$smtalk,
                'phone'=>$phone,
                'QQ'=>$qq
            );
            $this->session->set_userdata('nickname',$nickname);
            $this->user_model->update(array('user_id'=>$user_id),$data);
            //redirect(site_url().'/user/user_info');
            echo json_encode("true");
        }

        public function do_update_password(){
            $oldpassword=trim($this->input->post('oldpassword'));
            $newpassword=trim($this->input->post('newpassword'));
            $user_id=$this->session->userdata('user_id');
            $user=$this->user_model->select_one(array('user_id'=>$user_id));
            if($user->password!=md5($oldpassword)){
                echo json_encode(array('flag'=>false,'msg'=>'原始密码输入错误'));
                return ;
            }else{
                if($newpassword){
                    $this->user_model->update(array('user_id'=>$user_id),array('password'=>md5($newpassword)));
                    echo json_encode(array('flag'=>true,'msg'=>'success'));
                    return ;
                }
            }
            echo json_encode(array('flag'=>false,'msg'=>'操作失败'));

        }
        public function do_user_info(){

        }

        public function user_password(){

            $this->load->view('user/user_password');
        }
        public function fabu_pro(){
            $user_id=$this->session->userdata('user_id');
            $cloth=$this->cloth_model->select(array('user_id'=>$user_id));
            $data=array('cloth'=>$cloth);
            //echo count($cloth);
             $this->load->view('user/fabu_pro',$data);
        }

        public function canyu_pro(){
            $user_id=$this->session->userdata('user_id');
            $goods=$this->goods_model->select_order($user_id);
            $data=array('goods'=>$goods);
            // var_dump($goods);exit;
            $this->load->view('user/canyu_pro',$data);
        }

        public function shoucang_pro(){
            $user_id=$this->session->userdata('user_id');
            $shoucang=$this->mark_model->shoucang($user_id);
            $data=array('shoucang'=>$shoucang);
           // var_dump($data);exit;
            $this->load->view('user/shoucang_pro',$data);
        }
        public function del_shoucang(){
            $user_id=$this->session->userdata('user_id');
            $cloth_id=$this->input->get('cloth_id');
            $this->mark_model->delete(array('user_id'=>$user_id,'cloth_id'=>$cloth_id));
            echo json_encode(true);
        }
        public function xiaoxi(){
            $this->load->view('user/xiaoxi');
        }





        //订单管理


        public function order(){
            $user_id=$this->session->userdata('user_id');
            $all_count=$this->goods_model->countByStatus(array('user_id'=>$user_id));
            $yuding_count=$this->goods_model->countByStatus(array('user_id'=>$user_id,'status'=>'预定中'));
            $dengdai_count=$this->goods_model->countByStatus(array('user_id'=>$user_id,'status'=>'待发货'));
            $yifahuo_count=$this->goods_model->countByStatus(array('user_id'=>$user_id,'status'=>'已发货'));
            $yiqianshou_count=$this->goods_model->countByStatus(array('user_id'=>$user_id,'status'=>'已签收'));
            $yituikuan_count=$this->goods_model->countByStatus(array('user_id'=>$user_id,'status'=>'已退款'));
            $data=array(
                'all_count'=>$all_count,'yuding_count'=>$yuding_count,'dengdai_count'=>$dengdai_count,'yifahuo_count'=>$yifahuo_count,'yiqianshou_count'=>$yiqianshou_count,'yituikuan_count'=>$yituikuan_count
            );


            $this->load->view('user/order',$data);
        }
        public function all_order(){
            $user_id=$this->session->userdata('user_id');
            $orders=$this->goods_model->select_order($user_id);
            $this->load->view('user/all_order',array('orders'=>$orders));
        }

        public function yuding_order(){
            $user_id=$this->session->userdata('user_id');
            $orders=$this->goods_model->selectOrderByStatus($user_id,'预定中');
            $this->load->view('user/yuding',array('orders'=>$orders));
        }
        public function dengdai_order(){
            $user_id=$this->session->userdata('user_id');
            $orders=$this->goods_model->selectOrderByStatus($user_id,'待发货');
            $this->load->view('user/dengdai',array('orders'=>$orders));
           
        }
        public function yifahuo_order(){
            $user_id=$this->session->userdata('user_id');
            $orders=$this->goods_model->selectOrderByStatus($user_id,'已发货');
            $this->load->view('user/yifahuo',array('orders'=>$orders));
        }
        public function yiqianshou_order(){
            $user_id=$this->session->userdata('user_id');
            $orders=$this->goods_model->selectOrderByStatus($user_id,'已签收');
            $this->load->view('user/yiqianshou',array('orders'=>$orders));
        }

        public function yituikuan_order(){
            $user_id=$this->session->userdata('user_id');
            $orders=$this->goods_model->selectOrderByStatus($user_id,'已退款');
            $this->load->view('user/yituikuan',array('orders'=>$orders));
        }
        




    }



 ?>