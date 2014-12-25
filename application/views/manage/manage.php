<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TEAIN</title>
  <link href="<?=base_url()?>static/bootstrap3/css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <script src="<?=base_url().'static/common/js/jquery.min.js'?>"></script>
  <link rel="stylesheet" href="<?=base_url().'static/manage/css/index.css'?>">
</head>
<body>
  <header class="container">
    <h2>项目管理</h2>
    <a href="./logo.php">注销</a>
  </header>

  <section class="container">
    <div class="nav">
      <ul class="clearfix">
        <li class="active" data-togo="project">项目管理</li>
        <li data-togo="goods">订单管理</li>
        <li data-togo="user">人员管理</li>
        <li data-togo="ui">界面管理</li>
        <li data-togo="image">图片管理</li>
      </ul>
    </div>
    <div id="url">

      
    </div>
  </section>
</body>
<script>
  jQuery(function($){
    $('#url').load("<?=site_url('manage/project')?>");
    //加载页面
    $('.nav li').on('click',function(e){
      if(!$(this).hasClass('active')){
        $(this).siblings('li').removeClass('active').end().addClass('active');
        var url=$(this).attr('data-togo');
        $('#url').load("<?=site_url('manage/"+url+"')?>");
      }
    });

    

  });


</script>
</html>
