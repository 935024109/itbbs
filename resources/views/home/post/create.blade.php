@extends('home.layout.index')

@section('main')

<!--  引入bootstrap start -->
<link rel="stylesheet" type="text/css" href="/homes/bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <script type="text/javascript" src="/homes/bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="/homes/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<!--  引入bootstrap end -->

<div id="pt" class="bm cl" style="margin-left: 136px">
  <div class="z">
    <a href="www.itbbs.com" class="nvhm" title="首页">兄弟连论坛_每个人的交流社区</a>
    <em>›</em>
    <a href="./">论坛</a>
    <em>›</em>
    <a href="http://bbs.itxdl.cn/forum.php?gid=123">:::. 技术交流xxx :::.</a>
    <em>›</em>
    <a href="http://bbs.itxdl.cn/thread-htm-fid-127-page-1.html">PHP技术xxx</a>
    <em>›</em>发表帖子</div></div>
	
	<div class="container" style="margin-left: 136px">
	<form class="form-inline" action="/home/post" method="post">
		 {{  csrf_field() }}
		<select class="form-control" name='fid'>
		 <option value="0">顶级分类</option>
		 @foreach($forum_cates as $k => $v)
		 <option value="{{ $v->fid }}" {{ $v->fid == $fid ? 'selected' : '' }}> {{ $v->fname }} </option>
		 @endforeach
		</select>
		
		<div class="form-group">
		   主体:<input type="text" name="title" va class="form-control" id="exampleInputName2" placeholder="不超过100字...">
		</div>
		<!--引入百度编辑器-->
		<script id="container" name="content" type="text/plain"></script>
		是否允许回复:
		<label class="radio-inline">
		  <input type="radio" name="revert" id="inlineRadio1" checked value="1"> 是
		</label>
		<label class="radio-inline">
		  <input type="radio" name="revert" id="inlineRadio2" value="0"> 否
		</label>

	 <!--  <button type="submit" class="btn btn-default">Send invitation</button> -->
	  <input type="submit" class="btn btn-info" value="发帖">
	</form>
	</div>



<!-- 配置文件 -->
<script type="text/javascript" src="/admins/utf8-php/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/admins/utf8-php/ueditor.all.js"></script>
<!-- 实例化百度编辑器  定制工具栏图标 -->
<script type="text/javascript">
    var ue = UE.getEditor('container', {toolbars: [
    ['fullscreen', 'source', 'undo', 'redo'],
    ['bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc']
]});
</script>

@endsection