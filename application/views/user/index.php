<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>欢迎来到缇音平台|TEAIN</title>
    <link rel="stylesheet" href="<?=base_url()?>static/bootstrap3/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>static/bootstrap3/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?=base_url()?>static/common/css/common.css">
    <style>
        *{
            font-family: '微软雅黑';
        }
        a{
            color: #333;
        }
        ul,li{
            list-style:none;
            margin: 0px;
            padding: 0px;
        }
        .content{
            
            
            width: 100%;
            background:rgb(249,246,238);
        }

        .usercenter{
            /*height: 50px;*/
            background: #fff;
            border-top-right-radius: 8px;
            border-top-left-radius: 8px;
            margin-top:30px;
            margin-bottom: 10px;
            
        }
        .usercenter ul li{
            display: inline-block;
            line-height: 50px;
            padding-left: 18px;
            padding-right: 18px;
            float: left;

        }
        .usercener ul li a{
            display: block;
            line-height: 50px;

        }
        .usercenter ul li a>span{
            padding:0px 8px;
            background:rgb(240,190,63);
            color: #fff;
            border-radius: 5px;
            font-size: 12px;
            margin-left: 2px;
        }
        .usercenter ul li a:hover{
            text-decoration: none;
             color: rgb(240,190,63);
        }
        .usercenter ul li a.head{
            color: rgb(240,190,63);
            font-size: 20px;

        }
        .usercenter ul li a.active{
            color: rgb(240,190,63);
        }


        .iframe{
           background:#fff;
           border-bottom-left-radius: 20px;
           border-bottom-right-radius: 20px;
           margin-bottom: 40px;
        }
        iframe{
            width: 100%;
            height: 600px;
            border-bottom-left-radius: 20px;
           border-bottom-right-radius: 20px;

        }


    </style>
    <script src="<?=base_url()?>static/common/js/jquery.min.js"></script>
    <script src="<?=base_url()?>static/bootstrap3/js/bootstrap.min.js"></script>
</head>
<body>
    <?php 
        $this->load->view('header.php');
     ?>
    
    <div class="content" style="">
        <div class="container">
            <div class="usercenter">
                <ul class="clearfix">
                    <li><a href="<?=site_url('user/user_info')?>" class="head"><span></span>个人中心</a></li>
                    <li><a  href="<?=site_url('user/user_info')?>" class="active">个人资料</a></li>
                    <li><a  href="<?=site_url('user/user_password')?>">账号密码</a></li>
                    <li><a href="<?=site_url('user/fabu_pro')?>">发布项目<span><?=$fabu_count?$fabu_count:'0'?></span></a></li>
                    <li><a href="<?=site_url('user/canyu_pro')?>">参与项目<span><?=$canyu_count?$canyu_count:'0'?></span></a></li>
                    <li><a href="<?=site_url('user/shoucang_pro')?>">收藏项目<span><?=$shoucang_count?$shoucang_count:'0'?></span></a></li>
                    <li><a href="<?=site_url('user/xiaoxi')?>">消息通知<span>0</span></a></li>
                    <li><a target="_blank" href="<?=site_url('user/order')?>" class="head">我的订单</a></li>
                </ul>
            </div>

            <div class="iframe">
                <iframe src="<?=site_url('user/user_info')?>" name="main" frameborder="0">
                </iframe>


            </div>
        </div>
        


    </div>


  
   
    <?php 
        $this->load->view('footer.php');
    ?>

    
</body>
<script>
    jQuery(function($){
        $('.usercenter ul li a').on('click',function(e){
            if($(this).attr('target')){

            }else{
                e.preventDefault();
                if(!$(this).hasClass('active')){
                    $(this).addClass('active').parent().siblings('li').find('.active').removeClass('active');
                    $('iframe').attr('src',$(this).attr('href'));
                }
            }
            
        });






    });
</script>
</html>