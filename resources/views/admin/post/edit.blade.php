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
                    	<form class="mws-form" action="/admin/post/{{ $post->pid }}" method="post">
                    		{{ csrf_field() }}
                    		{{ method_field('PATCH') }}
                    		<div class="mws-form-inline">

                    			<div class="mws-form-row">
                    				<label class="mws-form-label">所属分类</label>
                    				<div class="mws-form-item">
										<input type="text" class="small" name="fid" value="{{ $post->Forum->fname }}"  readonly>
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">发帖人</label>
                    				<div class="mws-form-item">
										<input type="text" class="small" name="uid" value="{{ $post->User->uname }}"  readonly>
                    				</div>
                    			</div>

                    			<div class="mws-form-row">
                    				<label class="mws-form-label">帖子标题</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name="title" value="{{ $post->title }}"  >
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">帖子内容</label>
                    				<div class="mws-form-item">
                    					<textarea rows="" cols="" class="large" name="content" >{{ $post->title }}</textarea>
                    				</div>
                    			</div>
                    			
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">是否可以回复</label>
                    				<div class="mws-form-item clearfix">
                    					<ul class="mws-form-list inline">
                    						<li>
                    							<input type="radio" name="revert" value="1" @if($post->revert == 1) checked @endif> <label>允许回复</label>
                    						</li>
                    						<li>
                    							<input type="radio" name="revert" value="0" @if($post->revert == 0) checked @endif> <label>不允许回复</label>
                    						</li>
                    					
                    					</ul>
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">是否顶置</label>
                    				<div class="mws-form-item clearfix">
                    					<ul class="mws-form-list inline">
                    						<li><input type="radio" name='top' value="1" @if($post->top == 1) checked @endif> <label>顶置</label></li>
                    						<li><input type="radio" name='top' value="0" @if($post->top == 0) checked @endif> <label>无顶置</label></li>
                    					</ul>
                    				</div>
                    			</div>

                    			<div class="mws-form-row">
                    				<label class="mws-form-label">是否加精</label>
                    				<div class="mws-form-item clearfix">
                    					<ul class="mws-form-list inline">
                    						<li>
                    							<input type="radio" name='hot' value="1" @if($post->hot == 1) checked @endif> <label>加精</label>
                    						</li>
                    						<li>
                    							<input type="radio" name='hot' value="0" @if($post->hot == 0) checked @endif> <label>无加精</label>
                    						</li>
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