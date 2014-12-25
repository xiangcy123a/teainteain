<script src="<?=base_url()?>static/common/js/ajaxfileupload.js"></script>
<div id="ui"  class="wrap clearfix">
      <div class="ui">
        <div style="float:left;width:40%;">
          <div class="section1">
          <div class="head">
            首页轮播图
          </div>
            <div class="sylb clearfix" style="position:relative;">
              <div><?php if($indeximg&&count($indeximg)>=1){echo './upload/indeximg/'.$indeximg[0];}?></div>
              <span class="del"></span>
              <span></span>
              <input id="upload" type="file" name="upload" style="position:absolute;position: absolute;width: 1px;height: 1px;left: 300px;opacity: 0;" />
            </div>
            <div class="sylb clearfix" style="position:relative;">
              <div><?php if($indeximg&&count($indeximg)>=2){echo './upload/indeximg/'.$indeximg[1];}?></div>
              <span class="del"></span>
              <span></span>
               <input id="upload2" type="file" name="upload" style="position:absolute;position: absolute;width: 1px;height: 1px;left: 300px;opacity: 0;" />
            </div>
            <div class="sylb clearfix" style="position:relative;">
              <div><?php if($indeximg&&count($indeximg)>=3){echo './upload/indeximg/'.$indeximg[2];}?></div>
              <span class="del"></span>
              <span></span>
               <input id="upload3" type="file" name="upload" style="position:absolute;position: absolute;width: 1px;height: 1px;left: 300px;opacity: 0;" />
            </div>
            <div class="sylb clearfix" style="position:relative;">
              <div><?php if($indeximg&&count($indeximg)>=4){echo './upload/indeximg/'.$indeximg[3];}?></div>
              <span class="del"></span>
              <span></span>
               <input id="upload4" type="file" name="upload" style="position:absolute;position: absolute;width: 1px;height: 1px;left: 300px;opacity: 0;" />
            </div>
          </div>
          <div class="section2">
            <div class="head">首页产品线长图</div>
            <div class="img">
              <?php for($i=0;$i<count($intro);$i++){?>
                <div  class="line"><?='./upload/intro/'.$intro[$i]?></div>
              <?php }?>
            </div>

            <div class="section2-btn clearfix">
              <span class="add"><input id="introupload" type="file" name="upload" style="width: 1px;height: 1px;opacity: 0;" /></span>
              <span class="intro-del"></span>
              <span></span>
              <span></span>
               
            </div>
          </div>
        </div>
        

        <div class="section3">
          <div class="head">首页产品</div>
          <div class="listitem">
            <div class="item">
              <div class="line clearfix">
                <div><?php if($uncompress1&&count($uncompress1)>=1){echo './upload/uncompress/1/'.$uncompress1[0];}?></div>
                <span class="del"></span>
                <span><input id="uncompress1_1" type="file" name="upload" style="width: 1px;height: 1px;opacity: 0;" /></span>
              </div>
             <div class="line clearfix">
                <div><?php if($uncompress1&&count($uncompress1)>=2){echo './upload/uncompress/1/'.$uncompress1[1];}?></div>
                <span class="del"></span>
                <span><input id="uncompress1_2" type="file" name="upload" style="width: 1px;height: 1px;opacity: 0;" /></span>
              </div>
              <div class="line clearfix">
                <div><?php if($uncompress1&&count($uncompress1)>=3){echo './upload/uncompress/1/'.$uncompress1[2];}?></div>
                <span class="del"></span>
                <span><input id="uncompress1_3" type="file" name="upload" style="width: 1px;height: 1px;opacity: 0;" /></span>
              </div>
              <div class="line clearfix">
                <div><?php if($uncompress1&&count($uncompress1)>=4){echo './upload/uncompress/1/'.$uncompress1[3];}?></div>
                <span class="del"></span>
                <span><input id="uncompress1_4" type="file" name="upload" style="width: 1px;height: 1px;opacity: 0;" /></span>
              </div>
            </div>
            <div class="item">
              <div class="line clearfix">
                <div><?php if($uncompress2&&count($uncompress2)>=1){echo './upload/uncompress/2/'.$uncompress2[0];}?></div>
                <span class="del"></span>
                <span><input id="uncompress2_1" type="file" name="upload" style="width: 1px;height: 1px;opacity: 0;" /></span>
              </div>
             <div class="line clearfix">
                <div><?php if($uncompress2&&count($uncompress2)>=2){echo './upload/uncompress/2/'.$uncompress2[1];}?></div>
                <span class="del"></span>
                <span><input id="uncompress2_2" type="file" name="upload" style="width: 1px;height: 1px;opacity: 0;" /></span>
              </div>
              <div class="line clearfix">
                <div><?php if($uncompress2&&count($uncompress2)>=3){echo './upload/uncompress/2/'.$uncompress2[2];}?></div>
                <span class="del"></span>
                <span><input id="uncompress2_3" type="file" name="upload" style="width: 1px;height: 1px;opacity: 0;" /></span>
              </div>
              <div class="line clearfix">
                <div><?php if($uncompress2&&count($uncompress2)>=4){echo './upload/uncompress/2/'.$uncompress2[3];}?></div>
                <span class="del"></span>
                <span><input id="uncompress2_4" type="file" name="upload" style="width: 1px;height: 1px;opacity: 0;" /></span>
              </div>
            </div>
            
            <div class="item">
              <div class="line clearfix">
                <div><?php if($uncompress3&&count($uncompress3)>=1){echo './upload/uncompress/3/'.$uncompress3[0];}?></div>
                <span class="del"></span>
                <span><input id="uncompress3_1" type="file" name="upload" style="width: 1px;height: 1px;opacity: 0;" /></span>
              </div>
             <div class="line clearfix">
                <div><?php if($uncompress3&&count($uncompress3)>=2){echo './upload/uncompress/3/'.$uncompress3[1];}?></div>
                <span class="del"></span>
                <span><input id="uncompress3_2" type="file" name="upload" style="width: 1px;height: 1px;opacity: 0;" /></span>
              </div>
              <div class="line clearfix">
                <div><?php if($uncompress3&&count($uncompress3)>=3){echo './upload/uncompress/3/'.$uncompress3[2];}?></div>
                <span class="del"></span>
                <span><input id="uncompress3_3" type="file" name="upload" style="width: 1px;height: 1px;opacity: 0;" /></span>
              </div>
              <div class="line clearfix">
                <div><?php if($uncompress3&&count($uncompress3)>=4){echo './upload/uncompress/3/'.$uncompress3[3];}?></div>
                <span class="del"></span>
                <span><input id="uncompress3_4" type="file" name="upload" style="width: 1px;height: 1px;opacity: 0;" /></span>
              </div>
            </div>
            
           
          </div>
          <div class="section3-btn clearfix">
          <!--
              <span class="add"></span>
              <span></span>
              -->
              <span></span>
              <span></span>
          </div>

        </div>


      </div>
    </div>
<script>
  jQuery(function($){
    $(document).on('click','.section2 .img .line',function(){
       if(!$(this).hasClass('active')){
        $(this).siblings().removeClass('active').end().addClass('active');
      }
    });
    
    $('input[id^=upload]').on('change',function(){
      var id=$(this).attr('id');
      var $_this=$(this).siblings('div');

      $.ajaxFileUpload({
        url: "<?=site_url('manage/testupload')?>",//处理上传用的后台程序,可以是PHP,也可以是ASP等
        secureuri: false,//异步
        type:'post',
        fileElementId: id,//上传控件ID
        dataType: 'json',//返回的数据信息格式
        success: function(data) {
          if(data.flag){
            $_this.text(data.text);
          } 
        },
        error:function(data){
          alert('fail');
        }
      });
    });

    $(document).on('change','input[id^=introupload]',function(){
   // $('input[id^=introupload]').on('change',function(){
      var id=$(this).attr('id');
      $.ajaxFileUpload({
        url: "<?=site_url('manage/uploadintro')?>",//处理上传用的后台程序,可以是PHP,也可以是ASP等
        secureuri: false,//异步
        type:'post',
        fileElementId: id,//上传控件ID
        dataType: 'json',//返回的数据信息格式
        success: function(data) {
          if(data.flag){
            $('.img').append('<div  class="line">'+data.text+'</div>');
          } 
        },
        error:function(data){
          alert('fail');
        }
      });
    });

    $('.del').on('click',function(){
      var _this=$(this).siblings('div');
      var text=_this.text();
      if(text){
        $.ajax({
          'url':"<?=site_url('manage/delpic')?>",
          'data':{'picurl':text},
          'dataType':'json',
          'type':'post',
          'success':function(data){
            if(data){
              _this.text('');
            }
          }        


        });
      }
    });

    $('.intro-del').on('click',function(){
      var _this=$('.img div.line.active');
      var text=_this.text();
      if(text){
        $.ajax({
          'url':"<?=site_url('manage/delpic')?>",
          'data':{'picurl':text},
          'dataType':'json',
          'type':'post',
          'success':function(data){
            if(data){
              _this.remove();
            }
          }        


        });
      }
    });

    $(document).on('change','input[id^=uncompress1]',function(){
      var id=$(this).attr('id');
      var $_this=$(this).parent().siblings('div');

      $.ajaxFileUpload({
        url:  "<?=site_url('manage/uncompressupload?dir=1')?>",//处理上传用的后台程序,可以是PHP,也可以是ASP等
        secureuri: false,//异步
        type:'post',
        fileElementId: id,//上传控件ID
        dataType: 'json',//返回的数据信息格式
        success: function(data) {
          if(data.flag){
            $_this.text(data.text);
          } 
        },
        error:function(data){
          alert('fail');
        }
      });
    });

    $(document).on('change','input[id^=uncompress2]',function(){
      var id=$(this).attr('id');
      var $_this=$(this).parent().siblings('div');

      $.ajaxFileUpload({
        url:  "<?=site_url('manage/uncompressupload?dir=2')?>",//处理上传用的后台程序,可以是PHP,也可以是ASP等
        secureuri: false,//异步
        type:'post',
        fileElementId: id,//上传控件ID
        dataType: 'json',//返回的数据信息格式
        success: function(data) {
          if(data.flag){
            $_this.text(data.text);
          } 
        },
        error:function(data){
          alert('fail');
        }
      });
    });
    $(document).on('change','input[id^=uncompress3]',function(){
      var id=$(this).attr('id');
      var $_this=$(this).parent().siblings('div');

      $.ajaxFileUpload({
        url: "<?=site_url('manage/uncompressupload?dir=3')?>",//处理上传用的后台程序,可以是PHP,也可以是ASP等
        secureuri: false,//异步
        type:'post',
        fileElementId: id,//上传控件ID
        dataType: 'json',//返回的数据信息格式
        success: function(data) {
          if(data.flag){
            $_this.text(data.text);
          } 
        },
        error:function(data){
          alert('fail');
        }
      });
    });

     




  });


</script>