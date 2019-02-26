@extends('admin.layout.index')

@section('main')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-pencil"></i>添加轮播图</span>
    </div>
    <div class="mws-panel-body no-padding">
    	<!-- 显示错误信息 -->
		@if (count($errors) > 0)
		    <div class="mws-form-message error">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
    	<form  action="/admin/carousel" method="post" enctype="multipart/form-data" class="mws-form">
    		{{csrf_field()}}
        	<div class="mws-form-inline">
            	<div class="mws-form-row">
                	<label class="mws-form-label">内容描述</label>
                	<div class="mws-form-item">
                    	<input type="text" class="large" name='title' value="" placeholder="内容描述">
                    </div>
                </div>
                <div class="mws-form-row">
                	<label class="mws-form-label">链接地址</label>
                	<div class="mws-form-item">
                    	<input type="text" class="large" name='link_url' value="" placeholder="链接地址">
                    </div>
                </div>
            	<div class="mws-form-row">
                	<label class="mws-form-label">图片上传</label>
                	<div class="mws-form-item">
                    	<input type="file" name='img_src' value="" class="large" >
                    </div>
                </div>
             
                <div class="mws-button-row">
                        <input type="submit" value="添加" class="btn btn-info">
                        <input type="reset" value="重置" class="btn ">
                </div>
            </div>
        </form>
    </div>    	
</div>
@endsection