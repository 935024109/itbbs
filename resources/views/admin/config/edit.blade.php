@extends('admin.layout.index')

@section('main')
    <div class="mws-panel grid_8">      
    <div class="mws-panel-header">
        <span><i class="icon-pencil"></i> 网站配置</span>
    </div>

 <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/admin/config/{{$data->cid}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{method_field('PUT')}}
            <div class="mws-form-inline">
                <div class="mws-form-row" style="width:600px">
                    <label class="mws-form-label">配置名称</label>
                    <div class="mws-form-item">
                        <input  class="large" type="text" name="title" value="{{$data->title}}">
                    </div>
                </div>
                <div class="mws-form-row" style="width:600px">
                    <label class="mws-form-label">配置网址</label>
                    <div class="mws-form-item">
                        <input  class="large" type="text" name="url" value="{{$data->url}}">
                    </div>
                </div>
                 <div class="mws-form-row" style="width:600px">
                    <label class="mws-form-label">图片</label>
                    <div class="mws-form-item">
                        <input  class="large" type="file" name="logo" value="{{$data->logo}}">
                        <p style="wdith:100px;">
                            <img src="/uploads/{{$data->logo}}">
                        </p>
                    </div>
                </div>
                 <div class="mws-form-row" >
                    <label class="mws-form-label">网站维护</label>
                    <div class="mws-form-item">
                       <input type="radio" name="on_off" value="1" {{ $data->on_off == 1 ? 'checked' : ''}} >开
                       <input type="radio" name="on_off" value="0" {{ $data->on_off == 0 ? 'checked' : ''}} >关
                    </div>
                </div>
                <div class="mws-button-row">
                    <input type="submit" value="修改" class="btn btn-success">
                    <input type="reset" value="重置" class="btn btn-info">
                </div>
            </div>
        </form>
        </div>      
</div>      

@endsection