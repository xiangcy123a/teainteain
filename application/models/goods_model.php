<?php 
    class Goods_model extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function insert($data){
            $this->db->insert('tea_goods',$data);
        }
        public function select($where){
            $query=$this->db->get_where('tea_goods',$where);
            return $query->result();
        }
        public function select_order($user_id){
            $sql='select * from tea_goods join tea_cloth on tea_goods.cloth_id =tea_cloth.cloth_id where tea_goods.user_id='.$user_id;
            $query=$this->db->query($sql);
            return $query->result();

        }

        public function selectOrderByStatus($user_id,$status){
            $sql='select * from tea_goods join tea_cloth on tea_goods.cloth_id =tea_cloth.cloth_id where tea_goods.user_id='.$user_id.' and tea_goods.status="'.$status.'"';
            $query=$this->db->query($sql);
            return $query->result();

        }
        public function delete($where){
            $this->db->delete('tea_goods',$where);
        }
        public function del_goods($ids){
            //$sql='delete from tea_cloth where cloth_id in( '.$ids.')';
            $sql='update tea_goods set garb=1 where goods_id in( '.$ids.')';
            $res=$this->db->query($sql);
            return true;
        }
        public function update($where,$data){
            $this->db->where($where);
            $this->db->update('tea_goods',$data);
        }
        public function select_goods($pagesize,$page,$like,$where){
            $sql='select * from tea_goods  ';
            if($where){
                $sql.=' where '.$where.' ';
            }
            if($like){
                $sql.=' and ( goods_id like \'%'.$like.'%\' or receive_name like \'%'.$like.'%\'  or status like \'%'.$like.'%\' ) ';
            }
            $sql.=' limit '.($page-1)*$pagesize.','.$pagesize;
            //echo $sql;
            $query=$this->db->query($sql);
           // echo $this->db->last_query();
            return $query->result();
            //var_dump($query);
        }
        public function count_goods($like,$where){
            $sql='select count(*) as sum from tea_goods  ';
            if($where){
                $sql.=' where '.$where.' ';
            }
            if($like){
                $sql.=' and ( goods_id like \'%'.$like.'%\' or receive_name like \'%'.$like.'%\'  or status like \'%'.$like.'%\' ) ';
            }         
            //echo $sql;
            $query=$this->db->query($sql);
            $res=$query->result();
            return $res[0]->sum;
        }

        public function get_max_order(){
            $date=date('Ymd',time());
            $sql='select * from tea_goods where LEFT(goods_id,8)='.$date;
            $query=$this->db->query($sql);
            $res=$query->result();
            if($res){
                $goods_id=end($res)->goods_id;
                $id=substr($goods_id,8,16);
                $new_id=$id+1;
                $new_id=sprintf("%08d", $new_id);
                return ($date.$new_id);
            }else{
                return $date.'00000001';
            }
        }
        public function canyu_count($user_id){
            $this->db->where('user_id', $user_id);
            $this->db->from('tea_goods');
            //echo $this->db->last_query();
            return $this->db->count_all_results();
        }
        public function countByStatus($wheredata){
            //echo 'ok';
            $this->db->where($wheredata);
            $this->db->from('tea_goods');
            $c=$this->db->count_all_results();
            //echo $this->db->last_query();exit;
            return $c;
        }




    }





 ?>