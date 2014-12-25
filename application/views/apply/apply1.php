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
        hr{
            margin-top: 0px;
            margin-bottom: 0px;
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


        .content{
            border:1px solid #ddd;
            border-top:2px solid #2ed4ac;
            margin-bottom: 20px;
            padding-bottom: 30px;
        }

        .content .table-header{
            padding-left: 50px;
            padding-right: 50px;
            background: rgb(240,250,231);
        }
        .content .table-header li{
            float: left;
            padding-top: 5px;
            padding-bottom: 5px;
        }
        .content .item{
            padding-left: 50px;
            padding-right: 50px;
        }
        .content .item p{
            font-weight: bolder;
            padding-left: 20px;
            padding-top: 10px;
        }
        .content .item-ul {
            border:1px solid #ddd;
            background: #eee;
            padding:5px;
        }
        .content .item-ul .item-li{
            float: left;
        }
        .content .item-ul .item-li.opt-delete{
            cursor: pointer;
        }
        .content  .item-ul  .item-title img{
            /*vertical-align: top;*/
        }
        .content .item-ul .item-num{

        }
        .content .item-ul .item-num div{
            /*border:1px solid #ddd;*/
            position: relative;
        }
        .content .item-ul .item-num div a{
            display: inline-block;
            background: #eee;
            padding-left: 5px;
            padding-right: 5px;
            border:1px solid #ddd;
            /*position: absolute;*/
            font-weight: bolder;
        }

        .content .item-ul .item-num div input{
            width: 20px;
            /*position: absolute;*/
            height: 22px;
            text-align: center;
        }
        .count{
            background: rgb(250,255,255);
            border:1px solid #ddd;
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 10px;
        }
        .count .price{
            float: right;
            text-align: right;
              font-weight: bolder;
        }
        .count>p{
           /* float: left;
            margin-top: 50px;*/
            float: left;
            margin-top: 30px;
        }
        .count .price span{
            font-size: 1.3em;
        }



        .submit-control{
            background: rgb(241,254,249);
            border:1px solid #ddd;
            border-top: none;
            margin-bottom: 80px;
            border-bottom-right-radius: 5px;

        }
        .submit-control p{
            text-align: right;
            margin-bottom: 0px;


        }
        .submit-control p button{
            padding:8px 30px;
            background:  #2ed4ac;
            border:none;
            border-radius: 5px;
            color: white;
            font-weight: bolder;
        }

        
        .font-green{
            color: #2ed4ac;
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
            <li class="active">1.查看购物车</li>
            <li>2.确认订单信息</li>
            <li>3.成果提交订单</li>
        </ul>

        <div class="kefu clearfix">
            <p class="left"><span></span>请在 20分 内提交订单</p>
            <p class="right">100%正品保证</p>
            <p class="right">七天无理由退货</p>
        </div>
 <form action="<?=site_url()?>/apply/apply2" method="get">
        <input type="hidden" name="cloth_id" value="<?=$cloth?$cloth->cloth_id:0?>" />
        <input type="hidden" name="size" value="<?=$size?>" />
        
        <div class="content clearfix">
            <ul class="table-header clearfix">
                <li class="info" style="width:44%;"><!--<input type="checkbox"/>-->&nbsp;产品信息</li>
                <li class="per-price"  style="width:14%;">单价(元)</li>
                <li class="num"  style="width:14%;">数量(件)</li>
                <li class="sum"  style="width:14%;">小计</li>
                <li class="num"  style="width:14%;">操作</li>             
            </ul>
            <div class="item">
                <p><?=$cloth?$cloth->title:''?></p>
               
                    
                
                <ul class="item-ul clearfix">
                    <li class="item-li item-title" style="width:44%;">
                        <img src="" width="40" height="30" alt=""><?=$cloth?$cloth->title:''?>
                    </li>
                    <li class="item-li item-price"  style="width:14%;">
                        ￥<span><?=$cloth?$cloth->price:'0'?></span>
                    </li>
                    <li class="item-li item-num"  style="width:14%;">
                        <div>
                            <a href="#" class="des">-</a>
                            <input type="text" name="num" class="item-num-value" value="<?=$num?$num:'1'?>">
                            <a href="#" class="add">+</a>
                        </div>
                    </li>
                    <li class="item-li item-tprice"  style="width:14%;">￥<span><?=$cloth?$cloth->price*$num:'0'?></span></li>
                    <li class="item-li item-opt opt-delete"  style="width:14%;">删除</li>
                </ul>

            </div>

        </div>
            <div class="count clearfix">
                <p>
                    <!--
                    <input type="checkbox"/>&nbsp;
                    -->
                    全选1/1
                </p>
                <div class="price">
                    <p>商品金额：<span class="font-green">￥<?=$cloth?$cloth->price*$num:'0'?></span></p>
                    <hr>
                    <p>总金额(不含运费)：<span class="font-green">￥<?=$cloth?$cloth->price*$num:'0'?></span></p>
                </div>
            </div>
            <div class="submit-control clearfix">
                <p>请在<span class="font-green">20分</span>内提交订单
                <button type="submit">订单结算</button></p>
            </div>
</form>
    </div>
     <?php 
        $this->load->view('footer');
     ?>
    
</body>
<script>
    jQuery(function($){
        (function(){
            $('.opt-delete').on('click',function(){
                $(this).parentsUntil('.item').remove();
                location.href='<?=site_url()?>/apply/apply1?cloth_id=0';
            });
        })();
        (function(){
            $('.des').on('click',function(e){
                e.preventDefault();
                var val=parseInt($('.item-num-value').val());
                if(val>1){
                    $('.item-num-value').val(val-1);
                    var price=parseInt($('.item-price span').text());
                    $('.item-tprice span').text(price*(val-1));
                    $('.price p span').text('￥ '+price*(val-1));
                }
            });
            $('.add').on('click',function(e){
                e.preventDefault();
                var val=parseInt($('.item-num-value').val());
                $('.item-num-value').val(val+1);
                var price=parseInt($('.item-price span').text());
                $('.item-tprice span').text(price*(val+1));
                $('.price p span').text('￥ '+price*(val+1));
            });
        })();
    });
</script>
</html>