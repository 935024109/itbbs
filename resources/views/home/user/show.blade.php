@extends('home.layout.index')

@section('main')
<link href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.slim.js"></script>



  <div style="width:750px;margin:0 auto">
   <div id="pt" class="bm cl"> 
    <div class="z"> 
     <a href="/home" class="nvhm" title="首页">兄弟连论坛_每个人的交流社区</a>  
    
     <em>›</em>个人资料 
    </div> 	
   </div> 

   
  <div class="form-group" >
    <label for="inputEmail3" class="col-sm-2 control-label">账号</label>
    <div class="col-sm-10">
      <input type="test" class="form-control" id="inputEmail3" readonly value="{{ $user->uname }}">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">昵称</label>
    <div class="col-sm-10">
      <input type="test" class="form-control" id="inputPassword3" readonly value="{{ $user->nickname }}">
    </div>
  </div>
  <div class="form-group">
		<div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">邮箱</label>
		    <div class="col-sm-10">
		      <input type="test" class="form-control" id="inputPassword3" readonly value="{{ $user->email }}">
	    </div>
	</div>
</div>

	<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">手机号</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputPassword3" readonly value="{{ $user->phone }}">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">积分</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputPassword3" readonly value="{{ $user->score }}">
    </div>
  </div>

	<div class="form-group">
	 	<div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">最后登录时间</label>
		    <div class="col-sm-10">
		      <input type="test" class="form-control" id="inputPassword3" readonly value="{{ $user->last_time }}">
	    </div>
	</div>
  </div>
	<div class="form-group">
		<div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">用户注册时间</label>
		    <div class="col-sm-10">
		      <input type="test" class="form-control" id="inputPassword3" readonly value="{{ $user->created_at }}">
	    </div>
	</div>
</div>  
	
 	
 	<div class="form-group">
		<div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">头像</label>
		    <img src="/uploads/{{ $user->photo }}" class="img-rounded" style="width:140px;height:140px">
	    </div>
	</div>

  </div>


@endsection