<?php 
    class User_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function select_one($where){
            $query=$this->db->get_where('tea_user',$where);
            $res=$query->result();
            if($res){
                return $res[0];
            }
            return NULL;
        }
        public function hava_data($where){
            $query=$this->db->get_where('tea_user',$where);
            $res=$query->result();
            if($res){
                return true;
            }
            return false;
        }

        public function get($limit,$offset){
            if($limit==null){
                $query=$this->db->get('tea_user');
            }else{
                $query=$this->db->get('tea_user',$limit,$offset);
            }
            return $query->result();
        }


        public function insert($data){
            $this->db->insert('tea_user',$data);
        }
        public function select($where){
            $query=$this->db->get_where('tea_user',$where);
            return $query->result();
        }
        public function selectByPage($where,$start,$size){
            $query=$this->db->get_where('tea_user',$where);
            return $query->result();
        }
        public function delete($where){
            $this->db->delete('tea_user',$where);
        }
        public function update($where,$data){
            $this->db->where($where);
            $this->db->update('tea_user',$data);
        }


        public function select_user($pagesize,$page,$like,$where,$orderby){
            $sql='select * from tea_user  ';
            if($where){
                $sql.=' where '.$where.'  and  ';
            }
            if($like){
                if(!$where){
                    $sql.=' where ';
                }
                $sql.=' ( user_id like binary \'%'.$like.'%\' or birth like binary \'%'.$like.'%\'  or username like binary \'%'.$like.'%\'  or nickname like binary \'%'.$like.'%\' ) ';
            }
            if($orderby){
                $sql.=$orderby;
            }
            $sql.=' limit '.($page-1)*$pagesize.','.$pagesize;
            //echo $sql;
            $query=$this->db->query($sql);
           // echo $this->db->last_query();
            return $query->result();
            //var_dump($query);
        }
        public function count_user($like,$where){
            $sql='select count(*) as sum from tea_user  ';
            if($where){
                $sql.=' where '.$where.' and  ';
            }
            if($like){
                if(!$where){
                    $sql.=' where ';
                }
                $sql.='  ( user_id like binary \'%'.$like.'%\' or username like binary \'%'.$like.'%\'  or birth  like binary \'%'.$like.'%\'  or nickname like binary \'%'.$like.'%\' ) ';
            }         
            //echo $sql;
            $query=$this->db->query($sql);
            $res=$query->result();
            return $res[0]->sum;
        }
        public function del_user($ids){
            $sql='delete from tea_user where user_id in( '.$ids.')';
             $res=$this->db->query($sql);
            return true;
        }


    }


 ?>