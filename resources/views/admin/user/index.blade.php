@extends('admin/layout/index')
@section('main')
	<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i> 用户列表</span>
    </div>
    <div class="mws-panel-body no-padding">
       	<form action="/admin/user" method="get">
	        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
			  <div id="DataTables_Table_1_length" class="dataTables_length">
			    <label>显示
			      <select size="1" name="count" aria-controls="DataTables_Table_1">
			        <option value="5"  @if ($count == 5) selected @endif >5</option>
			        <option value="10" @if ($count == 10) selected @endif >10</option>
			        <option value="15" @if ($count == 15) selected @endif >15</option>
			        <option value="50" @if ($count == 50) selected @endif >50</option>
			    </select>条</label>
			  </div>
			  <div class="dataTables_filter" id="DataTables_Table_1_filter">
			    <label>关键字:
			      <input type="text" name="search" aria-controls="DataTables_Table_1" value="{{$search or ''}}">
			  </label>
			  <input type="submit" value="搜索" class="btn btn-info">
			</div>
		</form>
        <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
           <thead>
			  <tr role="row">
				<th>ID</th>
				<th>用户名</th>
				<th>昵称</th>
				<th>邮箱</th>
				<th>手机号</th>
				<th>头像</th>
				<th>创建时间</th>
				<th width="80">操作</th>
			  </tr>
			</thead>
            
        <tbody role="alert" aria-live="polite" aria-relevant="all">
		@foreach($data as $k=>$v)
        	<tr class="odd" style="font-size:20px">
				<th>{{$v->uid}}</th>
				<th>{{$v->uname}}</th>
				<th>{{$v->nickname}}</th>
				<th>{{$v->email}}</th>
				<th>{{$v->phone}}</th>
				<th><img src="/uploads/{{$v->photo}}" style="width:65px;height:80px;"></th>
				<th>
					{{$v->created_at}}
				</th>
				<th>
					<a href="/admin/user/{{$v->uid}}/edit" class="btn btn-info">修改</a>
					<form method="post" action="/admin/user/{{$v->uid}}" style="display:inline-block;">
						{{csrf_field()}}
						{{method_field('DELETE')}}
						<button class="btn btn-danger">删除</button>
					</form>
				</th>
        	</tr>
		@endforeach
         </tbody>
     </table>
     <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate" >
     	{{ $data->appends($request)->links() }}
     </div>
 	</div>
    </div>
</div>
	
@endsection