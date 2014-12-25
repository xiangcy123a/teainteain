<?php 
    $this->load->view('common_header.php');
 ?>
    <link rel="stylesheet" href="<?=base_url()?>static/index/css/list_subject.css">
    <style>
         .page{
            text-align: center;
            margin-bottom: 20px;
            margin-top: 20px;
        }
         .page a{
            display: inline-block;
            padding:10px;
            font-size: 22px;
            color: #aaa;
        }
         .page a:hover{
            color:  #2ed4ac;
        }
        .page .prev{

        }
        .page .next{

        }
        .totop{
            border:1px solid #ddd;
            border-radius: 20px;
            height: 80px;
            width: 80px;
            position: fixed;
            right: 40px;
            top: 500px;
            cursor: pointer;
            background: red;

        }

    </style>

</head>
<body>
    <?php 
        $this->load->view('header.php');
     ?>

    <div class="new container clearfix">
       
        <div class="new-list clearfix">
            <?php if($list):?>
            <?php foreach($list as $val):?>
            <div class="new-item clearfix">
                <a href="<?=site_url()?>/index/detail_subject?subject=<?=$val?$val->id:''?>" target="_blank">
                <div class="thumb">
                        <img src="<?=base_url().$val->list_pic?>" alt="">
                     
                    
                    <div class="new-hot">
                        
                        <img src="<?=base_url().$val->badge_pic?>" alt="">
                    </div>
                </div>
                </a>
                <div class="desc">
                    <div class="header"><a  href="<?=site_url()?>/index/detail_subject?subject=<?=$val?$val->id:''?>" target="_blank"><?=$val?$val->ceto_name:''?></a></div>
                    <div class="description">
                        <p style="word-break: break-all;"><?=$val?$val->subject_info:''?></p>
                    </div>
                    <span class="have">已有<strong><?=$val?$val->click_num:''?></strong>人参与</span>
                    <a class="look"  href="<?=site_url()?>/index/detail_subject?subject=<?=$val?$val->id:''?>" target="_blank">去看看</a>
                </div>
            </div>
            <?php endforeach;?>
            <?php endif;?>
            <!-- <div class="new-item clearfix">
                <a href="#">
                <div class="thumb">
                    
                        <img src="<?=base_url()?>static/index/images/left.jpg" alt="">
                    
                    <div class="new-hot">
                        <img src="<?=base_url()?>static/index/images/new-hot.png" alt="">
                    </div>
                </div>
                </a>
                <div class="desc">
                    <div class="header"><a href="#">OMC校园潮牌</a></div>
                    <div class="description">
                        <p>潮牌介绍潮牌介绍潮牌介绍潮牌介绍潮牌介绍
                        潮牌介绍潮牌介绍潮牌介绍潮牌介绍
                        潮牌介绍潮牌介绍潮牌介绍潮牌介绍潮牌介绍
                        潮牌介绍潮牌介绍潮牌介绍潮牌介绍</p>
                    </div>
                    <span class="have">已有<strong>200</strong>人参与</span>
                    <a class="look" href="#">去看看</a>
                </div>
            </div> -->

        </div>

        <div class="page">
                <a class="prev" href="<?=($page&&$page>1)?site_url().'/index/list_subject?page='.($page-1):'javascript:void();'?>">&lt;</a>
                <a href="javascript:void();"><?=$page?$page:'1'?></a>
                <a class="next" href="<?=($page&&$page<$total)?site_url().'/index/list_subject?page='.($page+1):'javascript:void();'?>">&gt;</a>
        </div>


    </div>
    <?php 
        $this->load->view('footer.php');
    ?>

    
</body>
<script>
    
</script>
</html>