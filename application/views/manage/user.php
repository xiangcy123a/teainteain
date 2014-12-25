<div id="people" class="wrap clearfix">
      <div class="filter">
      <h2>人员筛选</h2>
      <div>时间</div>
      <ul class="orderby">
        <li data-options="asc">升序</li>
        <li data-options="desc">降序</li>
      </ul>
      <div>人群</div>
        <ul>
          <li>设计师</li>
          <li>顾客</li>
        </ul>
        <!--
      <div>状态</div>
      <ul>
        <li>未处理</li>
        <li>未通过</li>
        <li>众筹中</li>
        <li>成功</li>
        <li>失败</li>
      </ul>
      <div>特殊</div>
      <ul>
        <li>首选项</li>
        <li>标记项</li>
        <li>冻结项</li>
        <li>垃圾箱</li>
        
      </ul>
      -->
    </div>

    <div class="con">
      <div class="func">
        <input class="check-func" type="checkbox">
        <span class="all" >全选</span>
        <span class="del" >删除</span>
        <span class="unfree" >冻结</span>
        <span class="flag" >标记</span>
       
        <div class="search">
          <input class ="searchq" type="text">
          <button>搜索</button>
        </div>
      </div>
      <table class="table">
        
          <tr class="head">
            <th></th>
            <th>ID</th>
            <th>昵称</th>
            <th>手机</th>
            <th>邮箱</th>
            <th>生日</th>
            <th>QQ</th>
            <th>发起的项目</th>
            <th>参与的订单</th>
            <th>设计师</th>
            <th>个人中心</th>
            <th>编辑选项</th>
          </tr>
      
        <!--
          <tr>
            <td>
              <input type="checkbox">
            </td>
            <td>12345678</td>
            <td>就爱笑</td>
            <td>18814888873</td>
            <td>851110276@qq.com</td>
            <td>1993/12/19</td>
            <td>851110276</td>
            <td><select name="" id="">
              <option value="1">1111</option>
            </select></td>
            <td><select name="" id="">
              <option value="1">1111</option>
            </select></td>
            <td>连接</td>
            <td>链接</td>
            <td>冻结 封号</td>            
          </tr>
          -->
      </table>
      <div class="page">
        <p>
          当前第<span class="currentpage" style="color:red;padding-left: 10px;padding-right:10px;">2</span>页 
          <!--
          首页&nbsp;&nbsp;|&nbsp;&nbsp;上一页&nbsp;&nbsp;|&nbsp;&nbsp;下一页&nbsp;&nbsp;|&nbsp;&nbsp;尾页
          -->
          <select name="" class="all_page">
          </select> 共<span class="totalpage" style="color:red;padding-left: 10px;padding-right:10px;">152</span>个项目
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
    var where='';
    var orderby='';
    var initdata=function(){
      $('.searchq').val('');
      var page=1;
      var pagesize=10;
      var total=1;
      var like=$.trim($('.searchq').val());
      var where='';
    }
    var initfun=function(){
      like=$.trim($('.searchq').val());
      $.ajax({
      'url':"<?=site_url('manage/select_user')?>",
      'type':'get',
      'dataType':'json',
      'data':{'page':page,'pagesize':pagesize,'like':like,'where':where,'orderby':orderby},
      'success':function(data){
        if(data){
            $('.table').find('tr:gt(0)').remove();
            $.each(data.users,function(index,val){
                $add='<tr><td><input   data-id="'+val.user_id+'"  type="checkbox"></td><td>'+val.user_id+'</td><td>'+val.nickname+'</td><td>'+val.phone+'</td><td>'+val.username+'</td><td>'+val.birth+'</td><td>'+val.QQ+'</td><td><select name="" id=""><option value="1">1111</option></select></td><td><select name="" id=""><option value="1">1111</option></select></td><td>连接</td><td>链接</td><td>冻结 封号</td></tr>';
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
        $(this).siblings('li').removeClass('active').end().addClass('active');
        //var text=$.trim($(this).text());
        //$('.searchq').val('');
       // where=' garb=0 and status=\''+text+'\'';
       // page=1;
        //initfun();
      }

    });

    $('.orderby li').on('click',function(e){
      if(!$(this).hasClass('active')){
        $(this).siblings('li').removeClass('active').end().addClass('active');
        var text=$.trim($(this).attr('data-options'));
        $('.searchq').val('');
        orderby=' order by user_id  '+text+' ';
        initdata();
        initfun();
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
          'url':"<?=site_url('manage/del_user')?>",
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