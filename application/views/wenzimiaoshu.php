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
        input{
            outline: none;
        }
        select:focus,.form-control:focus{
            outline: none;
            box-shadow:inset 0px 0px 0px #fff !important;
            border-color: #ddd;           
            
        }
        .p0{
            padding: 0px;

        }
        .m0{
            margin: 0px;
        }
        .font-size-small{
            font-size: 0.7em;
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
             /*margin-left: 10px;*/
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
            height: 502px;
            border :2px solid #ddd;
        }
        .right:hover{
          border: 2px solid rgb(244,190,63);
        }

        .right .btn{
            width: 100%;
            color:white;
            background:rgb(244,190,63);
            border-radius: 6px;
        }
        .btn-default{
            background: rgb(218,216,201);
            color: #fff;
            border:none;
            border-radius: 0;
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
            <li class="active">3.文字描述</li>
            <li>4.发起成功</li>
            <li class="back"><a href="#">返回</a></li>
        </ul>

        <div class="row" style="margin-right:0px;margin-left: 0px;">
            <div class="col-md-6  p0  clearfix">
                <div class="left clearfix">
                    <?php foreach($imgs as $key1=>$val1):?>
                      <img class="scroll-img" style="<?=$key1!=0?'display:none;':''?>" src="<?=base_url().$val1?>"  width="74.32%" height="466"  alt="" />
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
             <div class="col-md-6   p0  ">
              <form id="form" action="<?=site_url()?>/index/faqiok" >
                <div class="right" style="padding:15px;">
               
                    <input type="hidden" name="price" value="<?=$price?>"/>
                     <input type="hidden" name="amount" value="<?=$amount?>"/>
                    <input type="hidden" name="day" value="<?=$day?>"/>
                   <p class="font-yellow">添加标题</p>
                   <input type="text" required name="title" placeholder="添加标题小于15字" class="form-control">
                   <p class="font-yellow" style="margin-top:10px;">添加正文</p>
                   <textarea name="summary" style="width:100%;margin-bottom:10px;" id="" class="form-control"  rows="3" placeholder="描述你的产品"></textarea>
                   
                

                <div class="row" style="margin:0px;margin-top: 15px;">
                    <div class="col-md-6 p0" style="">
                        <p class="font-yellow ">
                            详细描述长图
                        </p>
                        <p class="font-size-small">
                            通过添加长图来完善你的产品描述。
                        </p>
                        <button class="desc-upload btn btn-default" style="color:white;background:rgb(54,54,54);margin-bottom:10px;">上传产品描述图</button>

                        <input style="visibility: hidden;" type="file" name="desc-upload" id="fileToUpload" onchange="fileSelected();"  accept="image/jpg" >
                        <p class="font-size-small">
                            上传图片请遵从以下标准
                        </p>
                        <p class="font-size-small">
                            尺寸：宽度750px，长度任意，分辨率：72dpi
                        </p>
                        <p class="font-size-small">
                            目前只能上传一张图O(∩_∩)O~
                        </p>
                    </div>
                    <div class="col-md-6  p0" id="messages" style="width:45%;height:197px;border:1px solid #ddd;float:right;">
                        
                    </div>
                </div>
                <button type="submit" style="margin-top:15px;font-size: 16px;padding-top:10px;padding-bottom:10px;" class="btn btn-default">下一步</button>
                   
                </div>
                
                
                
                </form>
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

        (function(){
            $('.desc-upload').on('click',function(){
                $('input[name=desc-upload]').click();
            });
        })();
    });


    var file;  
    function fileSelected() {     
        //当选择文件时先清空原有的div中，此方法是加载文件信息与进度条问题关键    
        //$("#messages").text("");        
        //获取文件集合            
        var file = document.getElementById('fileToUpload').files;  
        //获取文件各数            
        var fileNum = document.getElementById("fileToUpload").files.length;
        if(fileNum!=1){
            alert('只能上传一张图片！');
            return;
            $('#fileToUpload').val('');

        }
        for (var i = 0; i < fileNum; i++) {               
            //读取图片信息                
            showMsg(file[i], i);            
        }        
    }        
        function showMsg(file, i) {          
                
            //图片上传的是图片还是其他            
            if (file.type.indexOf("image") == 0) {                
                         
                var reader = new FileReader();                
                reader.onload = function (e) {                    
                // e.target.result 的返回结果就是本地图片的路径，同时创建进度条和现实信息                    
               // var imgStr = "<img src='" + e.target.result + "' width='200px' height='200'/><br/>";        
                    var imgStr="<li><img src='"+e.target.result+"'' width='90' height='80' alt=''>";
                   
                        $("#messages").append(imgStr); 
                   
                };                
                reader.readAsDataURL(file);   
                
                        
            }  
        }       
</script>
</html>