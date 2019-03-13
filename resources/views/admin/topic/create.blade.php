@extends('admin.layout.index')

@section('main')
	<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-pencil"></i>添加公告</span>
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
    	<form  action="/admin/topic" method="post" enctype="multipart/form-data" class="mws-form">
    		{{csrf_field()}}
        	<div class="mws-form-inline">
            	<div class="mws-form-row">
                	<label class="mws-form-label">话题标题</label>
                	<div class="mws-form-item">
                    	<input type="text" class="large" name='title' value="" placeholder="公告标题">
                    </div>
                </div>
               
                <div class="mws-form-row">
                    <label class="mws-form-label">头像</label>
                    <div class="mws-form-item">
                        <input type="file" class="large" name='logo' placeholder="作者头像" >
                    </div>
                </div>
                 <div class="mws-form-row">
                    <label class="mws-form-label">地址</label>
                    <div class="mws-form-item">
                        <input type="text" class="large" name='url' value="" >
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">帖子ID</label>
                    <div class="mws-form-item">
                           <select name="pid" id="selectAge">   
                                <option value="">--选择帖子--</option>   
                                @foreach($post as $k => $v)
                                    <option value="{{$v->pid}}">{{$v->title}}</option>  
                                @endforeach 
                            </select>   
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