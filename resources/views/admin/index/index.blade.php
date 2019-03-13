@extends('admin.layout.index')

@section('main')
 	<!-- <div class="mws-panel grid_8">
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
 -->




                <div class="mws-panel grid_4">
                    <div class="mws-panel-header">
                        <span><i class="icon-graph"></i> 我的个人信息</span>
                    </div>
                    <div class="mws-panel-body">
                        <div class="mws-panel-content">
                            <div id="mws-line-chart" style="width: 100%; height: 150px;">
                               <div class="content">
                                    您好，administrator<br>
                                    所属角色：超级管理员 <br>
                                    授权类型<br>
                                    列序号<br>
                                    <div class="bk20 hr"><hr></div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mws-panel grid_4">
                    <div class="mws-panel-header">
                        <span><i class="icon-graph"></i> ITBBS系统开发团队</span>
                    </div>
                    <div class="mws-panel-body">
                        <div class="mws-panel-content">
                            <div id="mws-line-chart" style="width: 100%; height: 200px;">
                                  
                                <div class="content">
                                        版权所有：(北京)兄弟连学员官方资讯<br>
                                        团队成员：王子龙、欧阳文焯、曹铮铮、王帅雪<br>
                                        官方网站：<a href="#" target="_blank">{{$data['HTTP_HOST']}}</a> <br>
                                      
                                        官方QQ讨论群：1547867 <br>
                                        销售咨询QQ：15716808122
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                   <div class="mws-panel grid_4">
                    <div class="mws-panel-header">
                        <span><i class="icon-graph"></i> 系统设置</span>
                    </div>
                    <div class="mws-panel-body">
                        <div class="mws-panel-content">
                            <div id="mws-line-chart" style="width: 100%; height: 200px;">
                                  
                                <div class="content">
    ITBBS程序版本：lavavel框架5.5 [<a href="https://www.golaravel.com/" target="_blank">查看最新版本</a>]<br>
    操作系统：WINNT <br>
    服务器软件：Apache/2.4.29 (Win32)  PHP/7.1.12 <br>
    MySQL 版本：5.5.5-10.1.29-MariaDB<br>
    上传文件：2M<br> 
    </div>
                            </div>
                        </div>
                    </div>
                </div>

                                <div class="mws-panel grid_4">
                    <div class="mws-panel-header">
                        <span><i class="icon-graph"></i> 网站信息</span>
                    </div>
                    <div class="mws-panel-body">
                        <div class="mws-panel-content">
                            <div id="mws-line-chart" style="width: 100%; height: 200px;">
                                  
                                <div class="content">
                                    端口号:{{$data['DB_PORT']}}<br>
                                    服务器IP地址:{{$data['DB_HOST']}}<br>
                                    网站用户名:{{$data['DB_USERNAME']}}
                                </div>
                        </div>
                    </div>
                </div>
@endsection