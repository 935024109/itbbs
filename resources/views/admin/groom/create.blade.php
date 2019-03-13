@extends('admin.layout.index')

@section('main')
<!-- 验证表单显示错误信息 -->
    @if (count($errors) > 0)
        <div class="alert alert-danger mws-form-message error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<!-- 添加用户的表单 -->
<div class="mws-panel grid_8">
  <div class="mws-panel-header">
    <span>
      <i class="icon-add-contact"></i>添加推荐阅读</span>
  </div>
  <div class="mws-panel-body no-padding">
    <form action="/admin/groom" method="post" enctype="multipart/form-data" id="mws-validate" class="mws-form" novalidate="novalidate">
      {{ csrf_field()}}
      <div id="<mws-validate-error></mws-validate-error>" class="mws-form-message error" style="display:none;"></div>
      <div class="mws-form-inline">     
        <div class="mws-form-row">
          <label class="mws-form-label">图片链接</label>
          <div class="mws-form-item">
            <input type="text" name="img_href" value="/home/post/" class="required large" readonly title="默认值"></div>
        </div>        
        <div class="mws-form-row">
          <label class="mws-form-label">图片</label>
          <div class="mws-form-item">
            <div class="fileinput-holder" style="position: relative;">
                <input type="file" name="picture" value="" class="required" style="position: absolute; top: 0px; right: 0px; margin: 0px; cursor: pointer; font-size: 999px; opacity: 0; z-index: 999;"></div>
            <label for="photo" class="error" generated="true" style="display:none"></label>
          </div>
        </div>
         <div class="mws-form-row">
          <label class="mws-form-label">帖子ID</label>
          <div class="mws-form-item">
            <select class="large" name="pid">
                <option value="0">请选择</option>
                @foreach($posts as $k => $v)               
                <option value="{{ $v->pid }}" >{{ $v->title }}</option>
                @endforeach
              </select>
          </div>
        </div>

       
     <div class="mws-button-row">
        <input type="submit" value="Submit" class="btn btn-danger">
        <input type="reset" value="Reset" class="btn ">
    </div>
    </form>
  </div>
</div>
@endsection