@extends('admin.layout.index')

@section('main')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-pencil"></i>添加模板分类</span>
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
    	<form  action="/admin/forum" method="post" class="mws-form">
    		{{csrf_field()}}
        	<div class="mws-form-inline">
            	<div class="mws-form-row">
                	<label class="mws-form-label">分类名称</label>
                	<div class="mws-form-item">
                    	<input type="text" class="large" name='fname' value="" placeholder="">
                    </div>
                </div>
				<div class="mws-form-row">
    				<label class="mws-form-label">所属分类</label>
    				<div class="mws-form-item">
    					<select class="large" name="pid">
    						<option value="0">顶级分类</option>
    						@foreach($forums as $k => $v)
    						
    						<option value="{{ $v->fid }}" {{ $v->fid == $fid ? 'selected' : '' }}>{{ $v->fname }}</option>
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