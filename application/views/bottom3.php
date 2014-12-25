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
      <p class="article-title">版权说明</p>
      <p>我们郑重承诺：<br>
        1、所有设计品版权由设计师个人所有；<br>
        2、任何个人或者组织机构未经设计师同意，不得擅自转载、盗用和传播创艺师的设计作品。如未经授权用作他处，作者将保留追究侵权者法律责任的权利。<br>
        3、若设计师设计品本身存在盗用、抄袭嫌疑，原作者可与我们取得联系，缇音网将负责对项目进行审查并及时将项目下架。但由于版权归设计师所有，缇音网不承担任何法律责任。
</p><br>
            
      <p class="article-title">隐私声明</p>
      <p>缇音网注重保护用户个人信息和个人隐私。本隐私权保护声明解释了用户个人信息收集和使用的有关情况，本隐私权保护声明适用于缇音网的所有相关服务。</p>
      <br>
      <p style="color:#f3bd39;font-size:1.8em;font-weight:bold">您个人信息的管理</p><br>
      <p class="question">缇音网会在如下情形使用您的个人信息：</p> 
      <p>1、符合法律法规的要求；<br>
         2、根据您的授权；<br>
         3、符合缇音网相关服务条款、网站许可使用协议的约定；</p>

      <p class="question">缇音网不会未经允许向第三方披露您的个人信息。除非满足下述情形之一： </p>
       <p>1、根据法律法规的规定；<br>
          2、符合您与缇音网之间的相关服务条款、网站许可使用协议的约定；</p>

      <br><p style="color:#f3bd39;font-size:1.8em;font-weight:bold">您个人信息的安全</p><br>
      <p>缇音网严格保护您的个人信息安全。我们使用各种制度、安全技术和程序等措施来保护您的个人信息不被未经授权的访问、使用或泄漏。如果您对我们的个人信息保护有任何疑问，请联系我们tea_in_1707@163.com。</p>

      <br><p style="color:#f3bd39;font-size:1.8em;font-weight:bold">访问您的个人信息</p><br>
      <p>如果您注册了缇音网相关服务，您可以查阅或编辑您提交给缇音网的个人信息。一般情况下，您可随时浏览、修改自己提交的信息，但出于安全性和身份识别（如号码申诉服务）的考虑，您可能无法修改注册时提供的初始注册信息及其他验证信息。</p>

      <br><p style="color:#f3bd39;font-size:1.8em;font-weight:bold">Cookie 的使用</p><br>
      <p>缇音网使用 Cookie 来帮助您实现您的联机体验的个性化。Cookie 是由网页服务器存放在您的访问设备上的文本文件。指定给您的 Cookie 是唯一的，它只能被将 Cookie 发布给您的域中的 Web 服务器读取。<br>
      Cookie 的主要用途之一是提供一种节约时间的实用功能。例如，如果您将缇音网的网页个性化，或在缇音网多个服务上注册，Cookie 会帮助您在后续访问时调用您的信息。这样可以简化记录您填写个人信息（例如一键登录等）的流程。当您返回到缇音网时，缇音网可以调出您以前所提供的信息，使您能够容易地使用您自定义的功能。<br>
      您有权接受或拒绝 Cookie。大多数浏览器会自动接受 Cookie，但您通常可根据自己的需要来修改浏览器的设置以拒绝 Cookie。如果拒绝 Cookie，那么您可能无法完全体验所访问的缇音网服务或网站的互动功能。
      </p>

      <br><p style="color:#f3bd39;font-size:1.8em;font-weight:bold">未成年人的个人信息保护</p><br>
      <p>缇音网严格保护您的个人信息安全。我们使用各种制度、安全技术和程序等措施来保护您的个人信息不被未经授权的访问、使用或泄漏。如果您对我们的个人信息保护有任何疑问，请联系我们service@tea-in.net。</p>

      <br><p class="article-title">服务条款</p><br>
      <p>为使用缇音网给您提供的服务，您应当阅读并遵守《缇音网服务协议》（以下简称“本协议”）。请您务必审慎阅读、充分理解各条款的内容。除非您已阅读并接受本协议所有条款，否则您无权使用缇音网给您提供的服务。您使用缇音网的服务即视为您已阅读并同意上述协议的约束。</p>  

      <br><p style="color:#f3bd39;font-size:1.8em;font-weight:bold">关于退货</p><br>
      <p>缇音网致力于帮您制作高品质的产品，及时印制和配送。如果您在拿到产品后的十天之内对产品不满意，缇音网将接收退货并全额退款。退货的原因包括产品本身有缺陷、破损、产品印制模糊不清，或者最终产品和之前网站上展示的产品设计大不相同。如果您对产品或服务有任何不满，请联系我们tea_in_1707@163.com</p>

      <br><p style="color:#f3bd39;font-size:1.8em;font-weight:bold">知识产权</p><br>
      <p>缇音网在本服务中提供的信息内容（包括但不限于网页、文字、图片、logo、配色方案和设计商标）的知识产权均归缇音网所有，但用户在使用本服务前对自己发布的信息已经取得合法知识产权的除外。 缇音网全权决定您的设计是否适合发布。产品设计如果涉及到如下内容，那么缇音网有权力删除相关信息，包括但不限于：<br><br>
      1、图案设计、描述危害国家安全统一、破坏社会稳定、违反公序良俗、侮辱、诽谤、淫秽、暴力，以及任何违反国家法律法规的内容<br>
      2、图案设计侵害他人知识产权、商业秘密等合法权利的内容<br>
      3、图案设计包含自虐、自杀等消极信息，误导欺骗预购者、设计描述与图案设计严重不符<br>
      4、其他涉及了法律法规禁止的行为<br><br>
      如果违反了如上的约定，相关国家机关或机构可能对您提起诉讼、罚款或采取其他制裁措施，并要求缇音网给予协助。造成损害的，应依法予以赔偿，缇音网不负责承担任何责任。</p>
      <p>缇音网提供了一个基于互联网的产品设计服务，如果您的设计没有侵犯第三方知识产权（比如版权，商标，商业外观和宣传权），我们将有权力印制您提交的图案设计。同时我们鼓励知识产权的所有者与我们取得联系，如果他认为我们所服务的用户已经侵犯了他们的权利，我们将会酌情删除用户提交的图案设计，终止用户继续使用我们的服务。 如果您的产品设计广受欢迎，在第一次预购结束后，我们将联系并建议您开始进行对于同样设计第二次乃至更多次的预购活动。缇音网不会在未经您授权的情况下出售印有您设计的产品。</p>
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
