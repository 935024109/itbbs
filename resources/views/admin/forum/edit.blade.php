@extends('admin.layout.index')

@section('main')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-pencil"></i>修改模板分类</span>
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
    	<form  action="/admin/forum/{{ $forum->fid }}" method="post" class="mws-form">
    		{{csrf_field()}}
    		{{ method_field('PUT') }}
        	<div class="mws-form-inline">
            	<div class="mws-form-row">
                	<label class="mws-form-label">分类名称</label>
                	<div class="mws-form-item">
                    	<input type="text" class="large" name='fname' value="{{ $forum->fname }}" placeholder="">
                    </div>
                </div>
                <div class="mws-form-row">
                	<label class="mws-form-label">分类状态</label>
                	<div class="mws-form-item">
                    	
                    	
                    	<input type="radio"  name='status' value="1" {{ $forum -> status == 1 ? 'checked':''}} >已激活
                    	
                    	<input type="radio"  name='status' value="0" {{ $forum -> status == 1 ? '':'checked'}} >未激活
                    	
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