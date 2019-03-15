@extends('admin.layout.index')

@section('main')

<div class="mws-panel grid_8">
  <div class="mws-panel-header">
    <span>
      <i class="icon-table"></i>用户列表</span>
  </div>
  <div class="mws-panel-body no-padding">
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">

      <form action="" method="get">
      <div id="DataTables_Table_1_length" class="dataTables_length">
        <label>显示
          <select size="1" name="DataTables_Table_1_length" aria-controls="DataTables_Table_1">
            <option value="10" selected="selected">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option></select>条</label>
      </div>
      <div class="dataTables_filter" id="DataTables_Table_1_filter">
        <label>关键字:<input type="text" aria-controls="DataTables_Table_1"></label>
          <label><input type="submit" value="搜索" aria-controls="DataTables_Table_1" class='btn btn-info'></label></div>
      </form>

      <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
        <thead>
          <tr role="row">
            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 98px;">ID</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 98px;">图片链接</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 198px;">图片</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 98px;">图片路径</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 98px;">帖子ID</th>
            
             <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 198px;">操作</th>
          </tr>
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
        @foreach($grooms as $k => $v)
          <tr class="">
            <td class="  sorting_1">{{ $v->gid }}</td>
            <td class=" ">{{ $v->img_href }}</td>
            <td >
                <img class="thumbnail" src="/uploads/images/groom/{{ $v->picture }}" style="width:200px;height: 100px;">
            </td>
            <td class=" ">{{ $v->picture }}</td>
            <td class=" ">{{ $v->pid }}</td>
            <td>
              <form action="/admin/groom/{{ $v->gid }}/edit" method="get" style="display: inline;">
                  <input type="submit" value="修改"  class="btn btn-info">
              </form>
              <form action="/admin/groom/{{ $v->gid }}" method="post" style="display: inline;">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <input type="submit" value="删除" class="btn btn-danger">
              </form> 
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
     <div class="dataTables_info" id="DataTables_Table_1_info">Showing 1 to 10 of 57 entries</div>
     <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
      <!--  <a tabindex="0" class="first paginate_button paginate_button_disabled" id="DataTables_Table_1_first">First</a>
      <a tabindex="0" class="previous paginate_button paginate_button_disabled" id="DataTables_Table_1_previous">Previous</a>
      <span>
        <a tabindex="0" class="paginate_active">1</a>
        <a tabindex="0" class="paginate_button">2</a>
        <a tabindex="0" class="paginate_button">3</a>
        <a tabindex="0" class="paginate_button">4</a>
        <a tabindex="0" class="paginate_button">5</a></span>
      <a tabindex="0" class="next paginate_button" id="DataTables_Table_1_next">Next</a>
      <a tabindex="0" class="last paginate_button" id="DataTables_Table_1_last">Last</a></div> -->
    </div>
  </div>
</div>
@endsection