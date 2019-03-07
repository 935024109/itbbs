@extends('admin.layout.index')

@section('main')
 	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-pencil"></i>后台首页</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="form_elements.html">
                        	<div class="mws-form-inline" style="width:800px;">
                        		<div class="mws-form-row">
                                	<label class="mws-form-label">用户名</label>
                                	<div class="mws-form-item">
                                    	<input class="large" type="text" value="{{session('uname')}}" disabled="true">
                                    </div>
                                </div>
                            	<div class="mws-form-row">
                                	<label class="mws-form-label">网站域名</label>
                                	<div class="mws-form-item">
                                    	<input class="large" type="text" value="{{$data['HTTP_HOST']}}" disabled="true">
                                    </div>
                                </div>
                            	<div class="mws-form-row">
                                	<label class="mws-form-label">网站文件路径</label>
                                	<div class="mws-form-item">
                                    	<input disabled="disabled" class="large" type="text" value="{{$data['CONTEXT_DOCUMENT_ROOT']}}" disabled="true">
                                    </div>
                                </div>
                            	<div class="mws-form-row">
                                	<label class="mws-form-label">网站用户名</label>
                                	<div class="mws-form-item">
                                    	<input class="large" type="text" readonly="readonly" value="{{$data['DB_USERNAME']}}" disabled="true">
                                    </div>
                                </div>
                                 <div class="mws-form-row">
                                    <label class="mws-form-label">端口号</label>
                                    <div class="mws-form-item">
                                        <input class="large" type="text" value="{{$data['DB_PORT']}}" disabled="true">
                                    </div>
                                </div>
                            	<div class="mws-form-row">
                                	<label class="mws-form-label">服务器IP地址</label>
                                	<div class="mws-form-item">
                                    	<input class="large" type="text" value="{{$data['DB_HOST']}}" disabled="true">
                                    </div>
                                </div>
                               <div class="mws-form-row">
                                	<label class="mws-form-label">网站开关</label>
                                	<div class="mws-form-item">
                                    	<input type="radio" name="on_off" value="1" checked>开启
                                    	<input type="radio" name="on_off" value="0">关闭
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                    </div>    	
                </div>
@endsection