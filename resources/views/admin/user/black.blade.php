@extends('admin/layout/index')
@section('main')
		<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i> 小黑屋</span>
    </div>
		</form>
        <table class="table table-bordered" style="width:100%;background-color:#cccccc;">
           <thead>
			  <tr role="row">
			 	<th>ID</th>
				<th>用户名</th>
				<th>操作行为</th>
				<th>操作时间</th>
				<th width="80">刑满释放</th>
			  </tr>
			</thead>
            
        <tbody role="alert" aria-live="polite" aria-relevant="all">
        	@foreach ($data as $k=>$v)
        	<tr class="odd" style="font-size:20px">
        		<th>{{$v->uid}}</th>
				<th>{{$v->uname}}</th>
				@if ($v->black == 1)
				<th>禁止发言</th>
				@elseif ($v->black == 2)
				<th>禁止访问</th>
				@endif
				<th>{{$v->deleted_at}}</th>
				<th>
					<form action="/admin/user/freedom/{{$v->uid}}">
						<button class="btn btn-info">刑满释放</button>
					</form>
				</th>
        	</tr>
        	@endforeach
         </tbody>
     </table>
    
     	
     
 	
    </div>
</div>
@endsection