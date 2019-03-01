@extends('home/layout/index')

@section('main')
	<div id="ct" class="wp w cl" style="padding: 100px 0 100px 0;">
		<div class="nfl" id="main_succeed" style="display: none">
		<div class="f_c altw">
		<div class="alert_right">
		<p id="succeedmessage"></p>
		<p id="succeedlocation" class="alert_btnleft"></p>
		<p class="alert_btnleft"><a id="succeedmessage_href">如果您的浏览器没有自动跳转，请点击此链接</a></p>
		</div>
		</div>
		</div>
		<div class="mn" id="main_message">
		        <div class="ldLoginIntro cl" style="float: left; width: 400px;">
		           <img src="/homes/static/picture/main_fm365.png">
		        </div>
				<form style="float: right; width: 400px;" action="/home/user/in">
					<h1 align="center">登录</h1>
					@if (count($errors) > 0)
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
				  <div class="form-group">
				    <label for="exampleInputEmail1">用户名</label>
				    <input name="uname" type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入用户名">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">密码</label>
				    <input name="pwd" type="password" class="form-control" id="exampleInputPassword1" placeholder="请输入密码">
				  </div>
				  <div class="form-group">
                    	<input name="captcha" style="width:49%;height: 50px;" type="text" placeholder="验证码">  
					    <img style="border: 2px solid blue;width:49%;height: 50px;" src="{{captcha_src()}}" style="cursor: pointer" onclick="this.src='{{captcha_src()}}'+Math.random()">
					</div>
				  <button type="submit" class="btn btn-info" style="width: 100%;">点击登录</button>
				</form>
	</div>
		</div>
@endsection