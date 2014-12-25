 <?php 
    $this->load->view('common_header');

   ?>
    <style>
      /*.bottom-title{
   width: 80.5%;
   padding-left:19%;
   padding-top: 4%;
   cursor:default
   } 
*/
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
 color:#333;
 text-decoration:none;
 }
.list a:hover,
.list a:active {
 color:#333;
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
  background-color:#218964;
  color: #ffffff;
  padding-left: 3%;
  padding-right: 2%;
  letter-spacing: 6px;
  font-size: 1.2em;
  margin-left: -1.5%
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
   
    <script src="js/bottom.js"></script>
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
      <p class="article-title">发起项目</p>
<p>进入相应项目的详细页面，点击参与众筹完成。</p>
      <div class="thumbnail col-md-12">
            <img src="<?=base_url()?>static/index/images/bottom2.1.jpg" alt="发起项目">
            <br>
            <br>
      </div>
      <p class="article-title">支持项目</p>
      <p>点击首页发起项目，根据提示完成相应步骤，发布预售产品</p>   
      <div class="thumbnail col-md-12">
            <img src="<?=base_url()?>static/index/images/bottom2.2.jpg" alt="支持项目">
      </div><br><br>
       
     <p class="article-title">常见问题</p><br>
     <p style="color:#f3bd39;font-size:1.8em;font-weight:bold">给发起者的解答</p><br>
     <p class="question">1、你能在TEAIN做什么？</p> 
     <p>TEAIN能帮助您快速设计出属于您的产品，并且通过预售的形式决定是否生产该设计产品，达成预售条件我们将代您生产产品并发给顾客，而您则可以获得总收益中的7成。</p>
     
     <p class="question">2、发起一个项目预购需要支付费用么？</p> 
     <p>不需要，在TEAIN发起一个项目完全不需要支付任何费用，也不需要承担任何风险。</p>

     <p class="question">3、我想上传一个自己的设计图案，要求什么样的文件格式？</p> 
     <p>我们推荐您上传.png .jpg的设计图案，但是要达到分辨率1600*1200，300dpi的要求。我们的印制团队将会复查您提交的设计图片，以便达到最好的印制效果。</p>

     <p class="question">4、我可以在设计过程中保存设计，并在下次登录时继续进行设计么？</p> 
     <p>当然，您可以登陆您的TEAIN账户或者通过人人、微博、QQ、豆瓣账号登录我们的网站来保存您的设计以便下次继续。</p>
     
     <p class="question">5、完成设计后我怎样让我的设计受到顾客的认可并参与预售？</p> 
     <p>在您设计的最后步骤，我们将会为您的产品提供一个唯一的链接，您可以将这个链接发布在自己的社交平台上让自己的朋友以及更多人看到您的产品。同时，我们也会定期选择优秀的作品放在我们的首页作为特色产品进行宣传。只要您的设计足够优秀，那么一定可以受到顾客认可并让他们参与预售。</p>

     <p class="question">6、如果我的产品设计没有达到预售数量呢？</p> 
     <p>如果您的设计没有达到之前设定的目标，那么设计将下架，但是产品设计者和预订者将不会被收取任何费用。</p>

     <p class="question">7、如果我的设计预售数量超过了设定值，怎么办？</p> 
     <p>在预售期间内预售数量可以继续增加，直到您的产品预售截止期。</p>

     <p class="question">8、我何时能够获得最后的设计利润？</p> 
     <p>您的利润将在产品预售成功后立即通知您，并在7个工作日内打入您提供的银行账户或者支付宝账户。</p>
     
      <br><p style="color:#f3bd39;font-size:1.8em;font-weight:bold">给顾客的解答</p> <br>
     <p class="question">1、在预售时如何交纳预购费用？</p> 
     <p>TEAIN支持支付宝预付。您可以通过支付宝预先支付，如果预售成功，则当您收到产品您登陆网站点击收货后，预付的账款才会打给我们。</p>

     <p class="question">2、如果T恤设计预售失败，我已交的费用如何退还给我？</p> 
     <p>如果您预订的设计产品没有在预售日期内达到预售目标，那么我们会立刻通过邮件通知您，如果您不再等待该作品的下次预售，我们将在3个工作日内直接将款项退还到您支付的账户中。如果发生任何争议，我们将按照支付宝争议解决办法进行解决，保障您的利益不受任何损失。</p>

     <p class="question">3、产品设计预售成功后，多长时间会发货？</p> 
     <p>产品将在预售成功后的5天内制作完毕，在其后3-5天内送达，为保证产品质量，请您耐心等待。如果您的产品没有在预期的时间内送达，请尽快联系我们service@tea-in.net。</p>

     <p class="question">4、顾客如何进行退换货请求？</p> 
     <p>我们提供完善的售后服务，一旦在消费过程中有任何问题请立即联系我们service@tea-in.net，我们的客服中心将竭诚为您服务。</p>
     <br><br><br>

   </div>
</div>

</div>


   <!-- 全部结束 -->
    <!--footer-->
<?php 
  $this->load->view('footer');
 ?>


</body>
</html>
