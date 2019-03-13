@extends('admin.layout.index')

@section('main')
	<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-pencil"></i>添加公告</span>
    </div>
    <div class="mws-panel-body no-padding">
    	<!-- 显示错误信息 -->
	
    	<form  action="/admin/announcement/{{$data->id}}" method="post" enctype="multipart/form-data" class="mws-form">
    		{{csrf_field()}}
    		{{method_field('PUT')}}
        	<div class="mws-form-inline">
            	<div class="mws-form-row">
                	<label class="mws-form-label">公告标题</label>
                	<div class="mws-form-item">
                    	<input type="text" class="large" name='title' value="{{$data->title}}" placeholder="公告标题">
                    </div>
                </div>
                <div class="mws-form-row">
                	<label class="mws-form-label">作者</label>
                	<div class="mws-form-item">
                    	<input type="text" class="large" name='auth' value="{{$data->auth}}" placeholder="作者">
                    </div>
                </div>
                 <div class="mws-form-row">
                    <label class="mws-form-label">链接</label>
                    <div class="mws-form-item">
                        <input type="text" class="large" name='href' value="{{$data->href}}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">修改图片</label>
                    <div class="mws-form-item">
                        <input type="file" class="large" name='logo' value="{{$data->logo}}">
                         <p style="max-width:200px;">
                            <img src="/uploads/{{$data->logo}}">
                        </p>
                    </div>
                </div>
               
            	<div class="mws-form-row">
                	<label class="mws-form-label">内容</label>
                	<div class="mws-form-item">
                    	   <!-- 加载编辑器的容器 -->
   						 <script id="container" name="content" type="text/plain">
        						{!! $data->content !!}
    					</script>
                    </div>
                </div>
             
                <div class="mws-button-row">
                        <input type="submit" value="修改" class="btn btn-info">
                        <input type="reset" value="重置" class="btn ">
                </div>
            </div>
        </form>
    </div>    	
</div>
<!-- 配置文件 -->
    <script type="text/javascript" src="/admins/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/admins/utf8-php/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container');
    </script>
@endsection