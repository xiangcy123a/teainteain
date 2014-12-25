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
            padding-left: 30px;
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

        input,textarea{
            outline: none;
            border-radius: 3px;
            border:1px solid #ddd;
            box-shadow: 0 1px 3px #ddd;
            padding:2px;

        }
        input{
            width: 200px;
            padding-left: 3px;
            padding-top: 1px;
            padding-bottom: 1px;
        }
        label{
            display: block;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        label span{
            display: inline-block;
            width: 80px;
        }
        label span.reset{
            color:rgb(240,190,63);
            cursor: pointer;
            display: inline-block;
            width: 100px;
        }
        button.save {
            border-radius: 4px;
            color: #fff;
            padding:5px 12px;
            background:rgb(240,190,63);
            outline: none;
            border:none;
            letter-spacing: 3px;
        }

        #usercount{
            width: 250px;
        }



        .save-ok{
            padding-top: 10px;
            padding-bottom: 10px;
            font-size: 1.1em;
            background: #fff;
            width: 240px;
            border-radius: 5px;
            margin-top: 100px !important;

        }
        .save-sure{
            color: white;
            background:rgb(47,213,173);
            border:none;
            padding:3px 20px;
            margin-top: 5px;
            margin-bottom: 5px;
        }
        .save-sure:hover{
            background:rgb(47,213,173);
            color: white;

        }

        

        
        
    </style>
    <script src="<?=base_url()?>static/common/js/jquery.min.js"></script>
    <script src="<?=base_url()?>static/bootstrap3/js/bootstrap.min.js"></script>
</head>
<body>
    <form action="" id="reset-password">
        <label for="usercount">
            <span>用户账号:</span><input type="text" id="usercount" name="usercount" value="<?=$this->session->userdata('username')?>" readonly="readonly" />
        </label>
        <label for="">
            <span>我的密码:</span><span class="reset">重设我的密码</span>
        </label>
        <div class="update-password hide">
            <label for="oldpassword">
                <span>原密码:</span><input type="password" id="oldpassword" name="oldpassword">
            </label>
            <label for="newpassword">
                <span>新密码:</span><input type="password" id="newpassword" name="newpassword">
            </label>
            <label for="repassword">
                <span>密码确认:</span><input type="password" id="renewpassword" name="renewpassword">
            </label>
             <label for="save">
                <span></span><button class="save" id="save">保存最新设置</button>
            </label>
        </div>
        

       
    </form>

<div class="modal fade"  id="save-ok" data-backdrop="static">
    <div class="modal-dialog save-ok ">
        <p style="color:#000;" class="text">保存成功！</p>
        <button type="button" class="btn save-sure" data-dismiss="modal">确定</button>
        
       
    </div>
</div>
    
</body>
<script>
    jQuery(function($){
       $('.reset').on('click',function(){
        if($('.update-password').hasClass('hide')){

        }
        $('.update-password').toggleClass('hide');
       });

       (function(){
        $('form#reset-password').submit(function(e){
            e.preventDefault();
            var oldpassword=$('#oldpassword').val();
            var newpassword=$('#newpassword').val();
            var renewpassword=$('#renewpassword').val();
            if(oldpassword&&newpassword&&renewpassword){
                if(newpassword!=renewpassword){
                    //alert('新密码必须和确认密码相等');
                    $('#save-ok').find('.text').text('新密码必须和确认密码相等');
                    $('#save-ok').modal('show');
                    return;
                }
                var site_url='<?=site_url()?>';
                $.ajax({
                    'url':site_url+'/user/do_update_password',
                    'type':'post',
                    'dataType':'json',
                    'data':{'oldpassword':oldpassword,'newpassword':newpassword},
                    'success':function(data){
                        if(data.flag){
                            //alert('修改密码成功!');
                            $('#save-ok').find('.text').text('修改密码成功!');
                            $('#save-ok').modal('show');
                            setTimeout(function(){location.reload();},1500);
                        }else{
                            //alert(data.msg);
                            $('#save-ok').find('.text').text(data.msg+'!');
                            $('#save-ok').modal('show');
                        }
                    }
                });
            }else{
                $('#save-ok').find('.text').text('不能为空!');
                $('#save-ok').modal('show');
                return;
            }
        });
       })();

        (function(){
            $('.save-sure').on('click',function(){
               $('#save-ok').modal('hide');
            });
       })();

    });
</script>
</html>