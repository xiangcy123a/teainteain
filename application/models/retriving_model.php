<?php 
    class Retriving_model extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function delete($where){
            $this->db->delete('tea_retriving',$where);
        }

        public function insert($data){
            $this->db->insert('tea_retriving',$data);
        }
       
        public function hava_data($where){
            $query=$this->db->get_where('tea_retriving',$where);
            $res=$query->result();
            if($res){
                return true;
            }
            return false;
        }



    }
 ?>