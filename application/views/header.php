 <!--start-->
            <div class="modal fade" id="login">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button class="close" data-dismiss="modal">&times;</button>          
                    </div>
                    <div class="modal-body">
                      <h4 class="color-black text-center" style="font-weight:700;margin-bottom:20px;">登录TEAIN页面</h4>
                      <form method="post" action="<?=site_url().'/flogin/do_login'?>">
                        <div class="input-group">
                          <input type="text" name="email"  rel="tooltip"  class="username form-control" placeholder="电子邮件地址">
                        </div>
                        <div class="input-group">
                          <input type="password" name="password"   class="passwd form-control" placeholder="密码">
                        </div>
                        <div class="input-group">
                            <input placeholder="验证码" type="text" name="validate_code" class="code form-control" >

                           <!--  <img src="" style="float:left;margin-left:10px;" height="34" width="50" alt="">
                            -->
                            <img src="#" class="code_img" style="float:left;margin-left:10px;" height="34" width="60" alt="">
                            <script>
                              jQuery(function($){
                                var base_url='<?=base_url()?>';
                                var site_url='<?=site_url()?>';
                                $.ajax({
                                  'url':site_url+'/flogin/code',
                                  'type':'get',
                                  'dataType':'json',
                                  success:function(data){
                                   $('.code_img').attr('src',base_url+'captcha/'+data+'?t='+Math.random());
                                  }
                                });
                                $('.unlook').on('click',function(e){
                                  e.preventDefault();
                                  $.ajax({
                                  'url':site_url+'/flogin/code',
                                  'type':'get',
                                  'dataType':'json',
                                  success:function(data){
                                   $('.code_img').attr('src',base_url+'captcha/'+data+'?t='+Math.random());
                                  }
                                });
                                });

                                
                                
                                
                              });
                            </script>
                            

                            <a style="" href="#" class="unlook">看不清?</a>
                        </div>
                        <div class="input-group">
                            <button  class="submit  ">登&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;陆</button>
                        </div>
                      </form>
                        <p style="padding-left: 30px;padding-right: 30px;" class="clearfix" ><a href="#" class="forget">忘记密码</a><a class="create create-btn" href="#">创建账号</a></p>
                        <p style="padding-left: 30px;padding-right: 30px;">
                            登陆网站，表示我接收TEAIN网络平台提供服务的
                            <a href="<?=site_url()?>/index/bottom3" target="_blank" style="text-decoration: underline;color: rgb(47,213,173);" >服务条款</a>和<a target="_blank"  href="<?=site_url()?>/index/bottom3"  style="text-decoration: underline;color: rgb(47,213,173);" >隐私政策</a>
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
                          <input type="text" title="Username" rel="tooltip"  class="username form-control" placeholder="新密码" required/>
                        </div>
                        <div class="input-group">
                          <input type="text" class="password form-control" placeholder="再次输入密码" required/>
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
                          <input type="email"  rel="tooltip"  class="username form-control" name="email" placeholder="电子邮件地址" required/>
                        </div>
                        <div class="input-group">
                          <input type="password" name="password" class="password form-control" placeholder="密码" required/>
                        </div>

                       <p style="padding-left:40px;padding-right: 40px;">
                            继续注册，表示我接受TEAIN众筹网站提供服务的<a  href="<?=site_url()?>/index/bottom3" target="_blank"  class="link">服务条款</a>和<a  href="<?=site_url()?>/index/bottom3" target="_blank"  class="link">隐私政策</a>
                        </p>
                        <div class="input-group">
                            <button  class="submit  ">下&nbsp;&nbsp;一&nbsp;&nbsp;步</button>
                        </div>
                        <p style="padding-left: 30px;padding-right: 30px;">
                            已有账号 , <a href="#" class="exit login-btn">登录</a>
                        </p>
                      </form>
                
                        
                    </div> 
                  </div>
                </div>
            </div>
            <!--end-->

            <!--start-->
            <div class="modal fade" id="regok">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button class="close" data-dismiss="modal">&times;</button>          
                    </div>
                    <div class="modal-body">
                      <h4 class="color-black text-center" style="font-weight:700;margin-bottom:20px;">注册成功</h4>
                     <p>
                         <img src="" width="100" height="120" alt="">
                     </p>
                     <p  style="padding-left:90px;padding-right: 90px;">
                         页面若不能跳转请点击<a href="#" class="exit login-btn">登录</a>
                     </p>
                
                        
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
            <div class="navbar-header" style="text-align: center;">
                <a href="<?=site_url()?>/index/home"><img src="<?=base_url()?>static/index/images/logo.jpg" alt="" height="18px">
                </a>
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse1">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
            </div>

            
            <div id="collapse1" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a class="faqi" href="<?=site_url()?>/index/faqi"> 发起项目</a></li>
                    <li><a href="<?=site_url()?>/index/all_list">最新周边</a></li>
                    <li><a href="bottom1"> 新手帮助</a></li>
                </ul>
                <ul class="nav navbar-nav user-pull-right" >
                <?php if(!$this->session->userdata('is_login')){?>
                  <li><a href="#reg" data-toggle="modal">注册</a></li>
                    <li class="login"><a href="#login" data-toggle="modal" > 登录</a></li>
                <?php }else{ ?>
                 
                    <li><a href="<?=site_url()?>/flogin/logout" >退出</a></li>
                     <li class="login"><a target="_blank" href="<?=site_url()?>/user/index" ><?php echo $this->session->userdata('nickname')&&$this->session->userdata('nickname')!=''?$this->session->userdata('nickname'):$this->session->userdata('username'); ?><img src="" width="20" height="20"/></a></li>
                <?php } ?>
                    
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



<script>
  var is_login="<?php echo $this->session->userdata('is_login');?>";
  jQuery(function($){

    (function(){
      $('.login-btn').on('click',function(e){
        e.preventDefault();
        $('#reg').modal('hide');
        $('#login').modal('show');
      });
      $('.create-btn').on('click',function(e){
        e.preventDefault();
        $('#login').modal('hide');
        $('#reg').modal('show');
      });

      $('.faqi').on('click',function(e){
        
        if(!is_login){
          e.preventDefault();
          $('#login').modal('show');
        }
      });
    })();
    
    $('#login form').submit(function(e){
      e.preventDefault();
      $.ajax({
        'url':'<?=site_url()?>/flogin/do_login',
        'data':$(this).serialize(),
        'type':'post',
        'dataType':'json',
        'success':function(data){
          if(data.flag){
            location.reload();
          }else{
           
              var _this=$('input[name=validate_code]');
              if(data.msg=='validate_code'){
                _this.tooltip({'template':'<div class="tooltip" role="tooltip"><div class="tooltip-arrow my-arrow"></div><div  class="tooltip-inner my-tooltip-inner"></div></div>','title':'验证码,请重新输入'});
                _this.tooltip('show');
              }else{
                _this.tooltip('hide');
                _this.tooltip('destroy');
              }
          }
        }

      });
    });

    (function(){
      $('#login input[name=email]').on('blur',function(){
        var site_url='<?=site_url()?>';
        var _this=$(this);
        $.ajax({
          'url':site_url+'/flogin/check_username',
          'type':'post',
          'data':{'email':_this.val()},
          'dataType':'json',
          'success':function(data){
            if(!data){
              _this.tooltip({'template':'<div class="tooltip" role="tooltip"><div class="tooltip-arrow my-arrow"></div><div  class="tooltip-inner my-tooltip-inner"></div></div>','title':'未知账号,请重新输入'});
              _this.tooltip('show');
            }else{
              _this.tooltip('hide');
              _this.tooltip('destroy');
            }
          }
        });
      });


      $('#login input[name=password]').on('blur',function(){
        var site_url='<?=site_url()?>';
        var _this=$(this);
        $.ajax({
          'url':site_url+'/flogin/check_password',
          'type':'post',
          'data':{'password':_this.val(),'email':$('#login input[name=email]').val()},
          'dataType':'json',
          'success':function(data){
            if(!data){
              _this.tooltip({'template':'<div class="tooltip" role="tooltip"><div class="tooltip-arrow my-arrow"></div><div  class="tooltip-inner my-tooltip-inner"></div></div>','title':'密码错误,请重新输入'});
              _this.tooltip('show');
            }else{
              _this.tooltip('hide');
              _this.tooltip('destroy')
            }
          }
        });
      });
    })();

    (function(){
      $('#reg input[name=email]').on('blur',function(){
        var site_url='<?=site_url()?>';
        var _this=$(this);
        $.ajax({
          'url':site_url+'/flogin/unique_email',
          'type':'post',
          'data':{'email':$('#reg input[name=email]').val()},
          'dataType':'json',
          'success':function(data){
            if(!data){
              _this.tooltip({'template':'<div class="tooltip" role="tooltip"><div class="tooltip-arrow my-arrow"></div><div  class="tooltip-inner my-tooltip-inner"></div></div>','title':'该邮箱已被注册'});
              _this.tooltip('show');
            }else{
              _this.tooltip('hide');
              _this.tooltip('destroy')
            }
          }
        });
      });

      $('#reg form').submit(function(e){
        e.preventDefault();
        $.ajax({
          'url':'<?=site_url()?>/flogin/do_reg',
          'data':$(this).serialize(),
          'type':'post',
          'dataType':'json',
          'success':function(data){
            if(data){
              $('#reg').modal('hide');

              $('#regok').modal('show');
              setTimeout(function(){
                $('#regok').modal('hide');
                $('#login').modal('show');
              },1500);
              
            }else{
              alert('注册失败');   
            }
          }
        });
      });
    })();
  });
</script>



