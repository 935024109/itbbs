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
        	<form class="mws-form" action="/admin/user" method="post" enctype="multipart/form-data">
        		{{ csrf_field() }}
        		<div class="mws-form-inline">
        			<div class="mws-form-row">
        				<label class="mws-form-label">用户名</label>
        				<div class="mws-form-item">
        					<input type="text" class="small" name="uname" value="{{ old('name') }}">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">昵称</label>
        				<div class="mws-form-item">
        					<input type="text" class="small" name="nickname" value="{{ old('name') }}">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">密码</label>
        				<div class="mws-form-item">
        					<input type="text" class="medium" name="pwd">
        				</div>
        			</div>

        			<div class="mws-form-row">
        				<label class="mws-form-label">确认密码</label>
        				<div class="mws-form-item">
        					<input type="text" class="large" name="repwd">
        				</div>
        			</div>

					<div class="mws-form-row">
        				<label class="mws-form-label">邮箱号</label>
        				<div class="mws-form-item">
        					<input type="email" class="large" name="email" value="{{old('email')}}">
        				</div>
        			</div>

        			<div class="mws-form-row">
        				<label class="mws-form-label">手机号</label>
        				<div class="mws-form-item">
        					<input type="number" class="large" name="phone" value="{{old('phone')}}">
        				</div>
        			</div>

					<div class="mws-form-row">
        				<label class="mws-form-label">权限</label>
        				<div class="mws-form-item">
        					<select name="auth">
								<option value="0">普通用户</option>
								<option value="1">版主</option>
								<option value="2">站长</option>
        					</select>
        				</div>
        			</div>

        			<div class="mws-form-row">
        				<label class="mws-form-label">头像上传</label>
        				<div class="mws-form-item">
        					<input type="file" class="small" name="photo">
        				</div>
        			</div>

        		<div class="mws-button-row">
        			<input type="submit" value="提交" class="btn btn-success">
        			<input type="reset" value="重置" class="btn btn-info ">
        		</div>
        	</form>
        </div>    	
    </div>
@endsection