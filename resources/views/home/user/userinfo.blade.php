@extends('home.layout.index')



@section('main')
<link href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.css" rel="stylesheet">

	<div class="bs-example" data-example-id="hoverable-table" style="width:1100px;margin:0 auto">
	<button class="btn btn-info">我的贴子</button>
	    <table class="table table-hover">
	      <thead>
	        <tr>
	          <th>序号</th>
	          <th>帖子名称</th>
	          <th>发帖时间</th>
	          <th>回复量</th>
	          <th>最后回复时间</th>
	          <th>操作</th>

	        </tr>
	      </thead>
	      <tbody>
	      	@foreach($user_post as $k=>$v)
	        <tr>
	          <th scope="row">{{$k+1}}</th>
	          <td> {{ $v->title }} </td>
	          <td> {{ $v->created_at }} </td>
	          <td> {{ $v->replyCount($v->pid) }} </td>
	          <td> {{ $v->updated_at }} </td>
	          <td>
	          	<form action="/home/user/user_info/remove_post/{{ $v->pid }}" method="post" onclick="return confirm('确定执行该操作?')" >
	          		{{ csrf_field() }}
				<input type="submit" class="btn btn-danger" value="删除" style="width:90px">
	          	</form>
	          </td>
	        </tr>
	        @endforeach
	      </tbody>
	    </table>
	  </div>
	

	<div class="bs-example" data-example-id="hoverable-table" style="width:1100px;margin:0 auto">
	<button class="btn btn-info">我的回复</button>
	    <table class="table table-hover">
	      <thead>
	        <tr>
	          <th>序号</th>
	          <th>帖子名称</th>
	          <th>回复时间</th>
	          <th></th>
	          <th>操作</th>

	        </tr>
	      </thead>
	      <tbody>
	      	@foreach($user_reply as $k=>$v)
	        <tr>
	          <th scope="row">{{$k+1}}</th>
	          <td>{{ $v->Post->title }}</td>
	          <td>  {{ $v->created_at }} </td>
	          <td>
				<a href="/home/user/{{ $v->uid }}">我</a>

					回复 
				@if($v->reply_id == 0)
					楼主
					<b> {{ $v->content }} </b>
				@elseif ($v->Reply_User($v->reply_id) == '该楼层已删除')
					该楼层已删除
				
				@else 
				<a href="/home/user/{{ $v->Reply_User($v->reply_id)->uid }}">
					{{ $v->Reply_User($v->reply_id)->uname }}
				</a> 
				 <b> {{ $v->content }} </b>
				@endif
	          </td>
	          <td>
				<form action="/home/user/user_info/remove_reply/{{ $v->rid }}" method="post" onclick="return confirm('确定执行该操作?')" >
	          		{{ csrf_field() }}
				<input type="submit" class="btn btn-danger" value="删除" style="width:90px">
	          	</form>
	          </td>
	        </tr>
	        @endforeach
	      </tbody>
	    </table>
	  </div>


@endsection