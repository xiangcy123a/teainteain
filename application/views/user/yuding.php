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
        .font-yellow{
            color: rgb(240,190,63);
        }
        body{
            /*padding-left: 30px;*/
            color:#666;
        }
        *{
            font-family: '微软雅黑';
            margin: 0px;
            padding: 0px;
        }
        a{
            color: #333;
        }
        ul,li{
            list-style:none;
            margin: 0px;
            padding: 0px;
        }
        table{
            width: 100%;
        }
        table tr{
            border-bottom: 1px solid #ddd;
        }
        table tr th{
            background: #eee;
            padding-left: 20px;
            height: 50px;
        }
        table tr td{
            padding-left: 20px;
            height: 60px;
        }
        .order-manage{
          border:none;
          outline: none;
          background: rgb(47,213,173);
          color: #fff;
          padding:3px 8px;
          border-radius: 5px;
        }

        
    </style>
    <script src="<?=base_url()?>static/common/js/jquery.min.js"></script>
    <script src="<?=base_url()?>static/bootstrap3/js/bootstrap.min.js"></script>
</head>
<body>
   <table>
       <tr>
           <th style="width:40%;">订单内容</th>
           <th>金额</th>
           <th>支付时间</th>
           <th>发货时间</th>
           <th>状态</th>
           <th>操作</th>
       </tr>
       <?php if($orders):?>
        <?php foreach($orders as $val):?>
           <tr>
               <td class="font-yellow"><img src="<?=base_url().$val->img_src?>" width="60" height="30" alt=""> <?=$val?$val->title:''?></td>
               <td>￥<?=$val?$val->price:''?></td>
               <td class="font-gray">2014-10-28 14:35</td>
               <td class="font-gray"><?=$val?$val->trans_time:''?> 预计</td>
               <td><?=$val?$val->status:'未知'?></td>
               <td class="font-yellow">再次催单</td>
           </tr>
       <?php endforeach;?>
       <?php endif;?>
        
       
   </table>


    
</body>
<script>
    jQuery(function($){
       

    });
</script>
</html>