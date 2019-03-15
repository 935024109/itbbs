@extends('home.layout.index')
@section('main')

<div id="wp" class="wp time_wp cl">
  <script type="text/javascript">
    var allowpostattach = parseInt('1');
    var allowpostimg = parseInt('1');
    var pid = parseInt('0');
    var tid = parseInt('0');
    var extensions = '';
    var imgexts = 'jpg, jpeg, gif, png, bmp';
    var postminchars = parseInt('10');
    var postmaxchars = parseInt('10000');
    var disablepostctrl = parseInt('1');
    var seccodecheck = parseInt('0');
    var secqaacheck = parseInt('0');
    var typerequired = parseInt('');
    var sortrequired = parseInt('');
    var special = parseInt('0');
    var isfirstpost = 1;
    var allowposttrade = parseInt('1');
    var allowpostreward = parseInt('1');
    var allowpostactivity = parseInt('1');
    var sortid = parseInt('0');
    var special = parseInt('0');
    var fid = 286;
    var postaction = 'newthread';
    var ispicstyleforum = 0;</script>
  <script src="/homes/static/js/forum_post.js?Ac9" type="text/javascript"></script>
  <div id="pt" class="bm cl">
    <div class="z">
      <a href="/home" class="nvhm" title="首页">IT论坛_每个人的交流社区</a>
      <em>›</em>
      <a href="/home">论坛</a>
      <em>›</em>
      <a href="/cates/"></a>
      <em>›</em>
      <a href="/cates/topics"></a>
      <em>›</em>发表帖子</div></div>
  <form method="post" autocomplete="off" id="postform" action="/home/post"  >
    {{ csrf_field() }}
    <div id="ct" class="ct2_a ct2_a_r wp cl">
      <div class="bm bw0 cl" id="editorbox">
        <ul class="tb cl mbw">
          <li class="a">
            <a href="javascript:;">发表帖子</a></li>
        </ul>
        <div id="draftlist_menu" style="display:none">
          <ul class="xl xl1">
          </ul>
        </div>
        <div id="postbox">
          <div class="pbt cl">
            <div class="ftid">
              <select name="fid" id="tmark" width="80" selecti="0" style="height:27px;width:120px" onchange="find(this);">
                  <option value=""  >选择主题分类</option>
         		   @foreach($forum_cates as $k => $v)
    				   <option value="{{ $v->fid }}" {{ $v->fid == $fid ? 'selected' : '' }} {{$v->pid == $fid ? 'hidden' : ''}}  > {{ $v->fname }} </option>
    				   @endforeach
                 
              </select>
            </div>
            <div class="z">
              <span>
                <input type="text" name="title" id="ttitle" class="px" value="" onblur="if($('tags')){relatekw('-1','-1');doane();}" onkeyup="strLenCalc(this, 'checklen', 80);" style="width: 25em;height: 2em" tabindex="1"></span>
              <span id="subjectchk">还可输入
                <strong id="checklen">80</strong>个字符</span>
              <script type="text/javascript">strLenCalc($('subject'), 'checklen', 80)</script>
            </div>
          </div>
          
            <script id="container" name="content" type="text/plain"></script>
         
          是否允许回复:
    		<label class="radio-inline">
    		  <input type="radio" name="revert" id="inlineRadio1" checked value="1"> 是
    		</label>
    		<label class="radio-inline">
    		  <input type="radio" name="revert" id="inlineRadio2" value="0"> 否
    		</label>
          <div class="mtm mbm pnpost">
            <button type="submit" class="pn pnc" onclick=" return checkForm()">
              <span>发表帖子</span></button>
          </div>
        </div>
      </div>
    </div>
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

<!--  引入bootstrap start -->
  <link rel="stylesheet" type="text/css" href="/homes/bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <script type="text/javascript" src="/homes/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/homes/bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
<!--  引入bootstrap end -->

@endsection