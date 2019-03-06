@extends('admin.layout.index')



@section('main')
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.slim.min.js"></script>
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
                    	<form class="mws-form" action="/admin/post" method="post" >
                    		{{ csrf_field() }}
                    		<div class="mws-form-inline">

                    			<div class="mws-form-row">
                    				<label class="mws-form-label">所属分类</label>
                    				<div class="mws-form-item">
                                        
                    					<select name="fid" id="p_type" onchange="find(this)">
									       <option value="" >选择分类↓</option>
                                          @foreach($forum as $k=>$v)
									       <option value="{{ $v->fid }}" >{{ $v->fname }}</option>
										  @endforeach
										</select>
                                    <span id="error" class="label label-error" style="font-size:16px"></span>
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
                    						<li><input type="radio" checked name="revert" value="0"> <label>不允许回复</label></li>&nbsp;&nbsp;
                                            <li><input type="radio"  name="revert" value="1"> <label>允许回复</label></li>
                    					
                    					</ul>
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">是否顶置</label>
                    				<div class="mws-form-item clearfix">
                    					<ul class="mws-form-list inline">
                                            <li><input type="radio" checked name='top' value="0"> <label>不顶置</label></li>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                            <li><input type="radio"  name='top' value="1"> <label>顶 &nbsp;&nbsp;置</label></li> 
                    					</ul>
                    				</div>
                    			</div>

                                <div class="mws-form-row">
                                    <label class="mws-form-label">是否加精</label>
                                    <div class="mws-form-item clearfix">
                                        <ul class="mws-form-list inline">
                                            <li><input type="radio" name='hot' checked value="0"> <label>不加精</label></li> &nbsp;&nbsp; &nbsp;&nbsp;
                                            <li><input type="radio" name='hot' value="1"> <label>加 &nbsp;&nbsp;精</label></li>
                                        </ul>
                                    </div>
                                </div>




                    			
                    		</div>
                    		<div class="mws-button-row">
                    			<input type="submit" return false value="提交" class="btn btn-danger">
                    			<input type="reset" value="重置" class="btn ">
                    		</div>
                    	</form>
                    </div>    	
                </div>
                <script type="text/javascript">
                    function find(obj){
                        
                        var id = $(obj).val();
                        $.get('/admin/post/changepid/'+id,function(data){
                            if(data == 0){
                                $('#error').text('分区下不能建立帖子');
                                $(':submit').prop('disabled',true);
                            } else {
                                $('#error').text('请开始你的表演');
                                 $(':submit').prop('disabled',false);
                            }
                        });
                    }
                </script>
@endsection

