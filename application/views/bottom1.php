 <?php 
    $this->load->view('common_header');

   ?>
<style>
.help{
  margin-top: 20px;

}
.tea-in-title{
  font-size: 2em;
  font-weight:bold;
  color:#f3bd39;
  width:20%;
  text-align: left;
  padding-left: 0px;
}

.tea-in-title-second{
   font-size: 1em;
  font-weight:bold;
  color:#333;
  width:30%;
  text-align: left;
  margin-top: 2%;
  letter-spacing: 1px;
  
}

.hr1 {
  width: 100%;
  height: 1px;
  border: none;
  border-top: 2px solid #f3bd39;
  }

.hr2 {
  width: 120%;
  height: 1px;
  border:none;
  border-top: 1px solid #cccccc;
  margin-top: -0.1%;
  padding-top:5%;
  margin-left:-10%;
  margin-bottom: -0.1%
}


.bottom-body{
  /* width: 80.5%;
   padding-left:19%;
   cursor:default*/
} 

.menu{
  font-size: 1.2em;
  width:80%;
  text-align: left;
  padding-left: 0px;
  letter-spacing: 1px;
  line-height: 25px;
  color:#f3bd39;
  cursor:pointer
  }

.list{
  font-size: 0.8em;
  width:120%;
  text-align: left;
  padding-left: 20%;
  letter-spacing: 1px;
  margin-top:-8%;
  padding-bottom:3%;
  color: #cccccc;
}

.menu a:link,
.menu a:visited{
 color:#218964;
 text-decoration:none;
 }
.menu a:hover,
.menu a:active {
 color:#218964;
 text-decoration:none;
 font-weight: bold;
 }

.list a:link,
.list a:visited{

 text-decoration:none;
 }
.list a:hover,
.list a:active {

 text-decoration:none;
  font-weight: bold;
}

.article-title{
  text-align: left;
  font-size: 2.5em;
  font-weight: bold;
  color: #333;
  line-height: 150%
}

.article{
  text-align: left;
  font-size: 0.9em;
  color: #333;
  line-height: 200%
}

.thumbnail{
  border:none;
  text-align: center;
}

.question{
  text-align: left;
  font-size:1em;
  color: #333;
  line-height: 200%;
  font-weight: bold;
  margin-bottom:-0px
}

input-group{
position:relative;
display:table;
border-collapse:separate;
width: 50%;
padding-bottom: 1%;
height:1px;
}

input-group-addon{
  width: 1%
  white-space:nowrap;
  vertical-align:middle;
  background-color:#ffffff;
  border:0px;
  font-size:1em;
  color:  #999999;
  height: 1%;
 }

input-group.form-control{
  float: left;
  width: 100%
  margin-bottom: 0;
  padding-left: 0;
   
}

.btn {
  border-radius: 0px;
  background-color:#f3bd39;
  color: #ffffff;
  padding-left: 4%;
  padding-right: 4%;
  letter-spacing: 6px;
  font-size: 1.2em;
  margin-left: -1.5%
}
.btn:hover{
  color:white !important;
}


.modal{
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  display: none;
  overflow: auto;
  overflow-y: scroll;
  -webkit-overflow-scrolling: touch;
}

.self-info-2{
   text-align: left; 
   vertical-align: center;
   height: 20px;
   margin-top: 2px;
}

.input-self-info{
  width:40%;
  height: 24px;   
  border:1px solid #cccccc;
  margin-left:-5%
}

    </style>
   
    <!-- <script src="js/bottom.js"></script> -->
</head>
<body>
  <!-- navigation bar -->
  <!-- navigation bar -->
  <?php 
    $this->load->view('header');

   ?>
<div class="container help">
  <div class="row">
    <div class="col-md-2 tea-in-title">
      <span>TEAIN品质</span>
   </div>
   <div class="col-md-10 tea-in-title-second">
      <span>帮助指南</span>
      </div>
   <hr class="hr1"> 
  </div>
   

<!-- tea-bottom标题 -->

<div class="row bottom-body">
  <div class="col-md-2" style="width:20%">
    <div class="row  menu flip1">
     <p style="cursor:pointer">•&nbsp;服务承诺</p>
     <div class="list panel1">
        <a href="bottom1">•&nbsp;质量保证</a>
        <br>
        <a href="bottom1">•&nbsp;七天无条件退货</a>
        
     </div>
   </div>

    <div class="row  menu flip2">
       <hr class="hr2">
       <p>•&nbsp;帮助指南</p>
       <div class="list panel2">
        <a href="bottom2">•&nbsp;发起项目</a>
        <br>
        <a href="bottom2">•&nbsp;支持项目</a> 
        <br>
        <a href="bottom2">•&nbsp;常见问题</a>
      </div>
   </div>

    <div class="row  menu flip3">
       <hr class="hr2">
       <p>•&nbsp;条款说明</p>
      <div class="list panel3">
        <a href="bottom3">•&nbsp;版权说明</a>
        <br>
        <a href="bottom3">•&nbsp;隐私声明</a> 
        <br>
        <a href="bottom3">•&nbsp;服务条款</a>
      </div>
   </div>

    <div class="row  menu flip4">
       <hr class="hr2">
       <p>•&nbsp;支付配送</p>
      <div class="list panel4">
        <a href="bottom4">•&nbsp;支付方式</a>
        <br>
        <a href="bottom4">•&nbsp;配送说明</a> 
        <br>
     </div>
   </div>

     <div class="row  menu flip5">
       <hr class="hr2">
       <p>•&nbsp;关于我们</p>
       <div class="list panel5">
        <a href="bottom5">•&nbsp;团队介绍</a>
        <br>
        <a href="bottom5">•&nbsp;联系我们</a> 
     </div>
   </div>

  </div>


  <div class="col-md-10 article" style="width:80%">
      <p class="article-title">品质保证</p>
      <p>我们的产品采用的工艺都是极具报障的。每一件产品，每一天产业线，都倾注了我们的心血。考察、实验，尽力将错误降到最低。以T恤为例，我们的T恤采用100%莱卡棉材质，有着极好的贴身、弹性和宽松自然的特性，穿着舒服、伸展自如。</p>
      <div class="thumbnail col-md-6">
            <img src="<?=base_url()?>static/index/images/bottom1.1.jpg" alt="cloth">
            <br>
            <p>领口领先工艺，耐磨不易变形</p>
       </div>  
       <div class="thumbnail col-md-6">
            <img src="<?=base_url()?>static/index/images/bottom1.1.jpg" alt="cloth">
            <br>
            <p>双线车工和精细针，简洁舒适</p>
     </div><br><br>
       
      <p class="article-title">退货政策：7天无条件退货</p>
      <p>消费者使用支付宝担保交易在TEAIN购物，签收货物后7天内，如有任何原因，包括“不喜欢/不想要了”等主观原因导致不愿意完成本次交易的，可以在不人为损坏产品的情况下，提出“7天无条件退货”的申请（部分特殊标注的商品除外）</p><br><br>

      <p class="article-title">退货办理</p>
      <p>1、阅读我们的退货政策，确认您要退的商品符合退货要求</p>
      <p>2、填写退货申请</p>
      <p>3、您的退货申请被批准后，您的注册邮箱将收到一封确认邮件，请根据邮件中的地址将退货产品寄回</p>
      <p>4、收到货品后，缇音网客服代表将于7天内与您确认退款，退货完成！</p>

      <br><br>

      <p class="article-title">退货申请</p><br>
     <form id="form" method="post" action="<?=site_url()?>/index/do_bottom1">
      <div>
         <div class="col-md-2 self-info-2">退货原因：</div>
         <div class="col-md-10">
            
            <select class="input-self-info" name="reason">
            <option value="无理由" selected="selected">请选择相应的退货原因</option>
            <option value="质量出现问题">质量出现问题</option>  
            <option value="衣服设计和实物偏差太大">衣服设计和实物偏差太大</option>
            <option value="不想要了">不想要了</option>
            <option value="其他原因">其他原因</option>
            </select>
            
       </div><br><br>
     </div>
       <div>
            <div class="col-md-2 self-info-2">详细阐述：</div>
            <div class="col-md-10">
            <textarea name="more_info" style="resize:none;width:100%;height:200px;margin-left:-5%;margin-top:1%;margin-bottom:4%;border:1px solid #cccccc"></textarea></div> 
        </div>

        <div>
           <div class="col-md-2"></div>
           <button class="btn" type="submit" >提交</button><br><br>
        </div>
</form>
     </div>
</div>

</div>


   <!-- 全部结束 -->
    <!--footer-->
<?php 
  $this->load->view('footer');
 ?>
 
  

</body>
<script>
  jQuery(function($){
    $('#form').on('submit',function(e){
      e.preventDefault();
      $('#ok').find('.text-center').text('提交成功，请耐心等待邮件回复！');
      $('#ok').modal('show');
      var _this=$(this);
      $.ajax({
        'url':_this.attr('action'),
        'type':'post',
        'dataType':'json',
        'data':_this.serialize(),
        'success':function(d){
        }
      });
      setTimeout(function(){$('#ok').modal('hide');location.reload();},2000);
      
    });
  });

</script>
</html>
