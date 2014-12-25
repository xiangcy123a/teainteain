<?php 
    $this->load->view('common_header.php');
 ?>
    <link rel="stylesheet" href="<?=base_url()?>static/index/css/index.css">
</head>
<body>
    <?php 
        $this->load->view('header.php');
     ?>
    <div class="bothimg clearfix hidden-xs">
        <a class="left-img" target="_blank" href="<?=site_url()?>/index/faqi"><img src="<?=base_url()?>static/index/images/left.jpg" alt=""></a>
        <a class="right-img" target="_blank"  href="<?=site_url()?>/index/all_list"><img src="<?=base_url()?>static/index/images/right.jpg" alt=""></a>
    </div>
    <ul class="colorline2 clearfix">
        <li class="line-green"></li>
        <li class="line-yellow"></li>
        <li class="line-red"></li>
        <li class="line-blue"></li>        
    </ul>

    <div class="mycarousel container clearfix">
        <div class="left-con clearfix">
            <ul>
                <?php if($carousel):?>
                    <?php foreach($carousel as $key=>$ca):?>
                    <li  class=" <?=$key==0?'':'hidden'?>">
                        <div class="thumb">
                            <a href="<?=site_url().'/index/more_info?cloth_id='.$ca->cloth_id?>" target="_blank">
                            <img src="<?=base_url()?>upload/img/<?=$ca->cloth_id?>/5.jpg" alt=""></a>
                        </div>
                        <div class="desc clearfix">
                            <div class="title">
                                <a href="<?=site_url().'/index/more_info?cloth_id='.$ca->cloth_id?>" target="_blank"><?=$ca?$ca->title:''?></a>
                            </div>
                            <div class="author" data-id="<?=$ca?$ca->user_id:''?>">
                                作者：
                            </div>
                            <p class="description">
                               <?=$ca?$ca->summary:''?>
                            </p>
                            <ul class="pro-title clearfix">
                                <li>已筹集</li>
                                <li style="text-align: center;">目标</li>
                                <li style="text-align: right;">剩余</li>
                            </ul>
                            <ul class="pro-con clearfix">
                                <li><?=$ca?$ca->got:'0'?>件</li>
                                <li style="text-align: center;"><?=$ca?$ca->amount:''?>件</li>
                                <li style="text-align: right;"><?=round((strtotime($ca->deadline)-time())/3600/24,0)?>天</li>
                            </ul>
                        </div>
                    </li>
                    <?php endforeach;?>
                <?php endif;?>
            </ul>
            
        </div>
        <div class="right-list clearfix">
            <ul>
                <li class="doubi1 active">项目一</li>
                <li class="doubi2">项目二</li>
                <li class="doubi3">项目三</li>
                <li class="doubi4">项目四</li>
            </ul>
        </div>
    </div>

    <div class="hot container clearfix ">
        <div class="hot-header clearfix">
            <h1 class="h1">人气预售</h1>
            <span class="span">看看谁的预售项目最有魅力吧</span>
            <a class="more"  target="_blank"  href="<?=site_url()?>/index/all_list">更多产品</a>
        </div>
        <ul class="colorline1">
            <li class="line-green"></li>
            <li class="line-yellow"></li>
            <li class="line-red"></li>
            <li class="line-blue"></li>
        </ul>


        <div class="hot-content clearfix">
            <div class="hot-list clearfix">
            <?php if($cloths):?>
                <?php foreach($cloths as $key=>$val):?>
                <a href="<?=site_url()?>/index/more_info?cloth_id=<?=$val->cloth_id?>" target="_blank">
                <div  style="margin-top:16px;"  class="hot-item <?=($key+1)%4==0?'last':''?>">
                        <img class="thumb" src="<?=base_url()?>/upload/img/<?=$val->cloth_id?>/1.jpg" width="100%" height="270" alt="">
                        <div class="pro">
                            <div class="pvalue  blue " style="width:<?=(100*$val->got)/$val->amount?>%;"></div>
                        </div>
                        <p class="hot-title"><?=$val?$val->title:''?></p>
                        <p class="hot-author" data-id="<?=$val->user_id?>"></p>
                        <ul class="ul-title clearfix">
                            <li>已筹集</li>
                            <li>目标</li>
                            <li>剩余</li>
                        </ul>
                        <ul class="ul-con clearfix">
                            <li><?=$val?$val->got:'0'?>件</li>
                            <li><?=$val?$val->amount:'0'?>件</li>
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
    </div>
    
    <div class="new container clearfix">
        <div class="new-header clearfix">
            <h1 class="h1">潮品专区</h1>
            <span class="span">你是潮人吗，跟我一起装逼吧！</span>
            <a class="more"   target="_blank"  href="<?=site_url()?>/index/list_subject">更多专题</a>
        </div>
        <ul class="colorline1">
            <li class="line-green"></li>
            <li class="line-yellow"></li>
            <li class="line-red"></li>
            <li class="line-blue"></li>
        </ul>
        <div class="new-list clearfix">
        <?php if($subjects):?>
            <?php foreach($subjects as $subject):?>
            <div class="new-item clearfix">
                <a href="<?=site_url()?>/index/detail_subject?subject=<?=$subject->id?>">
                <div class="thumb">
                    
                        <img src="<?=base_url().$subject->list_pic?>" alt="">
                    
                    <div class="new-hot">
                        <img src="<?=base_url().$subject->badge_pic?>" alt="">
                    </div>
                </div>
                </a>
                <div class="desc">
                    <div class="header"><a href="<?=site_url()?>/index/detail_subject?subject=<?=$subject->id?>" target="_blank"><?=$subject?$subject->ceto_name:''?></a></div>
                    <div class="description">
                        <p style="word-break: break-word;"><?=$subject?$subject->subject_info:''?></p>
                    </div>
                    <span class="have">已有<strong><?=$subject?$subject->click_num:''?></strong>人参与</span>
                    <a class="look"  href="<?=site_url()?>/index/detail_subject?subject=<?=$subject->id?>" target="_blank"><?$subject?$subject->id:''?>去看看</a>
                </div>
            </div>
            <?php endforeach;?>
        <?php endif;?>
        </div>


    </div>
    <?php 
        $this->load->view('footer.php');
    ?>

    
</body>
<script>
    var is_login="<?php echo $this->session->userdata('is_login');?>";
    jQuery(function($){
        update_love_num();
        var mycarousel=function(){
            var $ul=$('.mycarousel .right-list ul');
            var index=$ul.find('.active').index();
            var next=(index+1)%4;
            $ul.find('.active').removeClass('active');
            $('.mycarousel .left-con>ul>li').eq(index).addClass('hidden');
            $('.mycarousel .left-con>ul>li').eq(next).removeClass('hidden');
            $ul.find('li').eq(next).addClass('active');
        }
        var timer=setInterval(mycarousel,4000);
        $('.mycarousel .right-list ul li').on('click',function(){
            clearInterval(timer);
            $(this).addClass('active').siblings('li').removeClass('active');
            var index=$('.mycarousel .right-list ul').find('.active').index();
            $('.mycarousel .left-con>ul>li').eq(index).removeClass('hidden').siblings('li').addClass('hidden');
            //timer=setInterval(mycarousel,4000);
        });


        $('.pro .pvalue').each(function(){
            var p=$(this).width()/$(this).parent().width();
            if(p<0.25){
                $(this).addClass('blue');
            }else if(p<0.5){
                $(this).addClass('green');
            }else if(p<0.75){
                $(this).addClass('yellow');
            }else {
                $(this).addClass('red');
            }
        });

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
            e.preventDefault();
            if(!is_login){
                $('#login').modal();
            }else{
                var flag=$(this).attr('src').indexOf('off');
                if(flag>=0){//insert
                    $(this).attr('src',$(this).attr('src').replace('off','on'));
                    $.ajax({
                        'url':site_url+'/index/add_like',
                        'data':{'cloth_id':$(this).attr('data-id')}
                    });
                }else{//delete
                    $(this).attr('src',$(this).attr('src').replace('on','off'));
                    $.ajax({
                        'url':site_url+'/index/delete_like',
                        'data':{'cloth_id':$(this).attr('data-id')}
                    });
                }
                update_love_num();
            }
            
        });
        $('.hot-author,.author').each(function(){
            var user_id=$(this).attr('data-id');
            var _this=$(this);
            var site_url='<?=site_url()?>';
            $.ajax({
                'url':site_url+'/index/get_userinfo',
                'data':{'user_id':user_id},
                'dataType':'json',
                'type':'get',
                'success':function(data){
                    _this.text(data);
                }
            });
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