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
                                    <th>ID</th>
                                    <th>标题</th>
                                    <th>网址</th>
                                    <th>图片</th>
                                    <th>网站开关</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $k => $v)
                                <tr>
                                    <td>{{$v->cid}}</td>
                                    <td>{{$v->title}}</td>
                                    <td>{{$v->url}}</td>
                                    <td style="width:100px">
                                        <img src="/uploads/images/config/{{$v->logo}}">
                                    </td>
                                    <td>                                                                           
                                  {{ $v->on_off == 1 ? '开启' : '关闭'}}                                      
                                    </td>
                                   
                                    <td>
				                	
				                	<a href="/admin/config/{{$v->cid}}/edit" class="btn btn-warning">修改</a>
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