@extends('admin.layout.index')

@section('main')
	<div class="mws-panel grid_8">		
	<div class="mws-panel-header">
    	<span><i class="icon-pencil"></i> 网站配置</span>
    </div>
    <div class="mws-panel-body no-padding">
    	<form class="mws-form" action="/admin/config" method="post" enctype="multipart/form-data">
    		{{ csrf_field() }}
        	<div class="mws-form-inline">
            	<div class="mws-form-row" style="width:600px">
                	<label class="mws-form-label">配置名称</label>
                	<div class="mws-form-item">
                    	<input  class="large" type="text" name="title" >
                    </div>
                </div>
                <div class="mws-form-row" style="width:600px">
                	<label class="mws-form-label">配置网址</label>
                	<div class="mws-form-item">
                    	<input  class="large" type="text" name="url" >
                    </div>
                </div>
            	 <div class="mws-form-row" style="width:600px">
                    <label class="mws-form-label">图片</label>
                    <div class="mws-form-item">
                        <input  class="large" type="file" name="logo" >
                    </div>
                </div>
                 <div class="mws-form-row" >
                    <label class="mws-form-label">网站维护</label>
                    <div class="mws-form-item">
                       <input type="radio" name="on_off" value="1" >开
                       <input type="radio" name="on_off" value="0" >关
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