@extends('admin.layout.index')

@section('main')
	
<link rel="stylesheet" type="text/css" href="">
    <div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span><i class="icon-table"></i> 公告列表</span>
    </div>
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
            
            <div class="dataTables_filter" id="DataTables_Table_1_filter">
                <label>
                    关键字: <input type="text" aria-controls="DataTables_Table_1">
                </label>
                 <input type="submit" value="搜索" class="btn btn-info">
            </div>
            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                <thead>
                    <tr role="row" >
                        <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 98px;">ID
                        </th>
                       
                        <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 70px;">话题图片
                        </th>
                         <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 50px;">PID
                        </th>
                       
                        
                        <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 155px;">创建时间
                        </th>
                        <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 98px;">操作
                        </th>
                    </tr>
                </thead>
            
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                    @foreach($data as $k => $v)
                    <tr class="even" style="text-align:center;">
                        <td class="  sorting_1">{{ $v -> id }}</td>
                        <td class="  sorting_1">
                                        <p style="width:100px">
                                            <img src="/uploads/{{$v->logo}}">
                                        </p>
                                    </td>
                        <!-- <td class="  sorting_1">
                            {{ $v -> url }}
                        </td> -->
                        <td class="  sorting_1">{{$v->pid}}</td>
                        <td class="  sorting_1">{{ $v -> created_at }}</td>
                                          
                      <td>
                                    <form action="/admin/topic/{{ $v->id }}" method="post" style="display: inline-block;">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <input type="submit" value="删除" class="btn btn-danger" >
                                    </form>
                </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="dataTables_info" id="DataTables_Table_1_info">
               
            </div>
           
        </div>
    </div>
</div>
@endsection