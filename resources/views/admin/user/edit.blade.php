@extends('admin/layout/index')
@section('main')
	@if (count($errors) > 0)
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span>添加用户</span>
        </div>
        <div class="mws-panel-body no-padding">
        	<form class="mws-form" action="/admin/user/{{$user->uid}}" method="post" enctype="multipart/form-data">
        		{{ csrf_field() }}
        		{{ method_field('PUT') }}
        		<div class="mws-form-inline">
        			<div class="mws-form-row">
        				<label class="mws-form-label">用户名</label>
        				<div class="mws-form-item">
        					<input type="text" class="small" name="uname" readonly value="{{ $user->uname }}">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">昵称</label>
        				<div class="mws-form-item">
        					<input type="text" class="small" name="nickname" value="{{ $user->nickname }}">
        				</div>
        			</div>

					<div class="mws-form-row">
        				<label class="mws-form-label">邮箱号</label>
        				<div class="mws-form-item">
        					<input type="email" class="large" name="email" value="{{ $user->email }}">
        				</div>
        			</div>

        			<div class="mws-form-row">
        				<label class="mws-form-label">手机号</label>
        				<div class="mws-form-item">
        					<input type="number" class="large" name="phone" value="{{ $user->phone }}">
        				</div>
        			</div>

					<div class="mws-form-row">
        				<label class="mws-form-label">权限</label>
        				<div class="mws-form-item">
        					<select name="auth">
								<option value="0" @if ($user->auth == 0) selected @endif>普通用户</option>
								<option value="1" @if ($user->auth == 1) selected @endif>版主</option>
								<option value="2" @if ($user->auth == 2) selected @endif>站长</option>
        					</select>
        				</div>
        			</div>
					
					<div class="mws-form-row">
        				<label class="mws-form-label">头像</label>
        				<div class="mws-form-item">
        					<img src="/uploads/{{$user->photo}}" style="width:60px;height:80px;">
        				</div>
        			</div>

        			<div class="mws-form-row">
        				<label class="mws-form-label">修改头像</label>
        				<div class="mws-form-item">
        					<input type="file" class="small" name="photo">
        				</div>
        			</div>

        		<div class="mws-button-row">
        			<input type="submit" value="提交修改" class="btn btn-success">
        			<input type="reset" value="重置" class="btn btn-info ">
        		</div>
        	</form>
        </div>    	
    </div>
@endsection