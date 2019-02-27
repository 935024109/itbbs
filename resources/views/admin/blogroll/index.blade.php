@extends('admin.layout.index')
@section('main')
	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> 链接列表</span>

                    </div>
                    <div class="mws-panel-body no-padding">
        <form action="/admin/blogroll" method="get">
	        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
			  <div id="DataTables_Table_1_length" class="dataTables_length">
			    
			  </div>
			  <div class="dataTables_filter" id="DataTables_Table_1_filter">
			    <label>关键字:
			      <input type="text" name="search" aria-controls="DataTables_Table_1">
			  </label>
			  <input type="submit" value="搜索" class="btn btn-info">
			</div>
		</form>
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th>链接id</th>
                                    <th>链接名称</th>
                                    <th>链接图片</th>
                                    <th>链接网址</th>
                                    <th>链接详述</th>
                                    <th>设置</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($data as $k => $v)
                                <tr>
                                    <td>{{$v->bid}}</td>
                                    <td>{{$v->name}}</td>
                                    <td>
                                    	<p style="width:100px">
                                    		<img src="/uploads/images/{{$v->logo}}">
                                    	</p>
                                    </td>
                                    <td>{{$v->url}}</td>
                                    <td>{{$v->title}}</td>
                                    <td>
				                	<form action="/admin/blogroll/{{ $v->bid }}" method="post" style="display: inline-block;">
				                		{{ csrf_field() }}
				                		{{ method_field('DELETE') }}
				                		<input type="submit" value="删除" class="btn btn-danger" >
				                	</form>
				                	<a href="/admin/blogroll/{{ $v->bid }}/edit" class="btn btn-warning">修改</a>
                </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                         <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate" >
     					
   						  </div>
                    </div>
                </div>
@endsection