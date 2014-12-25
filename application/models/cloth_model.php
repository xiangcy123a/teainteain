<?php 
    class Cloth_model extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }
        public function insert($data){
            $this->db->insert('tea_cloth',$data);
        }
        public function insert_id($data){
            $this->db->insert('tea_cloth',$data);
            return $this->db->insert_id();
        }
        public function select($where){
            $query=$this->db->get_where('tea_cloth',$where);
            return $query->result();
        }
        public function select_one_join_ceto($cloth_id){
            $sql='select * from tea_cloth join tea_ceto on tea_cloth.cloth_ceto=tea_ceto.id where tea_cloth.cloth_id='.$cloth_id;
            $query=$this->db->query($sql);
            $res=$query->result();
            if($res){
                return $res[0];
            }
            return NULL;

        }
        public function select_one($where){
            $query=$this->db->get_where('tea_cloth',$where);
            $res=$query->result();
            if($res){
                return $res[0];
            }
            return NULL;
        }
        public function fabu_count($user_id){
            $this->db->where('user_id', $user_id);
            $this->db->from('tea_cloth');
            return $this->db->count_all_results();

        }
        public function delete($where){
            $this->db->delete('tea_cloth',$where);
        }
        public function del_cloth($ids){
            //$sql='delete from tea_cloth where cloth_id in( '.$ids.')';
            $sql='update tea_cloth set garb=1 where cloth_id in( '.$ids.')';
            $res=$this->db->query($sql);
            return true;
        }
        public function update($where,$data){
            $this->db->where($where);
            $this->db->update('tea_cloth',$data);
        }
        public function get($limit,$offset){
            if($limit==null){
                $query=$this->db->get('tea_cloth');
            }else{
                $query=$this->db->get('tea_cloth',$limit,$offset);
            }
            return $query->result();
        }
        /*public function select_project($pagesize,$page,$like,$where){
            if($like){
                 $this->db->like('title',$like);
                $this->db->or_like('summary',$like);  
                $this->db->or_like('status',$like);
            }else if($where){
                 $key=array_keys($where);
                $value=array_values($where);
                //var_dump($key);
                $this->db->having($key[0],$value[0]);
                //echo $key[0];exit();
            }       
            $this->db->limit($pagesize,($page-1)*$pagesize);
            $query=$this->db->get('tea_cloth');

            $res=$query->result();
           // echo $this->db->last_query();
            return $res;
            //var_dump($res);

        }*/
        // $pagesize=10 $page=1  $like='lisi'  $where='garb=0 and status=未处理'
        public function select_project($pagesize,$page,$like,$where){
            $sql='select * from tea_cloth  ';
            if($where){
                $sql.=' where '.$where.' ';
            }
            if($like){
                $sql.=' and ( title like \'%'.$like.'%\' or summary like \'%'.$like.'%\'  or status like \'%'.$like.'%\' ) ';
            }
            $sql.=' limit '.($page-1)*$pagesize.','.$pagesize;
            //echo $sql;
            $query=$this->db->query($sql);
           // echo $this->db->last_query();
            return $query->result();
            //var_dump($query);
            
        }
        public function count_project($like,$where){
            $sql='select count(*) as sum from tea_cloth  ';
            if($where){
                $sql.=' where '.$where.' ';
            }
            if($like){
                $sql.=' and ( title like \'%'.$like.'%\' or summary like \'%'.$like.'%\'  or status like \'%'.$like.'%\' ) ';
            }
           
            //echo $sql;
            $query=$this->db->query($sql);
            $res=$query->result();
            return $res[0]->sum;


        }


        public function selectByTime($num){
            $this->db->where('status !=','未处理');
           $query=$this->db->get('tea_cloth',$num,0);
           //print_r($query->result());
           return $query->result();
        }
        public function selectByIds($ids){
            $in=implode(',', $ids);
            $sql='select * from tea_cloth where cloth_id in('.$in.') and status!=\'未处理\' ';
            $query=$this->db->query($sql);
            $res=$query->result();
            return $res;
        }

        public function all_list($type,$page,$num){
            switch ($type) {
                case 'all':
                    $query=$this->db->get('tea_cloth',$num,8*($page-1));
                    $res=$query->result();
                    break;
                case 'new':
                    $query=$this->db->query('select * from tea_cloth where  status!="未处理" and TO_DAYS(deadline)-TO_DAYS(curdate())>=10 limit '.$num*($page-1).' , '.$num);
                    $res=$query->result();
                    break;
                case 'hot':
                    $query=$this->db->query('select * from tea_cloth where  status!="未处理" and  TO_DAYS(deadline)-TO_DAYS(curdate())>=0  and (got/amount)>=0.5  limit '.$num*($page-1).' , '.$num);
                    $res=$query->result();
                    break;
                case 'zhongchou':
                    $query=$this->db->query('select * from tea_cloth where  status!="未处理" and  TO_DAYS(deadline)-TO_DAYS(curdate())>=0 limit '.$num*($page-1).' , '.$num);
                    $res=$query->result();
                    break;
                case 'over':
                    $query=$this->db->query('select * from tea_cloth where  status!="未处理" and  TO_DAYS(curdate())>TO_DAYS(deadline) limit '.$num*($page-1).' , '.$num);
                    $res=$query->result();
                    break;
                
                default:
                    # code...
                    break;
            }

            return $res;
        }

        public function all_list_count($type,$num){
            switch ($type) {
                case 'all':
                    $res=$this->db->count_all_results('tea_cloth');
                    $res=ceil($res/$num);
                    break;
                case 'new':
                    $res=$this->db->query('select count(*) sum from tea_cloth where   status!="未处理" and  TO_DAYS(deadline)-TO_DAYS(curdate())>=10');
                    $res=$res->result();
                    $res=$res?intval($res[0]->sum):0;
                    $res=ceil($res/$num);
                    break;
                case 'hot':
                    $res=$this->db->query('select count(*) sum from tea_cloth where   status!="未处理" and  TO_DAYS(deadline)-TO_DAYS(curdate())>=0 and (got/amount)>=0.5');
                    $res=$res->result();
                    $res=$res?intval($res[0]->sum):0;
                    $res=ceil($res/$num);
                    break;
                case 'zhongchou':
                    $res=$this->db->query('select count(*) sum from tea_cloth where   status!="未处理" and  TO_DAYS(deadline)-TO_DAYS(curdate())>=0 ');
                    $res=$res->result();
                    $res=$res?intval($res[0]->sum):0;
                    $res=ceil($res/$num);
                    break;
                case 'over':
                    $res=$this->db->query('select count(*) sum from tea_cloth where   status!="未处理" and  TO_DAYS(curdate())>TO_DAYS(deadline) ');
                    $res=$res->result();
                    $res=$res?intval($res[0]->sum):0;
                    $res=ceil($res/$num);
                    break;
                
                default:
                    $res=$this->db->count_all_results('tea_cloth');
                    $res=ceil($res/$num);
                    break;
            }

            return $res;
        }

        


        

    }



 ?>