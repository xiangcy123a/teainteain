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
  color:#999999;
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
 color:#999999;
 text-decoration:none;
 }
.list a:hover,
.list a:active {
 color:#999999;
 text-decoration:none;
  font-weight: bold;
}

.article-title{
  text-align: left;
  font-size: 2.5em;
  font-weight: bold;
  color: #999999;
  line-height: 150%
}

.article{
  text-align: left;
  font-size: 0.9em;
  color: #999999;
  line-height: 200%
}

.thumbnail{
  border:none;
  text-align: center;
}

.question{
  text-align: left;
  font-size:1em;
  color: #666666;
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
      <p class="article-title">支付方式</p>
      <p style="color:#f3bd39;">方式一：支付宝</p>
      <p>如果您已经拥有了支付宝账户，可选择支付宝进行付款。有关于如何使用支付宝等信息，请查看：支付宝使用帮助（<a href="http://home.alipay.com/individual/tutorial.htm" style="color:#f3bd39;text-decoration:underline">http://home.alipay.com/individual/tutorial.htm</a>）。</p>
   
      <div class="thumbnail col-md-12">
            <img src="<?=base_url()?>static/index/images/bottom4.1.jpg" alt="支付宝">
      </div>  
      
      <p style="color:#f3bd39;">方式二：其他支付</p>
      <p>目前还在开发中。</p>
      <br><br>
      
      <p class="article-title">配送说明</p>
      <p>下单时填写了收货地址后，系统会默认为您选择我们的合作快递公司发货。<br>1、港、澳、台及海外暂不支持配送。<br>2、普通快递不到的地区：新疆、西藏、宁海、青海、内蒙古统一发EMS。<br>3、预付款不支持货到付款。<br>4、如有任何问题或特殊配送需求请在预购前咨询客服：<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;邮箱：tea_in_1707@163.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QQ：2914517673<br>
      5、运费说明：快递配送费用，江浙沪6元，其他省份12元（新疆、西藏、宁夏、青海、内蒙古等地区除外）</p>

       <div class="thumbnail col-md-12">
            <img src="<?=base_url()?>static/index/images/bottom4.2.jpg" alt="cloth">
       </div>
    </div
</div>

</div>


   <!-- 全部结束 -->
    <!--footer-->
<?php 
  $this->load->view('footer');
 ?>


</body>
</html>
