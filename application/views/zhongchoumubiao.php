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
            /*border :2px solid #ddd;*/
            height: 600px;
        }
        .right .num{
            border:2px solid rgb(225,225,225);
            padding:15px 15px 0px 15px;
            /*text-align: center;*/
            position: relative;

        }
        .right .num .num-inc {
            margin-top: -10px;
            margin-bottom: 10px;
        }
        .right .num .num-inc div{
            display: inline-block;
            width:8.2%;
            text-align: center;
        }

        .right .num:hover{
            border: 2px solid rgb(244,190,63);
        }
        .right .num input{
            width: 88%;
            /*margin-bottom: 20px;*/
            vertical-align: sub;
            display: inline;
        }

        .right .price{
            border:2px solid rgb(225,225,225);
            margin-top: 10px;
            padding:15px ;
            margin-right: 5px;
        }
        .right .price:hover{
            border: 2px solid rgb(244,190,63);
        }
       
        .right .total-time{
            border:2px solid rgb(225,225,225);
            margin-top: 10px;
            padding:15px;
            margin-left: 5px;
        }
        .right .total-time:hover{
            border: 2px solid rgb(244,190,63);
        }
        .right .total-time select{
            /*width: 100px;
            height: 30px;*/
            /*border:1px solid #bbb;*/
            margin-bottom: 10px;
        }

        .right .profit{
            padding: 15px 20px;
            margin-top: 10px;
            border:2px solid rgb(225,225,225);

        }
        .right .profit:hover{
            border: 2px solid rgb(244,190,63);
        }

        .right .profit .btn{
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
            <li class="active">2.众筹目标</li>
            <li>3.文字描述</li>
            <li>4.发起成功</li>
            <li class="back"><a href="#">返回</a></li>
        </ul>

        <div class="row" style="margin-left: 0px;margin-right: 0px;">
            <div class="col-md-6 p0 clearfix">
                <div class="left clearfix">
                    <?php foreach($imgs as $key1=>$val1):?>
                      <img class="scroll-img" style="<?=$key1!=0?'display:none;':''?>" src="<?=base_url().$val1?>" width="74.32%" height="466" alt="" />
                    <?php endforeach;?>
                    <!-- <img src="" width="80%" height="400" alt=""> -->
                    <div class="btn-group btn-group-justified">
                    <?php foreach($imgs as $key=>$val):?>
                      <div class="btn-group">
                        <button type="button" class=" btn <?=$key==0?'active':''?>  btn-default"><?=$key+1?></button>
                      </div>
                    <?php endforeach;?>
                     <!--  <div class="btn-group">
                       <button type="button" class=" btn active  btn-default">1</button>
                     </div> -->
                      
                     
                    </div>

                </div>
            </div>
             <div class="col-md-6 p0">
                <div class="right">
                  <form action="<?=site_url()?>/index/wenzimiaoshu" >
                   <div class="num clearfix">
                       <p class="font-yellow" style="font-size:16px;">设定众筹数目</p>
                       <div class="progress">
                          <div class="progress-bar " role="progressbar" aria-valuenow="600" aria-valuemin="0" aria-valuemax="1000" style="width: 60%;background:rgb(244,190,63);">
                            <span class="">600</span>
                          </div>
                        </div>

                        <div class="num-inc">
                            <div >0</div>
                            <div >100</div>
                            <div >200</div>
                            <div >300</div>
                            <div >400</div>
                            <div >500</div>
                            <div >600</div>
                            <div >700</div>
                            <div >800</div>
                            <div >900</div>
                            <div >1000</div>
                       </div>
                       <p style="color:#333;">设定你所期望的众筹数目最小值;<br>
                       最终众筹量大于等于该值，确定生产;<br>
                       改数目的浮动会影响产品成本价;
                       </p>

                       <div style="position:absolute;bottom:10px;right:17px;">
                           <input type="number" name="amount" class="form-control" value="600" style="border-radius: 5px;border:1px solid #ddd;width:120px;" />
                       </div>

                   </div>
                   <div class="row m0">
                       <div class="col-md-6 p0">
                           <div class="price">
                               <p style="color:#f3bd39;margin-bottom:5px;">设定产品单价</p>
                               <p style="color:#333;font-size:12px;">设置您产品的销售价格.</p>
                               <div class="input-group"  style="margin-left:0px;">
                                  <span class="input-group-addon">￥</span>
                                  <input name="price" type="number" class="form-control"  value="10" required />
                                </div>
                               
                               <p  class="font-yellow" data-name="price" style="margin-bottom: 0px;">单件价格：￥10</p>
                           </div>
                       </div>
                        <div class="col-md-6 p0">
                           <div class="total-time">
                                <p style="color:#f3bd39;margin-bottom:5px;">设定众筹时长</p>
                                 <p style="color:#333;font-size:12px;">到达设置时长后众筹结束.</p>
                                <select name="day" id="" class="form-control">
                                    <option value="7">7天</option>
                                    <option value="14">14天</option>
                                    <option value="21">21天</option>
                              
                                </select>
                                 <p  class="font-yellow" date-name="day" style="margin-bottom: 0px;">截止日期：</p>
                           </div>
                       </div>
                   </div>
                   <div class="profit">
                       <p style="color:#333;margin-bottom: 0px;">预计销售额</p>
                        <p class="font-yellow" style="font-size:38px;margin-left: -7px;margin-bottom: 0px;" >￥199.00+</p>

                       <button type="submit" class="btn btn-default btn-lg">
                           下一步
                       </button>
                   </div>
                   </form>
                </div>
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
          $('input[name=amount]').on('input',function(){
            var val=$(this).val();
            $('div[role=progressbar]').find('span').text(val);
            var p=(parseInt(val)/10)
            $('div[role=progressbar]').css('width',p+'%');
          });

          $('input[name=price]').on('input',function(){
            var val=$(this).val();
            $('p[data-name=price]').text('单件价格：￥'+val);
          });

          $('select[name=day]').on('change',function(){
            var val=parseInt($(this).val());
            var d=new Date();
            d.setDate(d.getDate()+val);
            var t=FormatDate(d,'yyyy-MM-dd');
            $('p[date-name=day]').text('截止日期：'+t);
          });

          (function(){
            var val=parseInt($('select[name=day]').val());
            var d=new Date();
            d.setDate(d.getDate()+val);
            var t=FormatDate(d,'yyyy-MM-dd');
            $('p[date-name=day]').text('截止日期：'+t);
          })();


         

        })();
    });
  function FormatDate(date,str) 
        { 
            str=Replace(str,"yyyy",date.getFullYear()); 
            str=Replace(str,"MM",GetFullMonth(date)); 
            str=Replace(str,"dd",GetFullDate(date)); 
            str=Replace(str,"yy",date.getYear(date)); 
            str=Replace(str,"M",date.getMonth()+1); 
            str=Replace(str,"d",date.getDate()); 
            return str; 
         } 
function Replace(str,from,to) 
{ 
return str.split(from).join(to); 
} 
function GetFullMonth(date) 
{ 
var v=date.getMonth()+1; 
if(v>9)return v.toString(); 
return "0"+v; 
} 
 
// 返回日 （修正为两位数） 
function GetFullDate(date) 
{ 
var v=date.getDate(); 
if(v>9)return v.toString(); 
return "0"+v; 
} 
</script>
</html>