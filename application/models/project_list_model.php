<?php 
    class Project_list_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function select_one($where){
            $query=$this->db->get_where('tea_project_list',$where);
            $res=$query->result();
            if($res){
                return $res[0];
            }
            return NULL;
        }
        public function add_click_num($id){
            $sql='update tea_project_list set click_num=click_num+1 where id='.$id;
            $this->db->query($sql);
        }
        public function count_num(){
             return $this->db->count_all_results('tea_project_list');
        }

        public function get($limit,$offset){
            if($limit==null){
                $query=$this->db->get('tea_project_list');
            }else{
                $query=$this->db->get('tea_project_list',$limit,$offset);
            }
            return $query->result();
        }
        public function selectByIds($ids){
            $in=implode(',', $ids);
            $sql='select * from tea_project_list where id in('.$in.')';
            $query=$this->db->query($sql);
            $res=$query->result();
            return $res;
        }


        public function insert($data){
            $this->db->insert('tea_project_list',$data);
        }
        public function select($where){
            $query=$this->db->get_where('tea_project_list',$where);
            return $query->result();
        }

        public function count_cloth_by_subject($id,$num){
            $this->db->where('ceto',$id);
            $this->db->from('tea_project');
            $n=$this->db->count_all_results();
            return ceil($n/$num);
        }

        public function select_by_page($where,$page,$pagesize){
            $sql='select * from tea_project join tea_cloth on tea_project.cloth_id=tea_cloth.cloth_id where tea_project.ceto='.$where['id'].' limit '.($page-1)*$pagesize.' , '.$pagesize;
            $query=$this->db->query($sql);
            $res=$query->result();
            return $res;
            //echo $this->db->last_query();
            //var_dump($res);
            //exit;

        }
        

    }


 ?>