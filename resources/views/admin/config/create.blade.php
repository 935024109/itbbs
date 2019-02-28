@extends('admin.layout.index')

@section('main')
	<div class="mws-panel grid_8">		
	<div class="mws-panel-header">
    	<span><i class="icon-pencil"></i> 网站配置</span>
    </div>
    <div class="mws-panel-body no-padding">
    	<form class="mws-form" action="/admin/config" method="post">
    		{{ csrf_field() }}
        	<div class="mws-form-inline">
            	<div class="mws-form-row" style="width:600px">
                	<label class="mws-form-label">配置名称</label>
                	<div class="mws-form-item">
                    	<input  class="large" type="text" name="cname" >
                    </div>
                </div>
                <div class="mws-form-row" >
                	<label class="mws-form-label">配置分类</label>
                	<div class="mws-form-item">
                    	<select style="width:447px" name="pid">
							<option value="0">--请选择--</option>
							@foreach($data_create as $k => $v)
							<option value='{{$v->cid}}'>{{$v->cname}}</option>
							@endforeach
                    	</select>
                    </div>
                </div>
            	
                <div class="mws-button-row">
					<input type="submit" value="添加" class="btn btn-success">
					<input type="reset" value="重置" class="btn btn-info">
				</div>
            </div>
        </form>
	    </div>    	
</div>

@endsection