@extends('admin.layout.index')

@section('main')
	<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-pencil"></i>添加公告</span>
    </div>
    <div class="mws-panel-body no-padding">
    	<form  action="/admin/topic/{{$data->id}}" method="post" enctype="multipart/form-data" class="mws-form">
    		{{csrf_field()}}
    		{{method_field('PUT')}}
        	<div class="mws-form-inline">
            	<div class="mws-form-row">
                	<label class="mws-form-label">话题标题</label>
                	<div class="mws-form-item">
                    	<input type="text" class="large" name='title' value="{{$data->title}}" placeholder="公告标题">
                    </div>
                </div>
               <!--  <div class="mws-form-row">
                	<label class="mws-form-label">作者</label>
                	<div class="mws-form-item">
                    	<input type="text" class="large" name='pname' value="" placeholder="作者">
                    </div>
                </div> -->
                <div class="mws-form-row">
                    <label class="mws-form-label">头像</label>
                    <div class="mws-form-item">
                        <input type="file" class="large" name='logo'value="{{$data->logo}} placeholder="作者头像" >
                         <p style="max-width:200px;">
                            <img src="/uploads/{{$data->logo}}">
                        </p>
                    </div>
                </div>
                 <div class="mws-form-row">
                    <label class="mws-form-label">地址</label>
                    <div class="mws-form-item">
                        <input type="text" class="large" name='url' value="{{$data->url}}" >
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

@endsection