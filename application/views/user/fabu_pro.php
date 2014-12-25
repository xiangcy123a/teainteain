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
        a:hover{
          color: inherit;
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


        

        
        
    </style>
    <script src="<?=base_url()?>static/common/js/jquery.min.js"></script>
    <script src="<?=base_url()?>static/bootstrap3/js/bootstrap.min.js"></script>
</head>
<body>
   <table>
       <tr>
           <th style="width:70%;">产品名称</th>
           <th>状态</th>
           <th>操作</th>
       </tr>
       <?php if($cloth):?>
        <?php foreach($cloth as  $key=>$val):?>
         <tr>
             <td class="font-yellow"><a  class="font-yellow" href="<?=site_url().'/index/more_info?cloth_id='.$val->cloth_id?>" target="_blank"><?=$val?$val->title:''?></a></td>
             <td><?=$val?$val->status:''?></td>
             <td class="font-yellow"><a  class="font-yellow" href="<?=site_url().'/index/more_info?cloth_id='.$val->cloth_id?>" target="_blank">查看状态</a></td>
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