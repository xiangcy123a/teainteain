<?php 
    class Manage extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->library('session');
            $this->load->model('user_model','userm');
            $this->load->model('goods_model','goodsm');
            $this->load->model('cloth_model','cloth');
            // $this->load->database();
        }
        public function index(){
            //$this->user->insert();
            //$this->user->update(array('username'=>'yangjianbin'),array('nickname'=>'lisi'));
            //$res=$this->user->select(array('user_id'=>1));
            //$res=$this->user->delete(array('username'=>'yangjianbin'));
            //var_dump($res);
            $this->load->view('manage/manage');
        }
        public function project(){  
            //$cloths=$this->cloth->get(10,0);
            //$data=array('cloths'=>$cloths);
            $this->load->view('manage/project');
        }
        public function select_project(){
            $pagesize=$this->input->get('pagesize')?$this->input->get('pagesize'):10;
            $page=$this->input->get('page')?$this->input->get('page'):1;
            $like=$this->input->get('like')?$this->input->get('like'):'';
            $where=$this->input->get('where')?$this->input->get('where'):'';
           
            $cloths=$this->cloth->select_project($pagesize,$page,$like,$where);//返回数据list
            //var_dump($cloths);
            $total=$this->cloth->count_project($like,$where);//返回总个数
            $data=array(
                'cloths'=>$cloths,
                'total'=>$total
            );       
            echo json_encode($data);
        }
        public function del_cloth(){
            $ids=$this->input->post('ids');
            $bool=$this->cloth->del_cloth($ids);
            echo json_encode($bool);
        }
        


        public function user(){
            $this->load->view('manage/user');
        }
        public function ui(){
            $this->load->helper('file');
            $indeximg=get_filenames('./upload/indeximg');
            $intro=get_filenames('./upload/intro');
            $uncompress1=get_filenames('./upload/uncompress/1');
            $uncompress2=get_filenames('./upload/uncompress/2');
            $uncompress3=get_filenames('./upload/uncompress/3');
            
            $this->load->view('manage/ui',array('uncompress3'=>$uncompress3,'uncompress2'=>$uncompress2,'uncompress1'=>$uncompress1,'indeximg'=>$indeximg,'intro'=>$intro));
        }
        public function goods(){
            $this->load->view('manage/goods');
        }

        public function select_goods(){
            $pagesize=$this->input->get('pagesize')?$this->input->get('pagesize'):10;
            $page=$this->input->get('page')?$this->input->get('page'):1;
            $like=$this->input->get('like')?$this->input->get('like'):'';
            $where=$this->input->get('where')?$this->input->get('where'):'';
            $goods=$this->goodsm->select_goods($pagesize,$page,$like,$where);//返回数据list
            //var_dump($cloths);
            $total=$this->goodsm->count_goods($like,$where);//返回总个数
            $data=array(
                'goods'=>$goods,
                'total'=>$total
            );       
            echo json_encode($data);
        }
        public function del_goods(){
            $ids=$this->input->post('ids');
            $bool=$this->goodsm->del_goods($ids);
            echo json_encode($bool);
        }
        public function image(){
            $this->load->view('manage/image');
        }
        public function select_user(){
            $pagesize=$this->input->get('pagesize')?$this->input->get('pagesize'):10;
            $page=$this->input->get('page')?$this->input->get('page'):1;
            $like=$this->input->get('like')?$this->input->get('like'):'';
            $where=$this->input->get('where')?$this->input->get('where'):'';
            $orderby=$this->input->get('orderby')?$this->input->get('orderby'):'';
            $users=$this->userm->select_user($pagesize,$page,$like,$where,$orderby);//返回数据list
            //var_dump($cloths);
            $total=$this->userm->count_user($like,$where);//返回总个数
            $data=array(
                'users'=>$users,
                'total'=>$total
            );       
            echo json_encode($data);
        }
        public function del_user(){
            $ids=$this->input->post('ids');
            $bool=$this->userm->del_user($ids);
            echo json_encode($bool);
        }

        public function delpic(){
            $picurl=$this->input->post('picurl');
            if(file_exists($picurl)){
                unlink($picurl);
                echo 'true';
            }else{
                echo 'false';
            }


        }

        public function test(){
           // $this->cloth->select_project(10,1,'');
            //$res=$this->cloth->count_project('','');
            ///////////////
            //echo $res; //
            ///////////////
            $this->load->helper('file');

            var_dump(get_filenames('./upload'));

        }

        public function testupload(){
            $path='./upload/indeximg/';
            $config['upload_path']=$path;
            $config['allowed_types']='jpg';
            $config['file_name']='bg';
            $config['max_size']='1000';
            $config['max_width']='2000';
            $config['max_height']='1000';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('upload')){
                $picdata=$this->upload->data();
                $picname=$picdata['file_name'];
                $arr=array('flag'=>'true','text'=>'./upload/indeximg/'.$picname);
                echo json_encode($arr);
            }else{
                $arr=array('flag'=>'false','text'=>'');
                echo json_encode($arr);
            }
        }
        public function uploadintro(){
            $path='./upload/intro/';
            $config['upload_path']=$path;
            $config['allowed_types']='jpg';
            $config['file_name']='intro';
            $config['max_size']='1000';
            $config['max_width']='2000';
            $config['max_height']='1000';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('upload')){
                $picdata=$this->upload->data();
                $picname=$picdata['file_name'];
                $arr=array('flag'=>'true','text'=>'./upload/intro/'.$picname);
                echo json_encode($arr);
            }else{
                $arr=array('flag'=>'false','text'=>'');
                echo json_encode($arr);
            }
        }

        public function uncompressupload(){
            $dir=$this->input->get('dir');
            $path='./upload/uncompress/'.$dir.'/';
            $config['upload_path']=$path;
            $config['allowed_types']='jpg';
            $config['file_name']='uncompress';
            $config['max_size']='1000';
            $config['max_width']='2000';
            $config['max_height']='1000';
            $this->load->library('upload',$config);
            if($this->upload->do_upload('upload')){
                $picdata=$this->upload->data();
                $picname=$picdata['file_name'];
                $arr=array('flag'=>'true','text'=>'./upload/uncompress/'.$dir.'/'.$picname);
                echo json_encode($arr);
            }else{
                $arr=array('flag'=>'false','text'=>'');
                echo json_encode($arr);
            }
        }

    }

 ?>

