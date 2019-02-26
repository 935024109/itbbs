@extends('admin.layout.index')

@section('main')
	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> 轮播图列表</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th>carid</th>
                                    <th>内容描述</th>
                                    <th>缩略图</th>
                                    <th>图片路径</th>
                                    <th>网络链接</th>
                                    <th>创建时间</th>
                                    <th>更新时间</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($carousels as $k => $v)
                                <tr>
                                    <td>{{ $v -> carid }}</td>
                                    <td>{{ $v -> title }}</td>
                                    <td>
										<img src="/uploads/images/{{ $v -> img_src }}" style="width:100px;height:100px">
                                    </td>
                                    <td>{{ $v -> img_src }}</td>
                                    <td>{{ $v -> link_url }}</td>
                                    <td>{{ $v -> created_at }}</td>
                                    <td>{{ $v -> updated_at }}</td>
                                    <td>
										<a href="/admin/carousel/{{ $v->carid }}/edit">修改</a>
										<form action="/admin/carousel/{{ $v->carid }}" method="post" style="display: inline-block;">
											{{ csrf_field() }}
											{{ method_field('DELETE') }}
											<input type="submit" value="删除">
										</form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection