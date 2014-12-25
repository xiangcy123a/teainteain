<div id="project" class="wrap clearfix">
        <div class="filter">
          <h2>项目筛选</h2>
          <div>状态</div>
          <ul data-target="status">
            <li>未处理</li>
            <li>未通过</li>
            <li>众筹中</li>
            <li>成功</li>
            <li>失败</li>
          </ul>
          <div>特殊</div>
            <ul  data-target="super">
              <li class="index">首页项</li>
              <li>标记项</li>
              <li>冻结项</li>
              <li class="garb">垃圾箱</li>
            </ul>
        </div>
        <div class="con">
          <div class="func">
            <input class="check-func" type="checkbox">
            <span class="all">全选</span>
            <span class="del" >删除</span>
            <span class="unfree" >冻结</span>
            <span class="flag" >标记</span>
            <span>提到首页</span>
            <div class="search">
              <input class ="searchq" type="text">
              <button>搜索</button>
            </div>
          </div>
          <table class="table">
            
              <tr class="head">
                <th></th>
                <th>项目编号</th>
                <th>图片</th>
                <th>截止日期</th>
                <th>时长</th>
                <th>设计师</th>
                <th>分享</th>
                <th>显示成本</th>
                <th>实际成本</th>
                <th>显示数量</th>
                <th>实际数量</th>
                <th>目标数量</th>
                <th>款式</th>
                <th>颜色</th>
                <th>项目状态</th>
                <th>查看项目</th>
                <th>编辑选项</th>
              </tr>
            <!--
              <tr>
                <td>
                  <input type="checkbox">
                </td>
                <td>T001</td>
                <td>转到</td>
                <td>2014/08/26</td>
                <td>10天</td>
                <td>zyy</td>
                <td>网址</td>
                <td>15</td>
                <td><span>10</span></td>
                <td><span>10</span></td>
                <td>30</td>
                <td>50</td>
                <td>32织</td>
                <td>红，黄，蓝</td>
                <td>未处理</td>
                <td>链接</td>
                <td>编辑原因</td>
              </tr> 
              -->
          </table>
          <div class="page">
            <p>
              当前第<span class="currentpage" style="color:red;padding-left: 10px;padding-right:10px;">1</span>页
                <!--
               首页&nbsp;&nbsp;|&nbsp;&nbsp;<span class="prepage">上一页</span>&nbsp;&nbsp;|&nbsp;&nbsp;<span class="nextpage">下一页</span>&nbsp;&nbsp;|&nbsp;&nbsp;尾页
                -->
              <select name="" class="all_page">
                
              </select> 共<span class="totalpage" style="color:red;padding-left: 10px;padding-right:10px;">12</span>个项目
            </p>
          </div>
        </div>
      </div>
<script>
  jQuery(function($){
    var page=1;
    var pagesize=10;
    var total=1;
    var like=$.trim($('.searchq').val());
    var where=' garb=0 ';
    var initdata=function(){
      $('.searchq').val('');
      var page=1;
      var pagesize=10;
      var total=1;
      var like=$.trim($('.searchq').val());
      var where=' garb=0 ';
    }
    var initfun=function(){
      like=$.trim($('.searchq').val());
      $.ajax({
      'url':"<?=site_url('manage/select_project')?>",
      'type':'get',
      'dataType':'json',
      'data':{'page':page,'pagesize':pagesize,'like':like,'where':where},
      'success':function(data){
        if(data){
            $('.table').find('tr:gt(0)').remove();
            $.each(data.cloths,function(index,val){
                $add='<tr><td><input data-id="'+val.cloth_id+'" type="checkbox"></td><td>'+val.cloth_id+'</td><td><a href="'+val.img_src+'">转到</a></td><td>'+val.deadline+'</td><td>10天</td><td>'+val.user_id+'</td><td>网址</td><td>15</td><td><span>10</span></td><td><span>10</span></td><td>30</td><td>50</td><td>32织</td><td>'+val.color1+'</td><td>'+val.status+'</td><td>链接</td><td>编辑原因</td></tr>';
                $('.table').append($add);
            });
            $('.page').find('.currentpage').text(page);
            $('.page').find('.totalpage').text(data.total);
            total=data.total;
            var options='';
            for(var i=1;i<=Math.ceil(data.total/pagesize);i++){
              if(i==page){
                options+='<option selected="selected">'+i+'</option>';
              }else{
                options+='<option>'+i+'</option>';
              }
            }
            $('.page').find('.all_page').empty().append(options);
          }
        }
      });
    }
    initfun();
    $('.search button').on('click',function(e){
      page=1;
      initfun();
    });

    $('.all_page').on('change',function(e){
      var val=$(this).val();
      page=val;
      initfun();
    });
    $('.filter ul[data-target=status]>li').on('click',function(e){
      if(!$(this).hasClass('active')){
        //$(this).siblings('li').removeClass('active').end().addClass('active');
        $('.filter').find('li').removeClass('active');
        $(this).addClass('active');
        var text=$.trim($(this).text());
        //$('.searchq').val('');
        where=' garb=0 and status=\''+text+'\'';
        page=1;
        initfun();
      }

    });

    $('.filter ul[data-target=super]>li').on('click',function(e){
      if(!$(this).hasClass('active')){
        $('.filter').find('li').removeClass('active');
        $(this).addClass('active');
        if($(this).hasClass('garb')){
          where=' garb=1 ';
          page=1;
          initfun();
        }else if($(this).hasClass('index')){
          where=' garb=0 and cloth_id in(4,5,6,7,8,9,10,11,12,20,29,30) ';
          page=1;
          initfun();
        }

        
      }

    });



    $('.check-func').on('click',function(e){
      var bool=$(this).prop('checked');
      $('.table').find(':checkbox').prop('checked',bool);
    });
    $('.all').on('click',function(){
      $('.table').find(':checkbox').prop('checked',true);
      $('.check-func').prop('checked',true);
    });
    $('.del').on('click',function(){
      var ids='';
      $('.table').find(':checkbox').filter(function(){  
        if($(this).prop('checked')){
          var id=$(this).attr('data-id');
          ids+=(id+',');
        }
      });
      if(ids.length>0){
        ids=ids.substr(0,ids.length-1);
        $.ajax({
          'url':"<?=site_url('manage/del_cloth')?>",
          'type':'post',
          'dataType':'json',
          'data':{'ids':ids},
          'sync':false,
          'success':function(data){
            if(data){
              alert('删除成功!');
              initdata();
              initfun();
            }else{
              alert('删除失败!');
            }
          }
        });
      }  
    });
  });


</script>