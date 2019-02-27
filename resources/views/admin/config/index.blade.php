@extends('admin.layout.index')

@section('main')

	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> 网站配置列表</span>
                    </div>
                    <div class="mws-panel-body no-padding">
        <form action="/admin/config" method="get">
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
			  <div id="DataTables_Table_1_length" class="dataTables_length">
			    
			  </div>
			  <div class="dataTables_filter" id="DataTables_Table_1_filter">
			    <label>关键字:
			       <input type="text" name="search" aria-controls="DataTables_Table_1" value="{{ $request['search'] or '' }}">
			  </label>
			  <input type="submit" value="搜索" class="btn btn-info">
			</div>
		</form>
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>分类名称</th>
                                    <th>所属分类ID</th>
                                    <th>分类路径</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data_index as $k => $v)
                                <tr>
                                    <td>{{$v->cid}}</td>
                                    <td>{{$v->cname}}</td>
                                    <td>{{$v->pid}}</td>
                                    <td>{{$v->path}}</td>
                                   
                                    <td>
				                	<form action="/admin/config/{{$v->cid}}" method="post" style="display: inline-block;">
				                		{{ csrf_field() }}
				                		{{ method_field('DELETE') }}
				                		<input type="submit" value="删除" class="btn btn-danger" >
				                	</form>
				                	<a href="/admin/config/{{$v->cid}}/edit" class="btn btn-warning">修改</a>
                </td>
                                </tr>
                         @endforeach
                            </tbody>
                        </table>
     						<div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate" >
     							<!-- {{ $data->appends($request)->links() }} -->
    						</div>
                    </div>
                </div>

@endsection