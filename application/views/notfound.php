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
        .container .img{
            text-align: center;
            margin-top: 60px;
            margin-bottom: 50px;
        }
        .img {
            font-size: 16px;

        }
        .img a{
            color:rgb(47,213,173);
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
       
        <div class="img">
            <img src="" width="400" height="300" alt=""><br>
            您可以单击<a href="#">返回上级页面</a>或<a href="#">进入首页</a>
        </div>


    </div>



     <?php 
        $this->load->view('footer');
     ?>
    



</body>
<script>
    
</script>
</html>