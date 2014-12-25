 <?php 
    $this->load->view('common_header');

   ?>
    <style>
       
        .hotcontainer {
            /*width: 960px;*/
            padding: 0px;
        }
        .row{
            margin-left: 0px;
            margin-right: 0px;
        }
        
        .links{
            border:1px solid #ddd;
            margin-top: 20px;
            /*margin-bottom: 30px;*/
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: center;

        }
        .links a{
            display: inline-block;
            padding-left: 7.4%;
            padding-right: 7.4%;
            color: #666;
            border-right: 2px solid #666;
            font-weight: bolder;

        }
        .links a.last{
            border-right: none;
        }
        .links a:hover{
            color: #2ed4ac;
            text-decoration: none;
            
        }

        .hot{

        }
        .hot-header{

        }
       
        .hot-list{
            /*padding-top: 20px;*/
            padding-bottom: 20px;
        }
        .hot-item{
            margin-top: 40px;
            border:1px solid #ccc;
            border-radius: 12px;
            float: left;
            width: 220px;
            background: rgb(250,250,250);
            /*height: 375px;*/
            overflow: hidden;
            margin-right: 5px;
            margin-left: 5px;
            position: relative;
            padding-left: 0px !important;
            padding-right: 0px !important;
            transition:all .5s ease-in-out .0s;
            margin-right: 20px;
            
        }
        .hot-item.hot-item-last{
            margin-right: 5px;
        }
        .hot-item:hover{
            box-shadow: 0px 0px 10px #ccc;
        }
        .hot-item .hot-love{
            position: absolute;
            top: 12px;
            right: 12px;
        }
        .hot-item .hot-love .hot-love-num{
            position: absolute;
            top: 2px;
            left: 28px;
            color: #f2355d;
            font-weight: bold;
        }
        .hot-item.last{
            margin-right: 0px;
        }
        .hot-item .pro{
            height: 7px;
            width: 100%;
        }
        .hot-item .pvalue{
            height: 100%;
            /*background: red;*/
            /*width: 30%;*/
        }
        .hot-title{
            padding: 6px 10px 3px 10px;
            margin: 0px;
            font-weight: 900;

        }

        .hot-author{
            padding:  3px 10px 6px 10px;
            margin: 0px;
            color: #999;
        }
        .hot-item .ul-title{
            list-style-type: none;
            margin:0px;
            padding: 0px;
            background: #ddd;
            padding-top: 10px;
        }
        .hot-item .ul-title li{
            font-size: 0.9em;
            width: 33%;
            text-align: center;
            list-style-type: none;
            float: left;
            color: #999;
        }
        .hot-item .ul-con{
            list-style-type: none;
            margin:0px;
            padding: 0px;
            background: #ddd;
            padding-bottom: 10px;
        }
        .hot-item .ul-con li{
            font-size: 1em;
            width: 33%;
            text-align: center;
            list-style-type: none;
            float: left;
            font-weight: 900;

        }
        .hot-item .thumb{
            border:none;
        }
        .hot .page{
            text-align: center;
            margin-bottom: 20px;
            margin-top: 20px;
        }
        .hot .page a{
            display: inline-block;
            padding:10px;
            font-size: 1.5em;
            color: #aaa;
        }
        .hot .page a:hover{
            color:  #2ed4ac;
        }
        .hot .page .prev{

        }
        .hot .page .next{

        }

        .totop{
            border:1px solid #ddd;
            border-radius: 20px;
            height: 80px;
            width: 80px;
            position: fixed;
            right: 40px;
            top: 500px;
            cursor: pointer;
            background: red;

        }
    </style>
</head>
<body>
     <?php 
        $this->load->view('header.php');
     ?>
    <div class="hotcontainer container links">
        <a style="<?=($type=='all')?'color: #2ed4ac;':''?>" href="<?=site_url()?>/index/all_list">所有商品</a>
        <a style="<?=($type=='new')?'color: #2ed4ac;':''?>"  href="<?=site_url()?>/index/all_list?type=new">最新款</a>
        <a style="<?=($type=='hot')?'color: #2ed4ac;':''?>"  href="<?=site_url()?>/index/all_list?type=hot">人气款</a>
        <a style="<?=($type=='zhongchou')?'color: #2ed4ac;':''?>"  href="<?=site_url()?>/index/all_list?type=zhongchou">众筹中</a>
        <a style="<?=($type=='over')?'color: #2ed4ac;':''?>"  href="<?=site_url()?>/index/all_list?type=over" class="last">已结束</a>
    </div>


     <div class="hot hotcontainer container clearfix ">

        <div class="hot-content clearfix">
            <div class="hot-list clearfix">
            <div class="row">
            <?php if($list):?>
                <?php foreach($list as $key=>$val):?>
                <a href="<?=site_url()?>/index/more_info?cloth_id=<?=$val->cloth_id?>" target="_blank">
                <div class="hot-item  col-md-3 col-xs-6 <?=($key+1)%4==0?' last hot-item-last':''?>">
                        <img class="thumb" src="" width="100%" height="270" alt="">
                        <div class="pro">
                            <div class="pvalue  blue" style="width:<?=(100*$val->got)/$val->amount?>%;"></div>
                        </div>
                        <p class="hot-title"><?=$val?$val->title:''?></p>
                        <p class="hot-author" data-id="<?=$val->user_id?>">作者：</p>
                        <ul class="ul-title clearfix">
                            <li>已筹集</li>
                            <li>目标</li>
                            <li>剩余</li>
                        </ul>
                        <ul class="ul-con clearfix">
                            <li><?=$val?$val->got:''?>件</li>
                            <li><?=$val?$val->amount:''?>件</li>
                            <li><?=round((strtotime($val->deadline)-time())/3600/24,0)?>天</li>
                        </ul>
                        <div class="hot-love">
                            <img data-id="<?=$val->cloth_id?>" src="<?=base_url()?>static/index/images/off.png" alt="">
                             <span data-id="<?=$val->cloth_id?>"   class="hot-love-num">0</span>
                        </div>
                </div>
                </a>
                <?php endforeach;?>
            <?php endif;?>
           
            </div> 
                
            </div>
            <div class="page">
                <a class="prev" href="<?=($page&&$page>1)?site_url().'/index/all_list?type='.$type.'&page='.($page-1):'javascript:void();'?>">&lt;</a>
                <a href="javascript:void();"><?=$page?$page:'1'?></a>
                <a class="next" href="<?=($page&&$page<$total)?site_url().'/index/all_list?type='.$type.'&page='.($page+1):'javascript:void();'?>">&gt;</a>
            </div>
        </div>
    </div>

    <div class="totop" style="display:none;"></div>
     <?php 
        $this->load->view('footer.php');
    ?>
</body>
<script>
    jQuery(function($){
        update_love_num();
        (function(){
            $('.hot-love img').each(function(){
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
            $('.hot-love img').on('click',function(e){
                var site_url='<?=site_url()?>';
                var _this=$(this);
                e.preventDefault();
                if(!is_login){
                    $('#login').modal();
                }else{
                    var flag=$(this).attr('src').indexOf('off');
                    if(flag>=0){//insert
                        $(this).attr('src',$(this).attr('src').replace('off','on'));
                        $.ajax({
                            'url':site_url+'/index/add_like',
                            'data':{'cloth_id':$(this).attr('data-id')},
                            'sync':false,
                            'success':function(){
                                update_love_num();
                            }
                        });
                    }else{//delete
                        $(this).attr('src',$(this).attr('src').replace('on','off'));
                        $.ajax({
                            'url':site_url+'/index/delete_like',
                            'data':{'cloth_id':$(this).attr('data-id')},
                            'sync':false,
                            'success':function(){
                                update_love_num();
                            }
                        });
                    }

                }
                
            });
        })();

        (function(){
            $('.pro .pvalue').each(function(){

                var p=$(this).width()/$(this).parent().width();
                var type='<?=$type?>';
                if(type=='over'){
                    $(this).css('background','#333');
                }else{
                    if(p<0.25){
                        $(this).addClass('blue');
                    }else if(p<0.5){
                        $(this).addClass('green');
                    }else if(p<0.75){
                        $(this).addClass('yellow');
                    }else {
                        $(this).addClass('red');
                    }
                }
                

            });
            $('.hot-author').each(function(){
                var user_id=$(this).attr('data-id');
                var _this=$(this);
                var site_url='<?=site_url()?>';
                $.ajax({
                    'url':site_url+'/index/get_userinfo',
                    'data':{'user_id':user_id},
                    'dataType':'json',
                    'type':'get',
                    'success':function(data){
                        _this.text('作者：'+data);
                    }
                });
            });

            
        })();



        $(document).scroll(function(){
            var top=$(document).scrollTop();
            if($('.totop').is(":hidden")){
                if(top>100){
                    $('.totop').show();
                }else{
                    $('.totop').hide();
                }
            }else if(top<3){
                $('.totop').hide();
            }
        });
        $('.totop').on('click',function(){
            $('html,body').animate({scrollTop:0},400,'linear',function(){$('.totop').hide();});
        });

        function update_love_num(){
            $('.hot-love .hot-love-num').each(function(){
                var _this=$(this);
                var site_url='<?=site_url()?>';
                $.ajax({
                    'url':site_url+'/index/get_hot_num',
                    'data':{'cloth_id':_this.attr('data-id')},
                    'dataType':'json',
                    'type':'get',
                    'success':function(data){
                        _this.text(data);
                    }
                });
            });
        }
        

    });

</script>
</html>