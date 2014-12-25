<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TEAIN</title>
  <link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
  <script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.js"></script>
  <style>
    header{
        background: rgb(232,232,232);
        height: 200px;
    }
    .manage{
        width: 300px;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }
    .manage  img{
       margin-top: 30px;
       margin-bottom: 10px;
       width: 280px;

    }
    .manage p{
      margin-top: 20px;
      font-size: 12px;
    }
    .manage ul{
      padding-left: 0px;
    }
    .manage ul li{
      list-style: none;
      list-style-type: none;
      border:1px solid #ccc;
      color: #ccc;
      cursor: pointer;
      width: 300px;
      padding-top: 10px;
      padding-bottom: 10px;
      margin-bottom: 10px;
    }
    .manage ul li:hover{
      border:1px solid #218964;
      color: #218964;
    }
    .manage a{
      display: block;
      margin-top: 10px;
      margin-bottom: 20px;
      color: #218964;
      letter-spacing: 3px;
      text-decoration: none;
    }
    
    

  </style>
</head>
<body>
    <header>
        
    </header>
    <section class="container">
        <div class="manage">
            <img style="" src="<?=base_url()?>/static/login/images/login.jpg" alt="">
            <p>请选择需要进入的板块</p>
            <ul>
              <li>项目管理</li>
              <li>订单管理</li>
              <li>人员管理</li>
              <li>界面管理</li>
              <li>图片管理</li>
            </ul>
            <a href="<?=site_url('login/logout')?>">注销</a>
        </div>
    </section>
</body>
<script>
  
</script>
</html>
