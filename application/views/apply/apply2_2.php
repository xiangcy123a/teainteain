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
        
        .location .list{
            padding:10px;
        }
        .location .list .item{
            border:1px solid #ddd;
            float: left;
            margin-left: 4px;
            margin-right: 4px;
            width: 31%;
            background: #eee;
            padding:5px;
            cursor: pointer;
        }
        .location .list .item.active{
            border:1px solid #2ed4ac;
        }

        .location .list .item .name{
            border-bottom: 1px solid #ddd;
            padding-left: 20px;
            padding-top: 2px;
            padding-bottom: 5px;

        }
        .location .list .item .address{
            border-bottom: 1px solid #ddd;
             padding-left: 20px;
              padding-top: 2px;
            padding-bottom: 5px;
        }
        .location .list .item .tel{
            border-bottom: 1px solid #ddd;
             padding-left: 20px;
              padding-top: 2px;
            padding-bottom: 5px;
        }
        .location .list .item .opt{
            text-align: right;
           
             padding-top: 2px;
            padding-bottom: 5px;
            
            
        }
         .location .list .item .opt a{
             color: #2ed4ac;
         }

         .location .more{
            margin-left: 20px;
         }
         .location .more a{
            color:#000;
            font-weight: bolder;
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

        <div class="location clearfix">
            <p class="lo-header clearfix">收货信息</p>
            <ul class="list clearfix">
                <li class="item">
                    <p class="name">江小米</p>
                    <p class="address">浙江省 宁波市 江东区 </p>
                    <p class="tel">18814888873</p>
                    <p class="opt"><a href="#">修改</a>&nbsp;<a href="#">删除</a></p>
                </li>
                <li class="item">
                    <p class="name">江小米</p>
                    <p class="address">浙江省 宁波市 江东区 </p>
                    <p class="tel">18814888873</p>
                    <p class="opt"><a href="#">修改</a>&nbsp;<a href="#">删除</a></p>
                </li>
                <li class="item">
                    <p class="name">江小米</p>
                    <p class="address">浙江省 宁波市 江东区 </p>
                    <p class="tel">18814888873</p>
                    <p class="opt"><a href="#">修改</a>&nbsp;<a href="#">删除</a></p>
                </li>
            </ul>
            <p class="more">查看更多地址&nbsp;&nbsp;<a href="#">+使用新地址</a></p>
            
        </div>

        <div class="play-style">
            <p class="header">
                支付方式
                 <!-- <span class="back">
                返回修改商品
                </span> -->
            </p>
                <p class="company">选择支付方式支付 <span class="price">2967</span> 元：<img src="" width="130" height="50" alt="">
                <img src="" width="130" height="50" alt=""></p>

           

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
                    <td>特惠32英寸智能液晶平板电视 尺码 均码</td>
                    <td>￥2957</td>
                    <td>1</td>
                    <td>￥2957</td>
                </tr>
            </table>
            <p class="order-price">运费：￥10:00(查看运费说明)&nbsp;&nbsp;&nbsp;&nbsp;  本订单金额：<span class="price">￥2967</span></p>
        </div>
        <form action="<?=base_url()?>static/alipay/alipayapi.php" method="post">
        <div class="order-submit">
            <div class="left">
                <p>运送信息：将小米  浙江宁波是市江东区 桃园街</p>
                <p>支付方式：待支付总额由<span class="price">在线支付平台(支付宝)</span>支付</p>
            </div>
            <div class="center">
                <p>商品金额：<span>￥2999</span></p>
                <p>运费：<span>￥10</span></p>
                <p class="daizhifu">待支付：<span>￥2999</span></p>
            </div>
                            <input type="hidden" name="WIDtotal_fee" value="<?=$cloth?$cloth->price*$num:'0'?>" />
                <input type="hidden" name="WIDsubject" value="<?=$cloth?$cloth->title:'缇音科技'?>" />
                 <input type="hidden" name="WIDout_trade_no" value="<?=$goods_id?>" /> <!-- goods_id -->
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
        $('.location .list .item').on('click',function(){
            if(!$(this).hasClass('active')){
                $(this).addClass('active').siblings('.active').removeClass('active');
            }
        });
    });
</script>
</html>