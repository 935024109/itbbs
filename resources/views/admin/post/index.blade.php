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
                                <th style="width:85px">是/否顶置</th>
                                <th style="width:85px">是/否加精</th>
                                <th style="width:85px">是/否可以回复</th>
                                <th style="width:85px">回复</th>
                                <th style="width:185px">创建时间</th>
                                <th style="width:185px">最后回帖时间</th>
                                <th style="width:370px">操作</th>
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

                                	{{ $v->top ? '是' : '否'}}

                                	
                            	</td>    
                                <td> 

                                	{{ $v->hot ? '是' : '否'}}


                                 </td>    
                                <td> {{ $v->revert ? '是' : '否'}} </td>    
                                <td> {{ $v->ReplyCount($v->pid)}} </td>    
                                <td> {{ $v->created_at }} </td>    
                                <td> {{ $v->last_time }} </td>    
                                <td> 
									<form style="display:inline-block;">	
										<input type="submit" value="删除" class="btn btn-danger">
									</form>
									<form style="display:inline-block;" action="/admin/post/{{ $v->pid }}/edit">	
										<input type="submit" value="修改" class="btn btn-info">
									</form>
									
										@if($v->hot == 0)
											<a href="/admin/post/hot/{{ $v->pid }}" class="btn btn-info">加精</a>
										@else
											<a href="/admin/post/nothot/{{ $v->pid }}" class="btn btn-danger">取消加精</a>
										@endif
									
										@if($v->top == 0)
										<a href="/admin/post/top/{{ $v->pid }}" class="btn btn-info">顶置</a>
										@else
										<a href="/admin/post/nottop/{{ $v->pid }}" class="btn btn-info">取消顶置</a>
										@endif
                                </td>    
                            </tr>

                        @endforeach
                        
                        </table>
                     
		
		{{ $data->appends($request)->links() }}
								  
	
        </div>
@endsection