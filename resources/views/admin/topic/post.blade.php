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
				<input type="submit" value="搜索" class="btn btn-info" value="{{ $request['search'] or '' }}">
			</div>
			</form>
		</div>
					<table class="table table-bordered text-center">
                        <tr>
                            <th style="width:30px">ID</th>
                            <th style="width:30px">帖子标题</th>
                            <th style="width:150px">帖子内容</th>
                            <th style="width:150px">发帖人</th>
                            <th style="width:150px">操作</th>
                        </tr>
                        @foreach($data as $k => $v)
                       	<tr>
                            <td>{{$v->pid}}</td>    
                            <td>{{$v->title }}</td>    
                            <td>{{$v->content}}</td>
                            <td>{{$v->User->uname}} </td>
                            <td>
                            	   <span class="btn btn-success">选择该帖</span>
                        	</td>    
                        </tr>
                        @endforeach

                    </table>
        </div>
@endsection