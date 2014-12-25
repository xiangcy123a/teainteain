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
        body{
            font-family: '微软雅黑';
        }
        ul,li{
            list-style-type: none;
        }
        .status{
            margin-top: 20px;
            margin-bottom: 20px;

        }
        .status li{
            width: 33%;
            background: rgb(242,241,229);
            height: 35px;
            float: left;
            text-align: center;
            line-height: 35px;
            color: white;
            font-weight: 700;
        }
        .status li:nth-child(1){
            width: 34%;
        }
        .status li.active{
            background: rgb(244,190,63);
        }
        
        .kefu p{
            display: inline-block;
            font-size: 1.1em;

        }
        .kefu .left{
            float: left;
        }
        .kefu .right{
            float: right;
            margin-left: 30px;
        }
        .kefu .time{
            color: #2ed4ac;
            font-weight: bolder;
        }
        .location {
            border:1px solid #ddd;
            padding-bottom: 20px;
        }


        .location .lo-header{
            color: #000;
            padding-left: 20px;
            background: #eee;
            padding-top: 6px;
            padding-bottom: 6px;
            font-weight: bolder;
        }
        .location .form{
            margin-left: 50px;
        }
        .location .form p{
            font-weight: bolder;
        }
        .location .form select{
            border-radius: 5px;
            width:80px;
            /*margin-left: 20px;*/
            margin-right: 30px;
        }
        .location .form input{
            margin-left: 20px;
        }
        .location .form .submit{
            border-radius: 5px;
            padding:5px 10px;
            border:none;
            background:  #2ed4ac;
            margin-right: 5px;
            font-weight: bolder;
            color: white;

        }
        .play-style{
            border:1px solid #ddd;
            padding-bottom: 20px;
            margin-top: 20px;
        }

        .play-style .header{
            padding-left: 20px;
            color: #000;
            padding-left: 20px;
            background: #eee;
            padding-top: 6px;
            padding-bottom: 6px;
            font-weight:bolder;
            /*float: left;*/
        }
        .play-style .company{
            font-weight: bolder;
            padding-left: 20px;
        }
        .play-style .company img{
            vertical-align: bottom;
            cursor: pointer;
            border:1px solid #fff;
        }
        .play-style .company img.active{
            border:1px solid #2ed4ac;
        }
         .price{
            color:#2ed4ac;
        }

        .shop-info {
            border:1px solid #ddd;
            padding-bottom: 20px;
            margin-top: 20px;
            border-bottom:none;

        }
        .shop-info .header{
            padding-left: 20px;
            color: #000;
            padding-left: 20px;
            background: #eee;
            padding-top: 6px;
            padding-bottom: 6px;
            font-weight:bolder;
            /*float: left;*/
        }


        .shop-info .back{
            float: right;
            color:  #2ed4ac;
            display: inline-block;
            padding-left: 10px;
            padding-right: 10px;
        }
        .shop-info .table{
            width: 90%;
            margin-left: auto;
            margin-right: auto;
            border:1px solid #ddd;
        }
        .shop-info .table tr,td{
            border:none;
        }
        .shop-info .table th{
            height: 32px;
            background: rgb(241,250,231);
        }
        .shop-info .order-price{
            float: right;
            margin-right: 100px;
        }

        .order-submit{
            padding:5px;
            margin-bottom: 20px;
            background: rgb(240,249,242);
        }
        
        .order-submit div{
            display: inline-block;
            height: 100%;
        }
        .order-submit .left{
            width: 50%;
            text-align: left;
            padding-left:6%;
        }
        .order-submit .center{
            width: 24%;
            padding-left: 3%;
            padding-right: 3%;
        }
        .order-submit .right{
            width: 24%;
            text-align: center;

        }
        .order-submit .right .submit{
            color: white;
            letter-spacing: 4px;
            border-radius: 5px;
            background: #2ed4ac;
            padding:10px 32px;
            border:none;
            font-size: 1.3em;
            /*line-height: 100px;*/


        }
        .order-submit .left,.order-submit .center{
            border-right: 1px solid #ddd;
        }


    
    </style>
    <script src="<?=base_url()?>static/common/js/jquery.min.js"></script>
    <script src="<?=base_url()?>static/bootstrap3/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>static/common/js/area.js"></script>
</head>
<body>
    <?php 
        $this->load->view('header');
     ?>
    
    <div class="container">
        <ul class="status clearfix">
            <li>1.查看购物车</li>
            <li class="active">2.确认订单信息</li>
            <li>3.成果提交订单</li>
        </ul>

        <div class="kefu clearfix">
            <p class="left"><span></span>请在<span class="time">19分48秒</span>提交订单，下单后您另有30分钟的支付时间。</p>
            <p class="right">100%正品保证</p>
            <p class="right">七天无理由退货</p>
        </div>
<form action="<?=base_url()?>static/alipay/alipayapi.php" method="post">
        <div class="location">
            <p class="lo-header">收货信息</p>
            <div class="form">
                <p>使用新地址</p>
            <select name="provin" id="provin">
                
            </select>
            <select name="city" id="city">
                
            </select>
            <select name="distinc" id="distinc">
                
            </select>
            <input type="text" name="name" placeholder="收货人">
            <input type="text" name="post" placeholder="邮编" style="width: 85px;">
            <input type="text" name="phone" placeholder="电话">
            <br><br>
            <textarea name="more_info" id="" cols="80" rows="5" placeholder="详细地址"></textarea>
            <br>
            <br>
            <button  class="submit btn-location">确定</button><!-- 添加到已有地址 -->
            </div>
            
        </div>

        <div class="play-style">
            <p class="header">
                支付方式
                 <!-- <span class="back">
                返回修改商品
                </span> -->
            </p>
                <p class="company">选择支付方式支付 <span class="price">2967</span> 元：<img src="<?=base_url()?>static/apply/img/alipay.png" width="130" height="50" alt="">
                <img src="<?=base_url()?>static/apply/img/weixin.png" width="130" height="50" alt=""></p>

           

        </div>
        <div class="shop-info clearfix">
            <p class="header">
                产品信息
                 <span class="back">
                返回修改商品
                </span>
            </p>
            <table class="table">
                <tr>
                    <th width="60%">产品信息</th>
                    <th>单价(元)</th>
                    <th>数量(件)</th>
                    <th>小计</th>
                </tr>
                <tr>
                    <td><?=$cloth?$cloth->title:''?> 尺码 <?=$size?$size:'L'?></td>
                    <td>￥<?=$cloth?$cloth->price:'0'?></td>
                    <td><?=$num?$num:'1'?></td>
                    <td>￥<?=$cloth?$cloth->price*$num:'0'?></td>
                </tr>
            </table>
            <p class="order-price">运费：￥10:00(查看运费说明)&nbsp;&nbsp;&nbsp;&nbsp;  本订单金额：<span class="price">￥<?=$cloth?$cloth->price*$num:'0'?></span></p>
        </div>
        <div class="order-submit">
            
                <input type="hidden" name="WIDtotal_fee" value="<?=$cloth?$cloth->price*$num:'0'?>" />
                <input type="hidden" name="WIDsubject" value="<?=$cloth?$cloth->title:'缇音科技'?>" />
                 <input type="hidden" name="WIDout_trade_no" value="<?=$goods_id?>" /> <!-- goods_id -->
                
                
                <div class="left">
                    <p class="all-location">运送信息：</p>
                    <p>支付方式：待支付总额由<span class="price">在线支付平台(支付宝)</span>支付</p>
                </div>
                <div class="center">
                    <p>商品金额：<span>￥<?=$cloth?$cloth->price*$num:'0'?></span></p>
                    <p>运费：<span>￥10</span></p>
                    <p class="daizhifu">待支付：<span>￥<?=$cloth?$cloth->price*$num:'0'?></span></p>
                </div>
                <div class="right">
                    <button class="submit">提交订单</button>
                </div>
           
        </div>
 </form>

    </div>

     <?php 
        $this->load->view('footer');
     ?>
    



</body>
<script>
    jQuery(function($){
        $('.play-style .company img').on('click',function(){
            if(!$(this).hasClass('active')){
                $(this).addClass('active').siblings('.active').removeClass('active');
            }
        });
        (function(){
            $('.btn-location').on('click',function(e){

                e.preventDefault();
                var provin=$('[name=provin]').val();
                var city=$('[name=city]').val();
                var distinct=$('[name=distinc]').val();
                var name=$('[name=name]').val();
                var post=$('[name=post]').val();
                var phone=$('[name=phone]').val();
                var more_info=$('[name=more_info]').val();
                //alert($('#ok').html());
                $('#ok').find('.text-center').text('录入成功!');
                $('#ok').modal('show');
                setTimeout(function(){$('#ok').modal('hide');},1500);
                $('.all-location').text('运送信息：'+provin+' '+city+' '+distinct+' '+name+' '+post+' '+phone+' '+more_info);
                
            });
        })();
        (function(){
            s=["provin","city","distinc"];//三个select的name
            function _init_area(){  //初始化函数
                for(i=0;i<s.length-1;i++){
                  document.getElementById(s[i]).onchange=new Function("change("+(i+1)+")");
                }
                change(0);
            }
            _init_area();
        })();
       
        
    });
</script>
</html>