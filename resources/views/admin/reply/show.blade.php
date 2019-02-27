@extends('admin.layout.index')


@section('main')
<link href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.css" rel="stylesheet">
<link href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.css" rel="stylesheet">
<div class="table-responsive " >
		<div>
			<form action="/admin/post" method="get">
			

			<div style="float:right">
				<label>搜索: <input type="text" name="search"></label>
				<input type="submit" value="搜索" class="btn btn-info">
			</div>
			</form>
			<table class="table table-bordered text-center" style="margin:0 10px;width:99%">
				<tr>
					<td>帖子ID</td>
					<td>帖子标题</td>
					<td>帖子内容</td>
					<td>楼主</td>
					<td>楼主ID</td>
					<td>所属板块</td>
					<td>最后回帖时间</td>
					<!-- <td>最后回帖人</td> -->
				</tr>
				<tr>
					<td>{{ $post->pid }}</td>
					<td>{{ $post->title }}</td>
					<td>{{ $post->content }}</td>
					<td>{{ $post->User->uname }}</td>
					<td>{{ $post->User->uid }}</td>
					<td>{{ $post->Forum->fname }}</td>
					<td>{{ $post->last_time }}</td>
					<!-- <td>{{ $post->last_time }}</td> -->
				</tr>
			</table>
			<hr>
		</div>
					<table class="table table-bordered text-center" style="margin:0 10px;width:99%">
                            <tr>
                                <th >ID</th>
                                <th >回复</th>
                                <th >回复内容</th>
                                <th >回复人账号</th>
                                <!-- <th >回复人ID</th> -->
                                <th style="width:300px">操作</th>
                            	@foreach($reply as $k=>$v)
                            </tr>
									<td> {{ $v->rid }} </td>
									<td> 
										@if($v->reply_id == 0)
											楼主
										@else
											{{ $v->reply_id }}
										@endif
									</td>
									<td> {{ $v->content }} </td>
									<td> {{ $v->User->uname }} </td>
									<!-- <td> {{ $v->User->uid }} </td> -->
                        			<td>
									<form style="display:inline-block;" action="/admin/reply/{{ $v->rid }}" method="post">	
										{{  csrf_field() }}
										{{  method_field('DELETE') }}
										<input type="submit" value="删除" class="btn btn-danger">
										
									</form>
                        			

									<!-- ----------------------- -->
							
								
                                    
                            </tr>
                            @endforeach
           
                        </table>
                     
		
	
								  
	
        </div>
@endsection

