<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {
	public function __construct(){
        parent::__construct();

        $this->load->model('cloth_model','cloth_model');
        $this->load->model('like_model','like_model');
        $this->load->model('user_model','user_model');
        $this->load->model('mark_model','mark_model');
        $this->load->model('project_list_model','project_list_model');
        $this->load->model('retriving_model','retriving_model');
    }

    public function test(){
        //$this->session->set_userdata('is_login',false);
        //var_dump($this->session);
    	//$this->load->view('test.php');
      // var_dump($this->cloth_model->all_list_count('new',1,8));
    }




    public function get_userinfo(){
        $user_id=$this->input->get('user_id');
        $user=$this->user_model->select_one(array('user_id'=>$user_id));
        if($user&&$user->nickname){
            echo json_encode($user->nickname);
            exit();
        }
        if($user&&$user->username){
            echo json_encode($user->username);
            exit();
        }

    }
    public function index()
    {     
        $cloths=$this->cloth_model->selectByTime(8);
        $carousel=$this->cloth_model->selectByIds(array(15,32,43,45));//人气
        $subjects=$this->project_list_model->selectByIds(array(1,2));//专题

        //var_dump($subjects);exit;
        $data=array(
            'cloths'=>$cloths,
            'carousel'=>$carousel,
            'subjects'=>$subjects
        );
        $this->load->view('index.php',$data);
    }
	public function home()
	{     
        $cloths=$this->cloth_model->selectByTime(8);
        $carousel=$this->cloth_model->selectByIds(array(15,32,43,45));//人气
        $subjects=$this->project_list_model->selectByIds(array(1,2));//专题

        //var_dump($subjects);exit;
        $data=array(
            'cloths'=>$cloths,
            'carousel'=>$carousel,
            'subjects'=>$subjects
        );
		$this->load->view('index.php',$data);
	}
    public function is_like(){
        $cloth_id=$this->input->get('cloth_id');
        if(!$this->session->userdata('is_login')){
            echo "false";
            exit();
        }
        $where=array('cloth_id'=>$cloth_id,'user_id'=>$this->session->userdata('user_id'));
        if($this->like_model->hava_data($where)){
            echo "true";
            exit();
        }
        echo "false";
    }

    public function get_hot_num(){
        $cloth_id=$this->input->get('cloth_id');
        $num=$this->like_model->get_hot_num($cloth_id);
        echo json_encode($num);
    }

    public function add_like(){
        
        if($this->session->userdata('is_login')){
           $cloth_id=$this->input->get('cloth_id');
           $user_id=$this->session->userdata('user_id');
           $this->like_model->insert(array('cloth_id'=>$cloth_id,'user_id'=>$user_id));
        }
        

    }
    public function delete_like(){
       
        if($this->session->userdata('is_login')){
           $cloth_id=$this->input->get('cloth_id');
           $user_id=$this->session->userdata('user_id');
           $this->like_model->delete(array('cloth_id'=>$cloth_id,'user_id'=>$user_id));
        }
    }

	public function all_list(){
		$page=$this->input->get('page')?$this->input->get('page'):1;
        $type=$this->input->get('type')?$this->input->get('type'):'all';
        $list=$this->cloth_model->all_list($type,$page,8);
        $total=$this->cloth_model->all_list_count($type,8);
        $data=array('list'=>$list,'total'=>$total,'page'=>$page,'type'=>$type);
		$this->load->view('list.php',$data);
	}

    public function list_subject(){
        $total_num=$this->project_list_model->count_num();
        $total=ceil($total_num/6);
        $page=$this->input->get('page')?$this->input->get('page'):'1';
        if($page<1){
            $page=1;
        }
        if($page>$total){
            $page=$total;
        }
        $list=$this->project_list_model->get(6,6*($page-1));
        // var_dump($list);exit;
        $data=array(
            'list'=>$list,
            'page'=>$page,
            'total'=>$total
        );
        $this->load->view('list_subject.php',$data);
    }

    public function detail_subject(){
        $page=$this->input->get('page')?$this->input->get('page'):1;
        $id=$this->input->get('subject')?$this->input->get('subject'):'1';
        $id=trim($id);
        $total=$this->project_list_model->count_cloth_by_subject($id,12);
        $list=$this->project_list_model->select_by_page(array('id'=>$id),$page,12);
        $data=array('list'=>$list,'page'=>$page,'total'=>$total);
        
        $this->load->view('detail_subject.php',$data);
    }
    public function add_click_num(){
        $id=$this->input->get('id');
        $this->project_list_model->add_click_num($id);
    }

	public function more_info(){
        $cloth_id=$this->input->get('cloth_id');
        $item=$this->cloth_model->select_one_join_ceto($cloth_id);
        // var_dump($item);exit;
        $data=array('item'=>$item);

		$this->load->view('more_info',$data);
	}


    public function faqi(){

        $this->session->unset_userdata('imgs');
        if(!$this->session->userdata('is_login')){
            $this->load->view('faqi');
            
        }else{
            $this->load->view('faqi');
        }
        
    }
    public function zhongchoumubiao(){
        //var_dump($_FILES);exit;
        // echo $_FILES['file']['name'][0];exit;
        $imgs=$this->session->userdata('imgs');
        if(!$imgs){
            $user_id=$this->session->userdata('user_id');
            $path = './upload/img/pro/'.$user_id;
            if (!is_dir($path)) {
                mkdir($path);
            }
            $path = './upload/img/pro/'.$user_id.'/';
            if (!is_dir($path)) {
                mkdir($path);
            }
            if(count($_FILES["file"]["tmp_name"])<=0){
                redirect(site_url().'/index/faqi');
                exit;
            }
            $imgs=array();
            for($i=0;$i<count($_FILES["file"]["tmp_name"]);$i++){
                 $imgname=microtime().'.jpg';
                 move_uploaded_file($_FILES["file"]["tmp_name"][$i],$path.$imgname);
                $imgs[$i]=$path.$imgname;
            }
        }
        
        $data=array('imgs'=>$imgs);
        $this->session->set_userdata('imgs',$imgs);
        if(!$this->session->userdata('is_login')){
            echo "have no login";
        }else{
            $this->load->view('zhongchoumubiao',$data);
        }
        
    }
    public function wenzimiaoshu(){
        $imgs=$this->session->userdata('imgs');
        
        if(!$imgs){
            redirect(site_url().'/index/faqi');
            exit;
        }
        $price=trim($this->input->get('price'));
        $day=trim($this->input->get('day'));
        $amount=trim($this->input->get('amount'));

        $data=array(
            'price'=>$price,
            'day'=>$day,
            'amount'=>$amount,
            'imgs'=>$imgs);
        $this->load->view('wenzimiaoshu',$data);
    }
    public function faqiok(){
        $user_id=$this->session->userdata('user_id');
        $imgs=$this->session->userdata('imgs');
        if(!$imgs){
            redirect(site_url().'/index/faqi');
            exit;
        }
        $price=trim($this->input->get('price'));
        $day=trim($this->input->get('day'));
        $title=trim($this->input->get('title'));
        $summary=trim($this->input->get('summary'));
        $amount=trim($this->input->get('amount'));
        $data=array(
            'price'=>$price,
            'day'=>$day,
            'imgs'=>$imgs,
            'title'=>$title,
            'summary'=>$summary,
            'amount'=>$amount
        );
        $in=array(
            'title'=>$title,
            'summary'=>$summary,
            'price'=>$price,
            'amount'=>$amount,
            //'img_src'=>$imgs[0],
            'deadline'=>date('Y-m-d',time()+$day*24*60*60),
            'user_id'=>$user_id,
            'likes'=>0,
            'status'=>'未处理',
            'garb'=>0
        );
        $id=$this->cloth_model->insert_id($in);
        for($i=0;$i<count($imgs);$i++){
            if(!file_exists('./upload/img/'.$id.'/huge/')){
                mkdir('./upload/img/'.$id.'/');
                mkdir('./upload/img/'.$id.'/huge/');
            }
            rename($imgs[$i],'./upload/img/'.$id.'/huge/'.($i+1).'.jpg');
            //rename($imgs[$i],'./upload/cloth/'.$i.'.jpg');
        }
        $this->cloth_model->update(array('cloth_id'=>$id),array('img_src'=>'./upload/img/'.$id.'/huge/1.jpg'));
        $this->session->unset_userdata('imgs');
        $this->load->view('faqiok',$data);
    }
    public function notfound(){
        $this->load->view('notfound');
    }
    public function bottom1(){
        $this->load->view('bottom1');
    }
    public function do_bottom1(){
        $reason=$this->input->post('reason');
        $more_info=$this->input->post('more_info');
        $data=array(
            'reason'=>$reason,
            'more_info'=>$more_info
        );
        $this->retriving_model->insert($data);
        echo json_encode('ok');
    }
    public function bottom2(){
        $this->load->view('bottom2');
    }
    public function bottom3(){
        $this->load->view('bottom3');
    }
    public function bottom4(){
        $this->load->view('bottom4');
    }
    public function bottom5(){
        $this->load->view('bottom5');
    }




    public function is_mark(){
        $cloth_id=$this->input->get('cloth_id');
        if(!$this->session->userdata('is_login')){
            echo "false";
            exit();
        }
        $where=array('cloth_id'=>$cloth_id,'user_id'=>$this->session->userdata('user_id'));
        if($this->mark_model->hava_data($where)){
            echo "true";
            exit();
        }
        echo "false";
    }

    public function add_mark(){
        
        if($this->session->userdata('is_login')){
           $cloth_id=$this->input->get('cloth_id');
           $user_id=$this->session->userdata('user_id');
           $this->mark_model->insert(array('cloth_id'=>$cloth_id,'user_id'=>$user_id));
        }
        

    }
    public function delete_mark(){
       
        if($this->session->userdata('is_login')){
           $cloth_id=$this->input->get('cloth_id');
           $user_id=$this->session->userdata('user_id');
           $this->mark_model->delete(array('cloth_id'=>$cloth_id,'user_id'=>$user_id));
        }
    }
}
