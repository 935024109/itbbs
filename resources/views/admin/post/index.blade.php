@extends('admin.layout.index')

@section('main')
<link href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.css" rel="stylesheet">
<div class="table-responsive " >
		<div>
			<form action="/admin/post" method="get">
			<label style="margin:0 10px">显示 
			<select  name="count">
				<option value="5" @if(isset($request['count']) && $request['count']==5) selected @endif>5</option>
				<option value="10" @if(isset($request['count']) && $request['count']==10) selected @endif>10</option>
				<option value="15" @if(isset($request['count']) && $request['count']==15) selected @endif>15</option>
				<option value="30" @if(isset($request['count']) && $request['count']==30) selected @endif>30</option>
			</select> 条</label>

			<div style="float:right">
				<label>搜索: <input type="text" name="search"></label>
				<input type="submit" value="搜索" class="btn btn-info">
			</div>
			</form>
		</div>
					<table class="table table-bordered text-center">
                            <tr>
                                <th style="width:30px">ID</th>
                                <th style="width:155px">帖子标题</th>
                                <th style="width:150px">帖子内容</th>
                                <th style="width:85px">发帖人</th>
                                <th style="width:85px">所属板块</th>
                                <th style="width:100px">是/否顶置</th>
                                <th style="width:100px">是/否加精</th>
                                <th style="width:100px">是/否可以回复</th>
                                <th style="width:60px">回复</th>
                                <th style="width:185px">创建时间</th>
                                <!-- <th style="width:185px">最后回帖时间</th> -->
                                <th style="width:300px">操作</th>
                            </tr>
                            
                        
						@foreach($data as $k=>$v)
                        	<tr>
                                <td> {{ $v->pid }} </td>    
                                <td >
                                	<span title="{{ $v->title }}">
	                            		<p  style="width:150px;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;">
	                                 	 {{ $v->title }}
	                            		</p>
                                	</span>
                             	</td>    
                                <td >
                                	<span title="{{ $v->content }}">
	                            		<p  style="width:150px;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;">
	                                 	 {{ $v->content }}
	                            		</p>
                                	</span>
                                </td>    
                                <td> {{ $v->User->uname }} </td>    
                                <td> {{ $v->Forum->fname }} </td>    
                                <td> 

                                	@if($v->top == 0)
										<a href="/admin/post/top/{{ $v->pid }}" class="btn btn-info">Y</a>
										@else
										<a href="/admin/post/nottop/{{ $v->pid }}" class="btn btn-danger">N</a>
									@endif


                            	</td>    
                                <td> 

                                	@if($v->hot == 0)
											<a href="/admin/post/hot/{{ $v->pid }}" class="btn btn-info">Y</a>
										@else
											<a href="/admin/post/nothot/{{ $v->pid }}" class="btn btn-danger">N</a>
									@endif


                                 </td>    
                                <td style="line-height:0px;padding:auto 0;">
	                                @if($v->revert == 1)
											<a href="/admin/post/notrevert/{{ $v->pid }}" class="btn btn-danger">N</a>
										@else
											<a href="/admin/post/revert/{{ $v->pid }}" class="btn btn-info">Y</a>
									@endif


                             	</td>    
                                <td> {{ $v->ReplyCount($v->pid)}} </td>    
                                <td> {{ $v->created_at }} </td>    
                                <!-- <td> {{ $v->last_time }} </td>     -->
                                <td> 

									<form style="display:inline-block;" action="/admin/post/{{ $v->pid }}" method="post">	
										{{  csrf_field() }}
										{{  method_field('DELETE') }}
										<input type="submit" value="删除" class="btn btn-danger">
										
									</form>
									<form style="display:inline-block;" action="/admin/post/{{ $v->pid }}/edit">	
										<input type="submit" value="修改" class="btn btn-info">
									</form>
									
									<!-- ----------------------- -->
									<form style="display:inline-block;" action="/admin/reply/{{ $v->pid }}" method="get">	
										<input type="submit" value="查看回帖" class="btn btn-success">
									</form>
									<!-- <form style="display:inline-block;" action="/admin/reply/add/{{ $v->pid }}">	
										<input type="submit" value="添加回复" class="btn btn-primary">
									</form> -->
									<!-- ------------------------------ -->
								
                                </td>    
                            </tr>

                        @endforeach
                        
                        </table>
                     
		
		{{ $data->appends($request)->links() }}
								  
	
        </div>
@endsection