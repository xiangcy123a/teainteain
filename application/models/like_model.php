<?php 
    class Like_model extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function delete($where){
            $this->db->delete('like',$where);
        }

        public function insert($data){
            $this->db->insert('like',$data);
        }
        public function get_hot_num($cloth_id){
            $this->db->where('cloth_id', $cloth_id);
            $this->db->from('like');
            return $this->db->count_all_results();

        }
        public function hava_data($where){
            $query=$this->db->get_where('like',$where);
            $res=$query->result();
            if($res){
                return true;
            }
            return false;
        }



    }
 ?>