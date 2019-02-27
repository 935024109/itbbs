@extends('admin.layout.index')
@section('main')


<div class="mws-panel grid_8">		
	<div class="mws-panel-header">
    	<span><i class="icon-pencil"></i> 友情链接</span>
    </div>
    <div class="mws-panel-body no-padding">
    	<form class="mws-form" action="/admin/blogroll" method="post" enctype="multipart/form-data">
    		{{ csrf_field() }}
        	<div class="mws-form-inline">
            	<div class="mws-form-row">
                	<label class="mws-form-label">链接名字</label>
                	<div class="mws-form-item">
                    	<input  class="large" type="text" name="name" >
                    </div>
                </div>
                <div class="mws-form-row">
                	<label class="mws-form-label">链接路径</label>
                	<div class="mws-form-item">
                    	<input  class="large" type="text" name="url">
                    </div>
                </div>
            	<div class="mws-form-row" style="width:400px;">
                	<label class="mws-form-label">链接图片</label>
                	<div class="mws-form-item">
                    	<input type="file" name="logo" >
                    	<!-- <img src="1.jpg" style="width: 100px;"> -->
                    </div>
                </div>
            	<div class="mws-form-row">
                	<label class="mws-form-label">链接描述</label>
                	<div class="mws-form-item">
                    	<input class="large" type="text" name="title">
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