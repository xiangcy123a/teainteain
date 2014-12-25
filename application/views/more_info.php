 <?php 
    $this->load->view('common_header');

   ?>
    <style>
        body{
            font-family: '微软雅黑';
        }
        .row{
            padding: 0px ;
            margin: 0px;
        }
        /*.col-md-5,.col-md-7,.col-md-1,.col-md-11{
            padding: 0px;
            margin: 0px;
        } 
        .row .col-md-5 {
         
          height: 100%;
        }
        .row .col-md-5 img{
          height: 100%;
        }*/

        .col-md-6,.col-md-1,.col-md-11{
            padding: 0px;
            margin: 0px;
        }
        .row .col-md-6 {
          /*width: 100%;*/
          height: 100%;
        }
        .col-md-6 .thumb-ul li{
          float: left;
          position: absolute;
          border:1px solid white;
          width: 70px;
          /*height: 70px;*/
          bottom:10px;
          left: 10%;
          cursor: pointer;
          overflow: hidden;
        }
        .col-md-6 .thumb-ul li img{
          height: auto;
          width: 100%;
        }
        .col-md-6 .thumb-ul li:nth-child(1){
          left: 30%;
        }
        .col-md-6 .thumb-ul li:nth-child(2){
          left: 50%;
        }
        .col-md-6 .thumb-ul li:nth-child(3){
          left: 70%;
        }

        
         
        .row .col-md-6 img{
          height: 100%;
        }

       
       .info{
            /*width: 70%;*/
            /*margin: 0 auto;*/
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            /*border-radius: 20px;*/
            /*border:1px solid #ddd;*/
            overflow: hidden;
            margin-top: 40px;
            margin-bottom: 40px;
       }
       .info .info_right{
            background: rgb(253,250,245);
            /*padding-right: 20px;*/
       }
       .info .info_right{
        /*padding-right: 20px;*/
        
       }
       .info .info_right .detail{
        padding:20px;
        padding-top: 0px;
        padding-bottom: 10px;
        position: relative;
       }
       .info .info_right .detail .user-opt{
        position: absolute;
        top:20px;
        right: 20px;
        /*border:1px solid red;*/
        cursor: pointer;
       }
       .info .info_right .detail .user-opt ul li{
          float: left;
          padding-left: 9px;
          padding-right: 9px;

       }
       .info .info_right .detail .user-opt ul li img{
          display: block;
       }

       .info .info_right .detail h1{
            font-size: 1.7em;
            letter-spacing: 4px;
            font-weight: bolder;
            width: 60%;
       }
       .info .info_right .data{
            background: rgb(247,245,238);
            text-align: center;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 20px;
            padding-right: 20px;


       }
       .info .info_right .data .title{
            color: #999;
            text-align: left;
       }
       .info .info_right .data .title.two{
        text-align: center;
       }
       .info .info_right .data .title.three{
          text-align: right;
       }
       .info .info_right .data .con{
            color: #000;
            font-weight: bolder;
            font-size: 1.1em;
             text-align: left;
       }
       .info .info_right .data .con.two{
         text-align: center;
       }
       .info .info_right .data .con.three{
        text-align: right;
       }
       .info .info_right .data .pro{
        background: #fff;
        height: 18px;
        clear: both;
        
        margin: 0 auto;
       }
       .info .info_right .data .pro .pvalue{
        
        height: 100%;
       }
       .info .info_right .data .pro .pvalue.blue{
          background:  #17598b;;
       }
       .info .info_right .data .pro .pvalue.green{
        background: #2ed4ac;
       }
       .info .info_right .data .pro .pvalue.yellow{
        background: #f3bd39;
       }
       .info .info_right .data .pro .pvalue.red{
        background: #f2355d;
       }



       .info .info_right .style{
        padding:20px;
        padding-top: 10px;
       }
       .info .info_right .style .item{
            display: inline-block;
            /*float: left;*/
            line-height: 40px;
       }
       .info .info_right .style .price {
        display: inline-block;
        /*float: left;*/
        /*margin-left: 40px;*/
        font-size: 2em;
       } 
       .info .info_right .style .color{
            width: 40px;
            height: 40px;
            border:1px solid #ddd;
            background: #fff;
            display: block;
            float: left;
            /*margin-left: 45px;*/
            cursor: pointer;

       }
       /*.info .info_right .style .color:hover{
        background: #2ed4ac;
       }*/
       .info .info_right .style .kuanshi{
            /*width: 40px;*/

            height: 40px;
            border:1px solid #ddd;
            background: #fff;
            display: block;
            float: left;
            /*margin-left: 45px;*/
            line-height: 35px;
            text-align: center;
            font-size: 1.1em;
            cursor: pointer;
            /*width: 60px;*/
            overflow: visible;
            margin-bottom: 10px;
            padding-left: 3px;
            padding-right: 3px;

       }
      


       
       .info .info_right .style .size{
            width: 40px;
            height: 40px;
            border:1px solid #ddd;
            background: #fff;
            display: inline-block;
            float: left;
            margin-left: 1.5555555555555%;
            line-height: 35px;
            text-align: center;
            font-size: 1.1em;
            cursor: pointer;
            margin-bottom: 5px;
       }
       .info .info_right .style span.active{
        border:1px solid  #2ed4ac;
       }
       .info .info_right .style .num{
            /*width: 60px;*/
            height: 30px;
            border:1px solid #ccc;
            background: #fff;
            display: block;
            float: left;
            /*margin-left: 45px;*/
            /*line-height: 45px;*/
            text-align: center;
            font-size: 1.1em;
            overflow: hidden;
            margin-top: 5px;
       }
       .info .info_right .style .num .dec{
        display: inline-block;
         font-size: 1.7em;
        text-align: center;
        line-height: 28px;
        padding-left: 10px;
        padding-right: 10px;
        background: #eee;
        color: #333;
        font-weight: bolder;
        border-right: 1px solid #ddd;
       }
       .info .info_right .style .num .dec:hover{
        text-decoration: none;
        color:#333;
       }
       .info .info_right .style .num .inc{
        display: inline-block;
         font-size: 1.5em;
        text-align: center;
        line-height: 28px;
        padding-left: 10px;
        padding-right: 10px;
        background: #eee;
        color: #333;
        font-weight: bolder;
        border-left: 1px solid #ddd;
       }
       .info .info_right .style .num .inc:hover{
        text-decoration: none;
        color:#333;
       }
       .info .info_right .style .num input{
        display: inline-block;
        border:none;
        width: 20px;
        outline: none;
        text-align: center;
       }
       .info .info_right .style .order{
        color:white;
        letter-spacing: 6px;
        border-radius:6px;
        background: #2ed4ac;
        border:none;
        width: 100%;
        margin-left: auto;
        margin-right:auto;
        padding-top: 12px;
        padding-bottom: 12px;
        font-size: 1.5em;
        /*margin-left: 10%;*/
        /*margin-bottom: 20px;*/
       }
       .play {
            background: rgb(253,250,245);
            /*width: 70%;*/
            /*margin: 0 auto;*/
            padding: 20px;
       }

       .play .art{
        padding-left: 25px;
       }
       .play .art h3{
        margin-top: 0px;
        font-weight: bolder;
       }

        .userimg{
            margin-bottom: 40px;
            margin-top: 10px;
            /*width:70%;*/
            margin-left: auto;
            margin-right: auto;
        }


        
    </style>
</head>
<body>
     <?php 
        $this->load->view('header.php');
     ?>
    
    <div class="info container">
        <div class="row clearfix" style="height:627px;">
            <div class="col-md-6 col-xs-12" style="position:relative;">
                <img class="left-bg-img" src="<?=base_url()?>/upload/img/<?=$item->cloth_id?>/1.jpg" width="100%"  alt="">
                <ul class="thumb-ul">
                  <li><img src="<?=base_url()?>/upload/img/<?=$item->cloth_id?>/4.jpg" class="thumb-img" alt=""></li>
                  <li><img src="<?=base_url()?>/upload/img/<?=$item->cloth_id?>/2.jpg" class="thumb-img" alt=""></li>
                  <li><img src="<?=base_url()?>/upload/img/<?=$item->cloth_id?>/3.jpg" class="thumb-img" alt=""></li>
                  <li><img src="<?=base_url()?>/upload/img/<?=$item->cloth_id?>/1.jpg" class="thumb-img" alt=""></li>
                </ul>
               
            </div>
            <div class="col-md-6 col-xs-12 info_right" style="">
                <div class="detail row">
                    <h1><?=$item?$item->title:''?></h1>
                    <p data-id="<?=$item->user_id?>" class="author"></p>
                    <p>
                        <?=$item?$item->summary:''?>
                    </p>

                    <div class="user-opt">
                      <ul>
                        <li><img data-id="<?=$item->cloth_id?>" class="user-zhan" src="<?=base_url()?>/static/common/images/zhan_off.png" alt="">
                        点赞
                        </li>
                        <li>
                          <img class="user-col"  data-id="<?=$item->cloth_id?>"   src="<?=base_url()?>/static/common/images/col_off.png" alt="">收藏
                        </li>
                        <li>
                          <img src="<?=base_url()?>/static/common/images/share.png" alt="">
                          分享
                        </li>
                      </ul>
                      
                      
                      
                    </div>
                </div>
                <div class="row data clearfix">
                    <div class="col-md-4 col-xs-4" style="padding:0px;">
                        <p class="title">已筹集</p>
                        <p class="con"><?=$item?$item->got:'0'?>件</p>
                    </div>
                    <div class="col-md-4  col-xs-4" style="padding:0px;">
                        <p class="title two">目标</p>
                        <p class="con two"><?=$item?$item->amount:'0'?>件</p>
                    </div>
                    <div class="col-md-4  col-xs-4" style="padding:0px;">
                        <p class="title three">剩余</p>
                        <p class="con three"><?=round((strtotime($item->deadline)-time())/3600/24,0)?>天</p>
                    </div>
                    <div class="pro">
                        <div class="pvalue " style="width:<?=(100*$item->got)/$item->amount?>%;">
                        </div>

                    </div>
                </div>

                <div class="style">
                    <div class="clearfix row" style="margin-bottom: 10px;">
                      <div class="col-md-2" style="padding-left: 0px;padding-right: 0px;">
                        <span class="item">售价</span> 
                      </div>
                      <div class="col-md-10" style="margin-left:-3px;text-align:left;padding-left: 0px;padding-right: 0px;">
                          <span  class="price">￥<?=$item?$item->price:'0'?></span>
                      </div>
                        
                    </div>
                    <div class="clearfix row" style="margin-bottom: 10px;">
                      <div class="col-md-2" style="padding-left: 0px;padding-right: 0px;">
                        <span class="item">颜色 </span>
                        </div>
                        <div class="col-md-10" style="text-align:left;padding-left: 0px;padding-right: 0px;">
                        <span class="color"></span>
                        </div>
                    </div>
                      
                    <div class="clearfix row" style="">
                      <div class="col-md-2" style="padding-left: 0px;padding-right: 0px;">
                        <span class="item">款式</span>
                        </div>

                         <div class="col-md-10" style="text-align:left;padding-left: 0px;padding-right: 0px;">
                          <?=($item&&$item->ceto1)?'<span type="text" class="kuanshi"   style="margin-right:6px;">'.$item->ceto1.'</span>':''?>
                          <?=($item&&$item->ceto2)?'<span type="text" class="kuanshi"   style="margin-right:6px;">'.$item->ceto2.'</span>':''?>
                          <?=($item&&$item->ceto3)?'<span type="text" class="kuanshi"   style="margin-right:6px;">'.$item->ceto3.'</span>':''?>
                          <?=($item&&$item->ceto4)?'<span type="text" class="kuanshi"   style="margin-right:6px;">'.$item->ceto4.'</span>':''?>
                          <?=($item&&$item->ceto5)?'<span type="text" class="kuanshi"   style="margin-right:6px;">'.$item->ceto5.'</span>':''?>
                          
                          
                         </div>
                    </div>
                     
                   
                    
                    <div class="clearfix row" style="margin-bottom: 10px;">
                      <div class="col-md-2" style="padding-left: 0px;padding-right: 0px;">
                        <span class="item" >数量</span>
                        </div>
                        <div class="col-md-10" style="text-align:left;padding-left: 0px;padding-right: 0px;">
                        <span class="num">
                            <a href="#" class="dec">-</a>
                             <input  type="text" value="1" readonly="readonly">
                            <a href="#" class="inc">+</a>
                        </span>
                        </div>

                    </div>
                    
                    <form id="form" action="<?=site_url()?>/apply/apply1" method="get">
                      <input type="hidden" name="cloth_id" value="<?=$item?$item->cloth_id:''?>" />
                      <!-- <input type="hidden" name="color"  /> -->
                      <input type="hidden" name="size"  />
                      <input type="hidden" name="num"  />
                      <button class="order btn" type="submit">现在预订</button>
                    </form>
                    
                </div>

            </div>
        </div>
        
    </div>

<!--     <div class="container">
      <div class="play row ">
        <div class="col-md-1">
            <img src="" width="100%" height="100" alt="">
        </div>
        <div class="col-md-11 art">
            <h3>
                筑梦计划
            </h3>
            <p>
                是由来自浙江大学的优秀学子发起是由来自浙江大学的优秀学子发起是由来自浙江大学的优秀学子发起是由来自浙江大学的优秀学子发起是由来自浙江大学的优秀学子发起是由来自浙江大学的优秀学子发起
            </p>
        </div>
    </div>

    </div> -->

    
    <div class="container userimg">
        <img src="<?=base_url()?>upload/img/<?=$item->cloth_id?>/0.jpg" width="100%" alt="用户上传图片">
    </div>




     <?php 
        $this->load->view('footer.php');
    ?>
    
</body>
<script>
    jQuery(function($){
      (function(){
        $('#form').submit(function(e){
            // if(!is_login){
            //   e.preventDefault();
            //   $('#login').modal('show');
            // }
            
        });
      })();
      (function(){
        var pvalue=$('.pvalue').width();
        var pro=$('.pvalue').parent().width();
        var p=pvalue/pro;
        if(p<0.25){
          $('.pvalue').addClass('blue');
        }else if(p<0.5){
          $('.pvalue').addClass('green');
        }else if(p<0.75){
          $('.pvalue').addClass('yellow');
        }else {
          $('.pvalue').addClass('red');
        }
      })();

      (function(){
        $('.col-md-6 .thumb-ul li').on('click',function(){
          var src=$(this).find('img').attr('src');
          $('.left-bg-img').attr('src',src);

        });
      })();
      (function(){
        
            var user_id=$('.author').attr('data-id');
            var site_url='<?=site_url()?>';
            $.ajax({
                'url':site_url+'/index/get_userinfo',
                'data':{'user_id':user_id},
                'dataType':'json',
                'type':'get',
                'success':function(data){
                    $('.author').text(data);
                }
            });
      })();
      (function(){
        $('.user-opt img.user-zhan').each(function(){
            var site_url='<?=site_url()?>';
            var _this=$(this);
            $.ajax({
                'url':site_url+'/index/is_like',
                'dataType':'json',
                'type':'get',
                'data':{'cloth_id':$(this).attr('data-id')},
                'success':function(data){
                    if(data){ 
                        _this.attr('src',_this.attr('src').replace('off','on'));  }
                }
            });
        });
        $('.user-opt img.user-zhan').on('click',function(e){
            var site_url='<?=site_url()?>';
            e.preventDefault();
            if(!is_login){
                $('#login').modal();
            }else{
                var flag=$(this).attr('src').indexOf('zhan_off');
                if(flag>=0){//insert
                    $(this).attr('src',$(this).attr('src').replace('zhan_off','zhan_on'));
                    $.ajax({
                        'url':site_url+'/index/add_like',
                        'data':{'cloth_id':$(this).attr('data-id')}
                    });
                }else{//delete
                    $(this).attr('src',$(this).attr('src').replace('zhan_on','zhan_off'));
                    $.ajax({
                        'url':site_url+'/index/delete_like',
                        'data':{'cloth_id':$(this).attr('data-id')}
                    });
                }
            }
            
        });

        $('.user-opt img.user-col').each(function(){
            var site_url='<?=site_url()?>';
            var _this=$(this);
            $.ajax({
                'url':site_url+'/index/is_mark',
                'dataType':'json',
                'type':'get',
                'data':{'cloth_id':$(this).attr('data-id')},
                'success':function(data){
                    if(data){ 
                        _this.attr('src',_this.attr('src').replace('col_off','col_on'));  }
                }
            });
        });
        $('.user-opt img.user-col').on('click',function(e){
            var site_url='<?=site_url()?>';
            e.preventDefault();
            if(!is_login){
                $('#login').modal();
            }else{
                var flag=$(this).attr('src').indexOf('col_off');
                if(flag>=0){//insert
                    $(this).attr('src',$(this).attr('src').replace('col_off','col_on'));
                    $.ajax({
                        'url':site_url+'/index/add_mark',
                        'data':{'cloth_id':$(this).attr('data-id')}
                    });
                }else{//delete
                    $(this).attr('src',$(this).attr('src').replace('col_on','col_off'));
                    $.ajax({
                        'url':site_url+'/index/delete_mark',
                        'data':{'cloth_id':$(this).attr('data-id')}
                    });
                }
            }
            
        });

      })();
      
     


      // $('.size').on('click',function(){
      //   if(!$(this).hasClass('active')){
      //       $(this).addClass('active').siblings('span').removeClass('active');
      //       $('#form input[name=size]').val($(this).text());
      //   }
      // });
      $('.kuanshi').on('click',function(){
        if(!$(this).hasClass('active')){
            $(this).addClass('active').siblings('span').removeClass('active');
            $('#form input[name=size]').val($(this).text());
        }
      });
      $('.color').on('click',function(){
        if(!$(this).hasClass('active')){
            $(this).addClass('active').siblings('span').removeClass('active');
        }
      });
      $('.num a').on('click',function(e){
        e.preventDefault();
        if($(this).hasClass('dec')){
            if(parseInt($('.num input').val())>0){
                $('.num input').val(parseInt($('.num input').val())-1);
            }
        }else if($(this).hasClass('inc')){
            $('.num input').val(parseInt($('.num input').val())+1);
        }
         $('#form input[name=num]').val($('.num input').val());
      });


     
    });



</script>
</html>