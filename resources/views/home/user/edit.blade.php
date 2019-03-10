@extends('home.layout.index')

@section('main')
<!--  -->
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<link href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">



<div style="width:800px;margin:0 auto">
  @if (count($errors) > 0)
    <div class="alert alert-danger" >
        <ul>
            @foreach ($errors->all() as $error)
                <li >{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <form action="/home/user/{{ $user->uid }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
   <div id="pt" class="bm cl"> 
    <div class="z"> 
     <a href="./" class="nvhm" title="首页">兄弟连论坛_每个人的交流社区</a> 
     <em>›</em> 
     <a href="http://d.bbs.itxdl.cn/home.php?mod=spacecp">设置</a> 
     <em>›</em>个人资料 
    </div> 	
   </div> 
  <div class="form-group" >
    <label class="col-sm-2 control-label">账号</label>
    <div class="col-sm-10">
      <input type="test" name="uname" class="form-control"  readonly  value="{{ $user->uname}}">
    </div>
  </div>

		<div class="form-group">
		    <label  class="col-sm-2 control-label">手机号</label>
		    <div class="col-sm-10">
		      <input type="test" class="form-control" name="phone"  id="phone" readonly value="{{ $user->phone }}">
	    </div>
	</div>
  <input type="button" onclick="sendPhone(this)" id="sendBtn" value="免费获取验证码" class="btn btn-success" style="margin:0 15px">
  <br>
   <div class="form-group">
    <label class="col-sm-2 control-label">新密码</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="pwd" >
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">再次输入密码</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="repwd">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">手机验证码</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="code" >
    </div>
  </div>
  
<input type="submit" name="提交" class="btn btn-info" style="width:400px;margin:0 150px">
</div>
</form>

	

<script type="text/javascript">
  
    function editCon()
    {
      var t = 60;
      var time = null;
      if(time == null){
        time = setInterval(function(){
          t--;
          // 修改当前button 和 内容
          $('#sendBtn').val('重新发送('+t+'s)');
          if(t < 1){
            // 清除定时器
            clearInterval(time);
            time = null;
            $('#sendBtn').val('免费获取验证码');
            // 设置button状态
            $('#sendBtn').attr('disabled',false);
          }
        },1000);
      }
    }

    function sendPhone(obj)
    {
     alert($('#phone').val());
      //接收手机号码
      // console.log($('#phone'));
      var phone = $('#phone').val();
      // 定义正则检查手机号是否格式正确
      // 将js对象转化成jquery对象
      var object = $(obj);
      // 设置button状态
      object.attr('disabled',true);
      // 获取当前的按钮上的文字
      var text = object.val();
      
      if(text == '免费获取验证码'){
        // 发送ajax 请求后台 
        $.get('/home/user/phone/'+phone,function(data){
          // alert(data);
          if(data == '短信发送成功'){
            editCon();
            // alert(data);
          }else{
            alert(data);
          }
        },'html');  
      }else{
        return false;
      }
      
    }

  </script>
@endsection