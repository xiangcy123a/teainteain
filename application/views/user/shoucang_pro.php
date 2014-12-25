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
        .del-collect{
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
           <th style="width:80%;">产品名称</th>
           <th>操作</th>
       </tr>
       <?php if($shoucang):?>
        <?php foreach($shoucang as $key=>$val):?>
       <tr>
           <td class="font-yellow"><a class="font-yellow" target="_blank"  href="<?=site_url().'/index/more_info?cloth_id='.$val->cloth_id?>" ><img src="<?=base_url().$val->img_src?>" width="60" height="30" alt=""> <?=$val?$val->title:''?></a></td>
           <td class="font-yellow"><button data-id="<?=$val->cloth_id?>" class="del-collect">取消收藏</button></td>
       </tr>
     <?php endforeach;?>
     <?php endif;?>
       
      
   </table>


    
</body>
<script>
    jQuery(function($){
      var site_url='<?=site_url()?>';
       (function(){
        
        
        $('.del-collect').on('click',function(){
          var cloth_id=$(this).attr('data-id');
          $.ajax({
            'url':site_url+'/user/del_shoucang',
            'type':'get',
            'dataType':'json',
            'data':{'cloth_id':cloth_id},
            'success':function(data){
              if(data){
                location.reload();
              }else{
                alert('操作失败,请稍后重试!');
              }
            }
          });
        });
       })();

    });
</script>
</html>