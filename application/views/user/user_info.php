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
        label{
            display: block;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        label span{
            display: inline-block;
            width: 80px;
        }
        textarea{
            vertical-align: top;
        }
        select{
            width: 80px;
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
        #save-ok{
            /*width: 240px;*/
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
     <script src="<?=base_url()?>static/common/js/area.js"></script>
    
</head>
<body>
    <form action="<?=site_url()?>/user/save_user_info" method="post">
        <label for="username">
            <span>显示昵称:</span><input type="text" value="<?=$user?$user->nickname:''?>" id="username" name="nickname">
        </label>
        <label for="signature">
            <span>个性签名:</span><textarea  name="smtalk" id="signature" placeholder="输入自我介绍" cols="60" rows="5"><?=$user?$user->smtalk:''?></textarea>
        </label>
        <label for="">
            <span>所在地:</span>
            <select id="s_province" name="s_province">
                <!-- <option value="<?=$user?$user->smtalk:''?>"><?=$user?$user->provin:''?></option> -->
            </select>  
            <select id="s_city" name="s_city" >
                 <!-- <option value="<?=$user?$user->city:''?>"><?=$user?$user->city:''?></option> -->
            </select>  
            <select id="s_county" name="s_county">
                 <!-- <option value="<?=$user?$user->distinc:''?>"><?=$user?$user->distinc:''?></option> -->
            </select>
        </label>
        <label for="phone">
            <span>手机:</span><input  value="<?=$user?$user->phone:''?>"  type="text" id="phone" name="phone">
        </label>
        <label for="qq">
            <span>QQ:</span><input type="text" id="qq"  value="<?=$user?$user->QQ:''?>"  name="QQ">
        </label>
        <label for="save">
            <span></span><button type="submit" class="save" id="save">保存最新设置</button>
        </label>
    </form>

<div class="modal fade"  id="save-ok" data-backdrop="static">
    <div class="modal-dialog save-ok ">
        <p style="color:#000;">保存成功！</p>
        <button type="button" class="btn save-sure" data-dismiss="modal">确定</button>
        
       
    </div>
</div>
</body>
<script>
    jQuery(function($){
       _init_area();

       (function(){
        $('form').on('submit',function(e){
            e.preventDefault();
            var url=$(this).attr('action');
            var val=$(this).serialize();
            $.ajax({
                'url':url,
                'type':'post',
                'dataType':'json',
                'data':val,
                'success':function(data){
                    if(data){
                        //$('#save-ok').show();
                        $('#save-ok').modal('show');

                    }
                }
            });
        });
       })();


       (function(){
            $('.save-sure').on('click',function(){
                window.parent.location.reload();
            });
       })();
    });
</script>
</html>