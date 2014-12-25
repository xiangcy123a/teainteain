 <?php 
    $this->load->view('common_header');

   ?>
    <style>
        body{
            font-family: '微软雅黑';
        }
        ul,li{
            list-style-type: none;
        }
        hr{
            margin-top: 0px;
            margin-bottom: 0px;
        }
        .font-yellow{
            color: rgb(244,190,63);
        }
        .status{
            margin-top: 20px;
            margin-bottom: 20px;
            background: rgb(242,241,229);

        }
        .status li{
            width: 20%;
            
            height: 35px;
            float: left;
            text-align: center;
            line-height: 35px;
            color: white;
            font-weight: 700;
        }
        .status li:nth-child(1){
            width: 20%;
        }
        .status li.active{
            background: rgb(244,190,63);
        }
        .status li.back{
            text-align: center;
            padding-left: 110px;
            
        }
        .status li.back a{
            color: rgb(244,190,63);
        }


        .left{
             border:2px solid rgb(225,225,225);
             /*height: 200px;*/
             margin-bottom: 20px;
             margin-left: 10px;
             margin-right: 10px;
             text-align: center;

        }
        .left img{
            display:  inline-block;
        }
        .left .btn.active{
            background: #fff;
            outline: none;
            box-shadow: none;
            border:none;
        }

        .right{
            border :2px solid #ddd;
            /*height: 500px;*/
            padding:15px 20px;
            margin-bottom: 20px;
        }
        .right:hover{
          border: 2px solid rgb(244,190,63);
        }

        .right .btn{
          width: 100%;
          color: white;
          font-weight: bolder;
          background:rgb(244,190,63);
          margin-top: 10px;


        }

    </style>

</head>
<body>
    <?php 
        $this->load->view('header');
     ?>
    
    <div class="container">
        <ul class="status clearfix">
            <li>1.建立项目</li>
            <li>2.众筹目标</li>
            <li>3.文字描述</li>
            <li class="active">4.发起成功</li>
            <li class="back"><a href="#">返回</a></li>
        </ul>

        <div class="row">
            <div class="col-md-6 clearfix">
                <div class="left clearfix">
                     <?php foreach($imgs as $key1=>$val1):?>
                      <img class="scroll-img" style="<?=$key1!=0?'display:none;':''?>" src="<?=base_url().$val1?>" width="80%" height="400" alt="" />
                    <?php endforeach;?>
                    <!-- <img src="" width="80%" height="400" alt=""> -->
                    <div class="btn-group btn-group-justified">
                    <?php foreach($imgs as $key=>$val):?>
                      <div class="btn-group">
                        <button type="button" class=" btn <?=$key==0?'active':''?>  btn-default"><?=$key+1?></button>
                      </div>
                    <?php endforeach;?>
                    </div>

                </div>
            </div>
             <div class="col-md-6">
                <div class="right">
                   <p class="font-yellow">创建连接</p>
                   tea-in.net/ <input type="text" style="width:200px;" placeholder="输入方便记忆的连接" class=""/>
                   <p class="" style="color:#bbb;">创建链接分享给你的产品积累人气吧!</p>
                   <p class="font-yellow">发货选项</p>
                   <label for="loc">
                     <input id="loc" name="loc" type="checkbox">允许购买者从您手中提取T恤
                   </label>
                   
                   <hr style="border:1px solid rgb(244,190,63);margin:10px 0px;">
                    
                    <div class="loc" style="display:none;">
                        <p style="color:#bbb;">您的地址(购买者将根据您输入的地址前来提货)</p>
                        <select name="" id="">
                            <option value="浙江省">浙江省</option>
                        </select>--
                         <select name="" id="">
                            <option value="杭州市">杭州市</option>
                        </select>--
                         <select name="" id="">
                            <option value="县">县</option>
                        </select>--
                         <select name="" id="">
                            <option value="街道">街道</option>
                        </select>
                        <br><br>
                        <input type="text" placeholder="邮编" />
                        <input type="text" placeholder="姓名" />
                        <br><br>
                        <textarea name="" placeholder="大于5个字符" id="" cols="70" rows="4"></textarea>
                        <p style="color:#bbb;">购买者在选择发货时可以选择从您中提取到物到货</p>
                        <hr style="border:1px solid rgb(244,190,63);margin:10px 0px;">
                   
                    </div>


                   <input type="checkbox" />我已经阅读并同意了<a href="#" class="font-yellow">服务条款，</a>我保证所使用的图片都为纯原创，不涉及第三方版权.
                   
                   <button class="btn">发起成功</button>
                </div>
            </div>
        </div>
        
       



    </div>



     <?php 
        $this->load->view('footer');
     ?>
    



</body>
<script>
    jQuery(function($){
        $('.left .btn').on('click',function(){
            if(!$(this).hasClass('acitve')){
                var index=$(this).parent().index();
                $(this).addClass('active').parent().siblings('.btn-group').find('.btn').removeClass('active');
                $('.scroll-img').hide();
               // alert(index);
                $('.scroll-img').eq(index).show();
            }
        });
        $('input[name=loc]').on('click',function(){
            var bool=$(this).prop('checked');
            if(bool){
                $('.loc').show();
            }else{
                $('.loc').hide();
            }
            

        });
    });
</script>
</html>