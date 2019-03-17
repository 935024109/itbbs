@extends('admin.layout.index')

@section('main')

<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span><i class="icon-table"></i> 板块分类列表</span>
    </div>
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
            <form action="/admin/forum" method="get" >
                <div class="dataTables_filter" id="DataTables_Table_1_filter">
                    <label>
                        关键字: <input type="text" name="search" value="{{ $request['search'] or '' }}" aria-controls="DataTables_Table_1" placeholder="请输入分类名称..." >
                    </label>
                    <input type="submit" value="搜索" class="btn btn-info" >
                </div>
                
            </form>
            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                <thead>
                    <tr role="row">
                        <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 98px;">ID
                        </th>
                        <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 211px;">分类名称</th>
                        <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 100px;">父级pid
                        </th>
                        <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 198px;">分类路径
                        </th>
                        <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 98px;">状态
                        </th>
                        <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 188px;">操作
                        </th>
                    </tr>
                </thead>
            
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                    @foreach($forums as $k => $v)
                    <tr class="even">
                        <td class="  sorting_1">{{ $v -> fid }}</td>
                        <td class=" ">{{ $v -> fname }}</td>                     
                        <td class=" ">{{ $v -> pid }}</td>
                        <td class=" ">{{ $v -> path }}</td>
                        <td class=" ">{{ $v -> status == 1 ? '已激活':'未激活'}}</td>                   
                        <td>
                            <a href="/admin/forum/{{ $v->fid }}/edit" class="btn btn-info">修改</a>
                            <a href="/admin/forum/create/{{ $v->fid }}" class="btn btn-">添加子分类</a>
                            <form action="/admin/forum/{{ $v->fid }}" method="post" style="display:inline-block;">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input type="submit" value="删除" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection