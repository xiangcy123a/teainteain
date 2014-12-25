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

        .content{
            margin-bottom: 50px;
        }
        .content .list{
            width: 70%;
            border-right: 2px solid #ddd;
            float: left;
        }
         .list .item{
           width: 25%;
            display: inline-block;
            margin-left: 20px;
            margin-right: 20px;

         }
         .item .name{
            font-size: 2.2em;
            font-weight: bolder;
            color: rgb(47,213,173);
            
         }
         .upload{
            color: white;
            background:rgba(0,0,0,0.8);
            padding:4px 30px;
            border-radius: 5px;
            border:none;
            cursor: pointer;
            display: inline-block;
            position: relative;
         }
         .item .img {
            margin-top: 10px;
         }
         .item .pro{
            height: 7px;
            background: #ddd;
            width: 80%;
            margin-bottom: 20px;
         }

         .item .pro .pval{
            width: 80%;
            height: 7px;
            background: rgba(0,0,0,0.8);
         }
         .item .next{
            color: white;
            font-size: 1.5em;
            padding:7px 40px;
            border-radius: 8px;
            border:none;
            background: rgb(47,213,173);
         }
         .detail{
            font-size: 0.9em;
         }
         .weiyi .name{
            color: rgb(244,190,63);
         }
         .weiyi .next{
            background: rgb(244,190,63);
         }

         .phone .name{
            color: #f2355d;
         }
         .phone .next{
            background: #f2355d;
         }

        .content .sidebar{
            width: 30%;
            float: right;
            padding-left: 20px;
            padding-right: 20px;
        }
        .sidebar .title{
            font-weight: bolder;
            font-size: 1.5em;
            color: rgb(11,81,130);

        }
        .sidebar ul{
            margin-top: 20px;
        }
        .sidebar ul li{
            float: left;
            margin-left: 5px;
            margin-right: 5px;
            margin-bottom: 10px;
        }
        .sidebar .next{
            border:none;
            padding:8px 50px;
            background: rgb(11,81,130);
            color: white;
            font-size: 1.5em;
            border-radius: 8px;
        }
        .sidebar .detail{
            margin-top: 8px;
            margin-bottom: 8px;
        }
        
        
    
    </style>
</head>
<body>
    <?php 
        $this->load->view('header');
     ?>
    
    <div class="container">
        <ul class="status clearfix">
            <li class="active">1.建立项目</li>
            <li>2.众筹目标</li>
            <li>3.文字描述</li>
            <li>4.发起成功</li>
            <li class="back"><a href="#">返回</a></li>
        </ul>
        
        <div class="content clearfix">
            <div class="list ">
                <div class="item">
                    <p class="name">T恤</p>
                    <p class="detail">
                      上传印在T恤上的图案  
                    </p>
                    <button class="upload">上传图案</button>
                    <div class="img">
                        <img src="" width="80%" height="80" alt="">
                    </div>
                    <div class="pro">
                        <div class="pval"></div>
                    </div>
                    <p class="detail">上传上传上传上传上传上传</p>
                    <p class="detail">上传上传上传上传上传上传上传上传</p>
                    <p class="detail">上传上传上传上传上传上传上传上传上传上传</p>
                    <button class="next">
                        下一步
                    </button>
                </div>
                <div class="item weiyi">
                    <p class="name">T恤</p>
                    <p class="detail">
                      上传印在T恤上的图案  
                    </p>
                    <button class="upload">上传图案</button>
                    <div class="img">
                        <img src="" width="80%" height="80" alt="">
                    </div>
                    <div class="pro">
                        <div class="pval"></div>
                    </div>
                    <p class="detail">上传上传上传上传上传上传</p>
                    <p class="detail">上传上传上传上传上传上传上传上传</p>
                    <p class="detail">上传上传上传上传上传上传上传上传上传上传</p>
                    <button class="next">
                        下一步
                    </button>
                </div>
                <div class="item phone">
                    <p class="name">T恤</p>
                    <p class="detail">
                      上传印在T恤上的图案  
                    </p>
                    <button class="upload">上传图案</button>
                    <div class="img">
                        <img src="" width="80%" height="80" alt="">
                    </div>
                    <div class="pro">
                        <div class="pval"></div>
                    </div>
                    <p class="detail">上传上传上传上传上传上传</p>
                    <p class="detail">上传上传上传上传上传上传上传上传</p>
                    <p class="detail">上传上传上传上传上传上传上传上传上传上传</p>
                    <button class="next">
                        下一步
                    </button>
                </div>
            </div>
            <div class="sidebar">
                <p class="title">我已拥有实体产品</p>
                <p class="detail">若您是商家或产品团队，拥有自己的实体产品，请直接上传实物图片</p>
                <form action="<?=site_url()?>/index/zhongchoumubiao" enctype="multipart/form-data" method="post">
                    <div class="upload"><input required multiple="multiple" onchange="fileSelected();" style="position:absolute;width:0px;height:0px;z-index: 1;left: 0px;" name="file[]" id="fileToUpload" type="file" accept="image/jpg" />上传图片</div>
                    <span style="font-size:12px;">最多4张</span>
                    <ul class="clearfix" id="messages">

                       <!--  <li><img src="#" width="90" height="80" alt="">
                        </li>
                        <li><img src="#" width="90" height="80" alt=""></li>
                        <li><img src="#" width="90" height="80" alt=""></li>
                        <li><img src="#" width="90" height="80" alt=""></li> -->
                    </ul>
                    <p class="detail">有自己的实体产品，</p>
                    <p class="detail">有自己的实体产品，</p>
                    <button class="next" type="submit">下一步</button>
                </form>

            </div>
        </div>




    </div>



     <?php 
        $this->load->view('footer');
     ?>
    



</body>
<script>
    if(!is_login){
         $('#login').modal('show');
         
    }
    var file;  
    function fileSelected() {     
        //当选择文件时先清空原有的div中，此方法是加载文件信息与进度条问题关键    
        //$("#messages").text("");        
        //获取文件集合            
        var file = document.getElementById('fileToUpload').files;  
        //获取文件各数            
        var fileNum = document.getElementById("fileToUpload").files.length;
        if(fileNum!=4){
            alert('必须上传四张图片！');
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
                    if(!$('#messages li')||$('#messages li').size()<4){
                        $("#messages").append(imgStr); 
                    }
                    
                    else{
                        alert('only 4');
                    } 

                };                
                reader.readAsDataURL(file);   
                
                        
            }  
        }       

        jQuery(function(){
            $('form').on('submit',function(e){
                if(!is_login){
                    $('#login').modal('show');
                    e.preventDefault();
                }
            });
        });   
</script>
</html>