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

<div class="modal hide" id="login">
  <div class="modal-header">
    <a href="#"></a>
    <h4>用户登录</h4>
  </div>
</div>
<nav class="navbar clearfix">
        <div class="container">
            <div class="navbar-header">
                <a href="<?=site_url()?>/index/home"><img src="<?=base_url()?>static/index/images/logo.jpg" alt="">
                </a>
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse1">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
            </div>

            
            <div id="collapse1" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?=site_url()?>/index/faqi"> 发起项目</a></li>
                    <li><a href="<?=site_url()?>/index/all_list"> 校园潮品</a></li>
                    <li><a href="bottom1"> 新手帮助</a></li>
                </ul>
                <ul class="nav navbar-nav pull-right">
                    <li><a href="#reg" data-toggle="modal">注册</a></li>
                    <li class="login"><a href="#login" data-toggle="modal" > 登录</a></li>
                </ul>
            </div>
        </div>
    </nav> 
    <ul class="colorline1">
        <li class="line-green"></li>   
        <li class="line-yellow"></li>
        <li class="line-red"></li>
        <li class="line-blue"></li>
    </ul>
    
    <div class="container">
       
        <div class="img">
            <img src="" width="400" height="300" alt=""><br>
            您可以单击<a href="#">返回上级页面</a>或<a href="#">进入首页</a>
        </div>


    </div>


<footer class="hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-offset-1">
                    <img class="pull-right" src="<?=base_url()?>static/index/images/teain3.jpg" alt=""/>
                </div>
                <div class="col-md-1 footer-list">
                    <p class="list-header">服务承诺</p>
                    <a href="bottom1"><p class="list-item">品质保证</p></a>
                    <a href="bottom1"><p class="list-item">退货政策</p></a>
                    <a href="bottom1"><p class="list-item">退货办理</p></a>
                </div>
                <div class="col-md-1 footer-list">
                    <p class="list-header">帮助指南</p>
                    <a href="bottom2"><p class="list-item">发起项目</p></a>
                    <a href="bottom2"><p class="list-item">支持项目</p></a>
                    <a href="bottom2"><p class="list-item">常见问题</p></a>
                </div>
                <div class="col-md-1 footer-list">
                    <p class="list-header">条款说明</p>
                    <a href="bottom3"><p class="list-item">版权说明</p></a>
                    <a href="bottom3"><p class="list-item">隐私声明</p></a>
                    <a href="bottom3"><p class="list-item">服务条款</p></a>
                </div>
                <div class="col-md-1 footer-list">
                    <p class="list-header">支付配送</p>
                    <a href="bottom4"><p class="list-item">支付方式</p></a>
                    <a href="bottom4"><p class="list-item">配送说明</p></a>
                   
                </div>
                <div class="col-md-1 footer-list">
                    <p class="list-header">关于我们</p>
                    <a href="bottom5"><p class="list-item">团队介绍</p></a>
                    <a href="bottom5"><p class="list-item">联系我们</p></a>
                   
                </div>
                <div class="col-md-1 footer-list">
                   <img width="100%" src="<?=base_url()?>static/index/images/tdc.jpg" />
                </div>
            </div>
            
            
        </div>
        <p class="copy">
                版权所有&copy;2014-2017杭州缇音网络科技有限公司  浙ICP备14020563号
        </p>
    </footer>
    



</body>
<script>
    
</script>
</html>