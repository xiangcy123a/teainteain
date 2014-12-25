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
    .login{
        width: 300px;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }
    .login  img{
       margin-top: 30px;
       margin-bottom: 10px;
       width: 280px;

    }
    .login input{
         border:1px solid #ccc;
         outline: none;
         padding:5px;
         color: #333;
         width: 300px;
         height: 40px;
         margin-top: 12px;
         padding-left: 16px;
    }
    .login input.active{
        border:1px solid #218964;
    }
    .login  button{
        background: #218964;
        color: white;
        border:none;
        letter-spacing: 5px;
        font-size: 18px;
        width: 100%;
        margin-top: 20px;
        height: 50px;
        border-radius: 9px;
    }
    .login button:hover{
        background:#156246;
    }
    .login .error{
        color: white;
        background: #e54040;
        padding-top: 5px;
        padding-bottom: 5px;
        font-size: 12px;
        letter-spacing: 2px;
        display: none;
    }

  </style>
</head>
<body>
    <header>
        
    </header>
    <section class="container">
        <div class="login">
          <form action="<?=site_url('login/do_login')?>" method="post">
            <img style="" src="<?=base_url()?>/static/login/images/login.jpg" alt="">
            <div class="error">
                账号或密码错误
            </div>
            <input type="text" placeholder="账号"><br>
            <input type="password" placeholder="密码"><br>
            <button>登陆</button>
          </form>
        </div>
    </section>
</body>
<script>
    jQuery(function(){
        $('input').on('focusin',function(){
            $(this).addClass('active');
        }).on('focusout',function(){
            $(this).removeClass('active');
        });
    });
</script>
</html>
