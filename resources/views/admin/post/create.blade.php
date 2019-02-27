@extends('admin.layout.index')



@section('main')

@if (count($errors) > 0)
    <div class="mws-form-message error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span>添加帖子</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="/admin/post" method="post">
                    		{{ csrf_field() }}
                    		<div class="mws-form-inline">

                    			<div class="mws-form-row">
                    				<label class="mws-form-label">所属分类</label>
                    				<div class="mws-form-item">

                    					<select name="fid" id="p_type">
									       <option value="">选择分类↓</option>
                                          @foreach($forum as $k=>$v)
									       <option value="{{ $v->fid }}">{{ $v->fname }}</option>
										  @endforeach
										</select>
                    				</div>
                    			</div>

                    			<div class="mws-form-row">
                    				<label class="mws-form-label">帖子标题</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name="title" value="{{ old('title') }}"  >
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">帖子内容</label>
                    				<div class="mws-form-item">
                    					<textarea rows="" cols="" class="large" name="content" >{{ old('content') }}</textarea>
                    				</div>
                    			</div>
                    			
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">是否可以回复</label>
                    				<div class="mws-form-item clearfix">
                    					<ul class="mws-form-list inline">
                    						<li><input type="radio" checked name="revert" value="1"> <label>允许回复</label></li>
                    						<li><input type="radio" name="revert" value="0"> <label>不允许回复</label></li>
                    					
                    					</ul>
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">是否顶置</label>
                    				<div class="mws-form-item clearfix">
                    					<ul class="mws-form-list inline">
                    						<li><input type="radio" name='top' value="1"> <label>顶置</label></li>
                    					</ul>
                    				</div>
                    			</div>


                    			
                    		</div>
                    		<div class="mws-button-row">
                    			<input type="submit" value="提交" class="btn btn-danger">
                    			<input type="reset" value="重置" class="btn ">
                    		</div>
                    	</form>
                    </div>    	
                </div>
@endsection

