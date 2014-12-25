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


        .content{
            border:1px solid #ddd;
            margin-bottom: 50px;
            padding-bottom: 30px;
        }
        .content h1{
            text-align: center;
            color: rgb(0,134,118);
            margin-top: 20px;
            margin-bottom: 30px;
        }
        .content .total_price{
            text-align: center;
            font-size: 1.1em;
            letter-spacing: 4px;
        }
        .content .total_price span{
            color: #2ed4ac;
            font-weight: 700;
        }
        .content .order-item{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
            /*border:1px solid #ddd;*/
            margin-top: 40px;
        }
        .content .order-item p{
            background: rgb(227,255,230);
            height: 30px;
            line-height: 30px;
            color: #000;
            font-weight: bolder;
        }
        .content .order-item p span{
            color: rgb(0,134,118);

        }
        .content .order-item .table td{
            border:none;
            padding-top: 3px;
            padding-bottom: 3px;
        }

        .go{
            margin-top: 30px;
        }
        .go .submit{
            border-radius: 5px;
            color: white;
            background: #2ed4ac;
            border:none;
            font-size: 1.1em;
            padding:8px 10px;
            letter-spacing: 3px;

        }
        .go a{
            /*line-height: 30px;*/
            display: inline-block;
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
            <li>2.确认订单信息</li>
            <li class="active">3.成果提交订单</li>
        </ul>

        <div class="kefu clearfix">
            <p class="left"><span></span>如果您对订单信息或我们的服务有任何疑问，请联系客服邮箱</p>
            <p class="right">100%正品保证</p>
            <p class="right">七天无理由退货</p>
        </div>

        <div class="content">
            <h1>支付成功！</h1>
            <p class="total_price">共计支付金额 <span>￥233</span> 元</p>
            <div class="order-item">
                <p>以下1个订单已经支付成功  <span>共计￥98.90元</span></p>
                <table class="table">
                    <tr>
                        <td>
                            订单号：
                        </td>
                        <td>
                            15806990
                        </td>
                        <td>
                            在线支付：
                        </td>
                        <td>
                            ￥98.90元
                        </td>
                    </tr>
                    <tr>
                        <td>
                            订单号：
                        </td>
                        <td>
                            15806990
                        </td>
                        <td>
                            在线支付：
                        </td>
                        <td>
                            ￥98.90元
                        </td>
                    </tr>
                </table>
            </div>
            
            <div class="go" style="margin-left:auto;margin-right:auto;text-align: center;">
                <button class="submit" type="submit">继续购物</button><a href="#">查看订单详情》</a>
            </div>
            
        </div>





    </div>



     <?php 
        $this->load->view('footer');
     ?>
    



</body>
<script>
    
</script>
</html>