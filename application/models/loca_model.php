<?php 
    class Loca_model extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function delete($where){
            $this->db->delete('tea_loca',$where);
        }

        public function insert($data){
            $this->db->insert('tea_loca',$data);
            return  $this->db->insert_id();
        }
        
        public function select($wheredata){
            $query=$this->db->get_where('tea_loca',$wheredata);
            $res=$query->result();
            return $res;
        }
        public function select_one($wheredata){
            $query=$this->db->get_where('tea_loca',$wheredata);
            $res=$query->result();
            if($res){
                return $res[0];
            }
            return null;
        }
       
        public function hava_data($where){
            $query=$this->db->get_where('tea_loca',$where);
            $res=$query->result();
            if($res){
                return true;
            }
            return false;
        }



    }
 ?>