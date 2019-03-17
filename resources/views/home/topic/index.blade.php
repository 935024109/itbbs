@extends('home.layout.index')
@section('main')
<!--  引入bootstrap start -->
  <link rel="stylesheet" type="text/css" href="/homes/bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <script type="text/javascript" src="/homes/bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="/homes/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<!--  引入bootstrap end -->
<div id="wp" class="wp time_wp cl">
  <script type="text/javascript">var fid = parseInt('271'),
    tid = parseInt('240393');</script>
  <script src="/home/js/forum_viewthread.js" type="text/javascript"></script>
  <script type="text/javascript">zoomstatus = parseInt(1);
    var imagemaxwidth = '600';
    var aimgcount = new Array();</script>
  <style id="diy_style" type="text/css"></style>
  <!--[diy=diynavtop]-->
  <div id="diynavtop" class="area"></div>
  <!--[/diy]-->
  <div id="pt" class="bm cl">
    <div class="z">
      <a href="/home">{{$post_content->title}}</a> 
     <em>›</em> 
    <a href="/home">{{$user->nickname}}</a>
     <em>›</em> 
    <a href="/home/post//edit">  @if($user->auth == 0)
            普通会员
            @elseif($user->auth == 1)
            版主
            @else($user->auth == 2)
            站长
            @endif</a>
      <em>›</em>
    </div>
    <div class="y" style="display: none;">
      <a href="http://bbs.itxdl.cn/forum.php?mod=viewthread&amp;action=printable&amp;tid=240393" title="打印" target="_blank">
        <img src="/home/picture/print.png" alt="打印" class="vm" data-bd-imgshare-binded="1"></a>
      <a href="http://bbs.itxdl.cn/forum.php?mod=redirect&amp;goto=nextoldset&amp;tid=240393" title="上一主题">
        <img src="/home/picture/thread-prev.png" alt="上一主题" class="vm" data-bd-imgshare-binded="1"></a>
      <a href="http://bbs.itxdl.cn/forum.php?mod=redirect&amp;goto=nextnewset&amp;tid=240393" title="下一主题">
        <img src="/home/picture/thread-next.png" alt="下一主题" class="vm" data-bd-imgshare-binded="1"></a>
    </div>
  </div>
  <script src="/home/js/jquery-1.4.4.min.js" type="text/javascript"></script>
  <script type="text/javascript">jQuery.noConflict();</script>
  <script type="text/javascript">(function(d) {
      j = d.createElement('script');
      j.src = '//openapi.guanjia.qq.com/fcgi-bin/getdzjs?cmd=urlquery_gbk_zh_cn';
      j.setAttribute('ime-cfg', 'lt=2');
      d.getElementsByTagName('head')[0].appendChild(j)
    })(document)</script>
  <link rel="stylesheet" type="text/css" href="/home/css/style.css">
  <style id="diy_style" type="text/css"></style>
  <div class="wp">
    <!--[diy=diy1]-->
    <div id="diy1" class="area"></div>
    <!--[/diy]--></div>
  <div id="ct" class="wp ct2 cl">
    <div class="cl">
      <div class="sd">
        <div class="quater_author_info cl">
          <div class="quater_author_info_1 cl">
            <a href="#" target="_blank" class="toux">
             <img src="http://www.itbbs.com/uploads/{{$user->photo}}"  data-bd-imgshare-binded="1"></a>
            <p>
              <a href="#" target="_blank"></a>{{$user->nickname}}</p>
            <p style="margin-top: 3px;">
              <a href="http://d.bbs.itxdl.cn/home.php?mod=spacecp&amp;ac=usergroup&amp;gid=20" target="_blank" style="color: #FF0000;"></a>

                       @if($user->auth == 0)
            普通会员
            @elseif($user->auth == 1)
            版主
            @else($user->auth == 2)
            站长
            @endif




            </p>
            <div class="time_thread_stat cl">
              <ul>
                <li>
                  <a>{{$user->score}}</a>
                  <p>积分</p>
                </li>
                <li>
                  <a>{{$post_count}}</a>
                  <p>帖子</p>
                </li>
                <li style="border-right: 0;">
                  <a>{{$post_hot_count}}</a>
                  <p>精华</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="quater_author_info_3 cl" style="background: #F9F9F9;">
            <div class="s_timeline s_timeline2 cl" style="margin: 0 20px 20px 20px;">
              <ul style="border-top: 0;"></ul>
            </div>
          </div>
        </div>
        <!-- 如果想要右边出现，请去掉display: none -->
        <!--[diy=diy_right_1]-->
        <div id="diy_right_1" class="area" style="display: none;"></div>
        <!--[/diy]-->
        <!--[diy=diy_right_2]-->
        <div id="diy_right_2" class="area" style="display: none;"></div>
        <!--[/diy]--></div>
      <div class="mn">
        <div class="box cl" style="padding: 25px 25px 10px 25px; background: #FFFFFF;">
          <div class="zprrtt cl">
            <div class="moquu_rrskzx">
              <div class="moquu_date">
                <div class="moquu_rrbt cl">
                  <div class="css cl">
                    <div class="moquu_mz cl">
                      <h1>
                        <a href="/home/post/" onclick="return copyThreadUrl(this, '兄弟连论坛_每个人的交流社区')"></a></h1>
                    </div>
                      <div style="border: 1px solid #E6E6E6;width:700px;height:400px;">
                     {{$post_content->content}} 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="postlist" class="pl bm" style="padding: 25px 0 0 0;">
            <div id="post_1154080">
              <table id="pid1154080" class="plhin" summary="pid1154080" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                    <td class="plc" style="width:100%">
                      <div class="pct">
                        <style type="text/css">.pcb{margin-right:0}</style>
                        <div class="pcb">
                          <div class="t_fsz">
                            <table cellspacing="0" cellpadding="0">
                              <tbody>
                                <tr>
                                  <td class="t_f" id="postmessage_1154080"></td></tr>
                              </tbody>
                            </table>
                          </div>
                          <div id="comment_1154080" class="cm"></div>
                          <div id="post_rate_div_1154080"></div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                   
                  </tr>
                  <tr id="_postposition1154080"></tr>
                  <tr>
                    <td class="plc" style=" padding:0;"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!--[diy=diy_like]-->
        <div id="diy_like" class="area"></div>
        <!--[/diy]-->
        
        <!--[diy=diy_like1]-->
        <div id="diy_like1" class="area"></div>
        <!--[/diy]-->
        <script type="text/javascript">var postminchars = parseInt('10');
          var postmaxchars = parseInt('10000');
          var disablepostctrl = parseInt('0');</script>
        <div id="f_pst" class="pl bm bmw">
         
        </div>
      </div>
    </div>
  </div>
  <div class="wp mtn">
    <!--[diy=diy3]-->
    <div id="diy3" class="area"></div>
    <!--[/diy]--></div>
  <script type="text/javascript">function succeedhandle_followmod(url, msg, values) {
      var fObj = $('followmod_' + values['fuid']);
      if (values['type'] == 'add') {
        fObj.innerHTML = '不收听';
        fObj.href = 'home.php?mod=spacecp&ac=follow&op=del&fuid=' + values['fuid'];
      } else if (values['type'] == 'del') {
        fObj.innerHTML = '收听TA';
        fObj.href = 'home.php?mod=spacecp&ac=follow&op=add&hash=327233d2&fuid=' + values['fuid'];
      }
    }
    fixed_avatar([1154080, 1068720], 1);</script>
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
<script src="/homes/static/js/plugin.js" type="text/javascript"></script>

@endsection