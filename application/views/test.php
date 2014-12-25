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
    <link rel="stylesheet" href="<?=base_url()?>static/index/css/index.css">

    <script src="<?=base_url()?>static/common/js/jquery.min.js"></script>
    <script src="<?=base_url()?>static/bootstrap3/js/bootstrap.min.js"></script>
    <style>
        *{
            font-family: '微软雅黑';
        }
        .modal{
            text-align: center;
        }
        .modal-content{
            border-radius: 0;
        }
        .color-black{
            color: #000;
        }
        .modal-dialog{
            width:400px;
        }
        #login .modal-header{
            height: 120px;
            background: rgb(47,213,173);
        }
        .input-group{
            width:80%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10px;
            margin-bottom: 10px;

        }
        .username ,.password{
            width:100% !important;
            padding-top: 18px;
            padding-bottom: 18px;
        }
         .code{
            border-radius: 0px;
            width:120px !important;
        }
        .submit{
            color:white;
            font-size: 20px;
            font-weight: bolder;
            background: rgb(47,213,173);
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 110px;
            padding-right: 110px;
            margin-left: auto;
            margin-right: auto;
            border:none;
            border-radius: 6px;

        }
        .forget{
            float: left;
            color: #333;
        }
        .forget:hover{
             color: rgb(47,213,173);
            text-decoration: underline;
        }
        .create{
            float: right;
            color: #333;
        }
        .create:hover{
             color: rgb(47,213,173);
            text-decoration: underline;
        }


         .modal-header{
            height: 120px;
            background: rgb(47,213,173);
        }
        .exit{
            color: rgb(47,213,173);
            text-decoration: underline;
        }
        .link{
            color: rgb(47,213,173);
            text-decoration: underline;
        }
        .unlook{
            vertical-align: -webkit-baseline-middle;text-decoration:underline;margin-left:-50px;color:#000;
        }
        .unlook:hover{
             color: rgb(47,213,173);
            text-decoration: underline;
        }

    </style>
</head>
<body >
   


     <div class="container">
        <a href="#login" data-toggle="modal">点击弹出登陆窗口</a> <br>
        <a href="#reset-password" data-toggle="modal">点击弹出重设密码窗口</a> <br>
        <a href="#reg" data-toggle="modal">点击弹出注册窗口</a> <br>
        <a href="#ok" data-toggle="modal">点击弹密码ok窗口</a> 
        <!--start-->
            <div class="modal fade" id="login">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button class="close" data-dismiss="modal">&times;</button>          
                    </div>
                    <div class="modal-body">
                      <h4 class="color-black text-center" style="font-weight:700;margin-bottom:20px;">登录TEAIN页面</h4>
                      <form>
                        <div class="input-group">
                          <input type="text" title="Username" rel="tooltip"  class="username form-control" placeholder="电子邮件地址">
                        </div>
                        <div class="input-group">
                          <input type="text" class="password form-control" placeholder="密码">
                        </div>
                        <div class="input-group">
                            <input placeholder="验证码" type="text" class="code form-control" ><img src="" style="float:left;margin-left:10px;" height="34" width="50" alt=""><a style="" href="#" class="unlook">看不清?</a>
                        </div>
                        <div class="input-group">
                            <button  class="submit  ">登&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;陆</button>
                        </div>
                      </form>
                        <p style="padding-left: 30px;padding-right: 30px;" class="clearfix" ><a href="#" class="forget">忘记密码</a><a class="create" href="#">创建账号</a></p>
                        <p style="padding-left: 30px;padding-right: 30px;">
                            登陆网站，表示我接收TEAIN网络平台提供服务的
                            <a href="#" style="text-decoration: underline;color: rgb(47,213,173);" >服务条款</a>和<a href="#"  style="text-decoration: underline;color: rgb(47,213,173);" >隐私政策</a>
                        </p>
                    </div> 
                  </div>
                </div>
            </div>
        <!--end-->
        <!--start-->
            <div class="modal fade" id="reset-password">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button class="close" data-dismiss="modal">&times;</button>          
                    </div>
                    <div class="modal-body">
                      <h4 class="color-black text-center" style="font-weight:700;margin-bottom:20px;">重设密码</h4>
                      <form>
                        <div class="input-group">
                          <input type="text" title="Username" rel="tooltip"  class="username form-control" placeholder="新密码">
                        </div>
                        <div class="input-group">
                          <input type="text" class="password form-control" placeholder="再次输入密码">
                        </div>

                       <p style="padding-left:80px;padding-right: 80px;">
                            点击下一步账户密码将被修改请务必牢记新密码
                        </p>
                        <div class="input-group">
                            <button  class="submit  ">下&nbsp;&nbsp;一&nbsp;&nbsp;步</button>
                        </div>
                        <p style="padding-left: 30px;padding-right: 30px;">
                            暂不修改，<a href="#" class="exit">退出</a>
                        </p>
                      </form>
                
                        
                    </div> 
                  </div>
                </div>
            </div>
            <!--end-->

            <!--start-->
            <div class="modal fade" id="reg">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button class="close" data-dismiss="modal">&times;</button>          
                    </div>
                    <div class="modal-body">
                      <h4 class="color-black text-center" style="font-weight:700;margin-bottom:20px;">注册TEAIN账户</h4>
                      <form>
                        <div class="input-group">
                          <input type="text" title="Username" rel="tooltip"  class="username form-control" placeholder="电子邮件地址">
                        </div>
                        <div class="input-group">
                          <input type="text" class="password form-control" placeholder="密码">
                        </div>

                       <p style="padding-left:40px;padding-right: 40px;">
                            继续注册，表示我接受TEAIN众筹网站提供服务的<a href="#" class="link">服务条款</a>和<a href="#" class="link">隐私政策</a>
                        </p>
                        <div class="input-group">
                            <button  class="submit  ">下&nbsp;&nbsp;一&nbsp;&nbsp;步</button>
                        </div>
                        <p style="padding-left: 30px;padding-right: 30px;">
                            暂不修改，<a href="#" class="exit">退出</a>
                        </p>
                      </form>
                
                        
                    </div> 
                  </div>
                </div>
            </div>
            <!--end-->

            <!--start-->
            <div class="modal fade" id="ok">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button class="close" data-dismiss="modal">&times;</button>          
                    </div>
                    <div class="modal-body">
                      <h4 class="color-black text-center" style="font-weight:700;margin-bottom:20px;">密码已重置</h4>
                     <p>
                         <img src="" width="100" height="120" alt="">
                     </p>
                     <p  style="padding-left:90px;padding-right: 90px;">
                         页面将在3秒后自动跳转若不能跳转请点击<a href="#" class="link">登录</a>
                     </p>
                
                        
                    </div> 
                  </div>
                </div>
            </div>
            <!--end-->

     </div>
    
    
</body>
<script>
    jQuery(function($){
     // $('.username').tooltip();
    });
</script>
</html>