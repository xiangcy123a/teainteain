<?php 
    class Mark_model extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function delete($where){
            $this->db->delete('user_mark',$where);
        }

        public function insert($data){
            $this->db->insert('user_mark',$data);
        }
        public function hava_data($where){
            $query=$this->db->get_where('user_mark',$where);
            $res=$query->result();
            if($res){
                return true;
            }
            return false;
        }
        public function shoucang_count($user_id){
            $this->db->where('user_id', $user_id);
            $this->db->from('user_mark');
            return $this->db->count_all_results();
        }
        public function shoucang($user_id){
            $sql='select * from user_mark join tea_cloth on user_mark.cloth_id=tea_cloth.cloth_id where user_mark.user_id='.$user_id;
            $query=$this->db->query($sql);
            $res=$query->result();
            return $res;
        }



    }
 ?>