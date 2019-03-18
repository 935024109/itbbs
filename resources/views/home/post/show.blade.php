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
      <a href="/home">论坛</a> 
     <em>›</em> 
    <a href="/home">{{$lastforum}}</a>
     <em>›</em> 
    <a href="/home/post/{{$forum->fid}}/edit">{{$forum->fname}}</a>
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
              <img src="/uploads/{{$user->photo}}" data-bd-imgshare-binded="1"></a>
            <p>
              <a href="#" target="_blank">{{$user->uname}}</a></p>
            <p style="margin-top: 3px;">
              <a href="http://d.bbs.itxdl.cn/home.php?mod=spacecp&amp;ac=usergroup&amp;gid=20" target="_blank" style="color: #FF0000;">
                @if($user->score >=  3000 )
                  班长
                @elseif($user->score >=  750)
                  士官
                @elseif($user->score >=  350)
                  上士
                @elseif($user->score >=  200)
                  中士
                @else($user->score >=  100)
                  下士
                @endif              
              </a></p>
            <div class="time_thread_stat cl">
              <ul>
                <li>
                  <a>{{ $user->score}}</a>
                  <p>积分</p>
                </li>
                <li>
                  <a>{{ $post_count }}</a>
                  <p>帖子</p>
                </li>
                <li style="border-right: 0;">
                  <a>0</a>
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
                        <a href="/home/post/{{ $posts_data->pid }}" onclick="return copyThreadUrl(this, '兄弟连论坛_每个人的交流社区')">{{$posts_data->title}}</a></h1>
                    </div>
                    <div class="moquu_small">
                      <p>
                        <a href="/vip" class=""></a>©
                        <a href="http://d.bbs.itxdl.cn/space-uid-442070.html" target="_blank">{{ $user->uname }}</a>
                       <a href="http://d.bbs.itxdl.cn/home.php?mod=spacecp&amp;ac=usergroup&amp;gid=7" target="_blank">
                        @if($user->score >=  3000 )
                          班长
                        @elseif($user->score >=  750)
                          士官
                        @elseif($user->score >=  350)
                          上士
                        @elseif($user->score >=  200)
                          中士
                        @else($user->score >=  100)
                          下士
                        @endif
                       </a>&nbsp;&nbsp;/&nbsp;&nbsp;{{$posts_data->created_at}}&nbsp;&nbsp;/&nbsp;&nbsp;
                        <span>
                          <a href="http://d.bbs.itxdl.cn/home.php?mod=spacecp&amp;ac=favorite&amp;type=thread&amp;id=240393&amp;formhash=327233d2" id="k_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" onmouseover="this.title = $('favoritenumber').innerHTML + ' 人收藏'" title="收藏本帖" class="k_favorite" style="padding-right: 10px;">
                            <i></i>{{ $uid_count }}人收藏</a>
                          </span>
                      </p>
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
                                  <td class="t_f" id="postmessage_1154080">{!! $posts_data->content !!}</td></tr>
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
                    <td class="plc plm">
                      <div id="p_btn" class="mtw hm cl" style="margin-bottom: 30px;"></div>
                      <div id="viewthread_foot cl">
                        <div class="viewthread_foot cl" style="margin-bottom: 0; margin-left: 0px; border-bottom: 0;">
                          
                          <script>window._bd_share_config = {
                              "common": {
                                "bdSnsKey": {},
                                "bdText": "",
                                "bdMini": "1",
                                "bdMiniList": false,
                                "bdPic": "",
                                "bdStyle": "1",
                                "bdSize": "24"
                              },
                              "share": {}
                            };
                            with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~ ( - new Date() / 36e5)];</script>
                          
                          
                         <!--  <span class="cutline" style="margin: 9px 10px 0 0;"></span>
                         <a href="http://d.bbs.itxdl.cn/home.php?mod=spacecp&amp;ac=favorite&amp;type=thread&amp;id=240393&amp;formhash=327233d2" id="k_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" onmouseover="this.title = $('favoritenumber').innerHTML + ' 人收藏'" title="收藏本帖" class="k_favorite">收藏</a>
                         <a href="/home/post/like/{{$posts_data->pid}}" id="k_favorite"  title="收藏本帖" class="k_favorite">收藏</a>
                         <form action="/home/post/like/{{$posts_data->pid}}" >
                                           <button style="float: right;" class="btn btn-danger">收藏</button>
                                         </form> -->
                        @if(session('flag') == true)
                          @if($posts_data->collection_uid($posts_data->pid,session('id')))
                            <form action="/home/post/nolike/{{$posts_data->pid}}">
                              <button style="float: right;" class="btn btn-danger">已收藏</button>
                            </form>
                          @else
                            <form action="/home/post/like/{{$posts_data->pid}}">
                              <button class="btn btn-info" style="float: right;">收藏</button>
                            </form>
                          @endif
                        @endif
                        </div>
                      </div>
                    </td>
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
        <div class="box cl" style="padding: 25px 25px 0 25px;">
          <div id="postlist" class="pl bm postlist_reply">
            <div class="reply_tit cl">
              <h2>
                <strong>{{$reply_count}}</strong>个回复</h2>
              <a href="http://bbs.itxdl.cn/forum.php?mod=viewthread&amp;tid=240393&amp;extra=page%3D%257Bprevpage%257D&amp;ordertype=1" class="show z" style="padding-left: 20px; border-left: 1px solid #CCCCCC;">倒序浏览</a></div>
            <div id="post_1068720">
              @foreach($reply_data as $k => $v)
              <table id="pid1068720" class="plhin" summary="pid1068720" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                    <td class="plc" style="width:100%">
                      <i class="arr"></i>
                      <div class="pi " style="height: 50px; padding-bottom: 0; border-bottom: 0;">
                        <div class="pti" style="color: #515151;">
                          <div class="authi">
                            <div class="cl" style="float: left; width: 50px; overflow: hidden;"><a href="http://d.bbs.itxdl.cn/space-uid-361086.html" target="_blank" class="xi2 z inside_avt" style="padding-right: 0;"><img src="/uploads/{{ $v->replyUser->photo }}" data-bd-imgshare-binded="1"></a></div>
                            <div class="cl" style="float: right; width: 660px; overflow: hidden;">
                              <div class="cl" style="height: 30px; margin: 7px 0 0 0; overflow: hidden;">
                                <em id="authorposton1068720">
                                  <a href="http://d.bbs.itxdl.cn/space-uid-442000.html" target="_blank" style="padding: 0 5px 0 0; color: #333333; font-size: 14px; font-weight: 400;">{{ $v->replyUser->uname }}</a></em>
                                <a href="http://d.bbs.itxdl.cn/home.php?mod=spacecp&amp;ac=usergroup&amp;gid=20" target="_blank" style="padding: 0 10px 0 5px;">
                                @if($v->replyUser->score >=  3000 )
                                  班长
                                @elseif($v->replyUser->score >=  750)
                                  士官
                                @elseif($v->replyUser->score >=  350)
                                  上士
                                @elseif($v->replyUser->score >=  200)
                                  中士
                                @else($v->replyUser->score >=  100)
                                  下士
                                @endif
                                </a>
                                <em style="padding: 0 10px 0 0; color: #BBBBBB;">{{$v->created_at}}</em>
                                <div style="display:none;">
                                  <span class="pipe">|</span>
                                  <a href="http://bbs.itxdl.cn/forum.php?mod=viewthread&amp;tid=240393&amp;page=1&amp;authorid=442000" rel="nofollow">只看该作者</a></div>
                                <div style="display:none;"></div>
                                <strong style="margin: 0;" class="floors y">
                                  <a href="http://bbs.itxdl.cn/forum.php?mod=redirect&amp;goto=findpost&amp;ptid=240393&amp;pid=1068720" id="postnum1068720" onclick="setCopy(this.href, '帖子地址复制成功');return false;" style="line-height: 18px; padding: 2px 5px;">
                                  @if($k == 0)
                                  沙发
                                  @elseif($k == 1)
                                  板凳
                                  @elseif($k == 2)
                                  地板
                                  @else
                                  {{$k += 1}}#
                                  @endif
                                </a></strong>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="pct" style="padding-left: 60px; color: #515151;">
                        <div class="pcb">
                          <div class="t_fsz">
                            <table cellspacing="0" cellpadding="0">
                              <tbody>
                                <tr>
                                  <td class="t_f" id="postmessage_1068720">{!!$v->content!!}</td></tr>
                              </tbody>
                            </table>
                          </div>
                          <div id="comment_1068720" class="cm"></div>
                          <div id="post_rate_div_1068720"></div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="plc plm" style="overflow: visible;"></td>
                  </tr>
                  <tr id="_postposition1068720"></tr>
                  <tr>
                    <td class="plc" style="overflow:visible;--> width:100%">
                      <div class="po bbd reply_p">
                        <!-- <script type="text/javascript" src='/homes/static/js/jquery-1.11.1.min.js'></script> -->
                       <!--  <div class="pob cl">
                         <span style="float: left;">                    
                           <a  href="javascript:;" id="answer{{$v->rid}}" onclick="answer( {{$v->rid}} )"> 回复</a> -->
                          </span> 
                            <script type="text/javascript" reload="1">checkmgcmn('post_1068720')</script></div>
                      </div>
                       <!--  <form  action="/home/reply/addReply/{{$v->rid}}" id="answer_form{{ $v->rid }}" method="post" hidden>
                          {{ csrf_field() }}
                          <input type="text" id="acontent{{$v->id}}" name="acontent" >
                           <input type="hidden" name="rid" value="{{$v->rid}}">
                            <input type="hidden" name="tid" value="{{ $v->Post->pid }}">
                          <input type="button" value="回复" onclick="validata({{ $v->rid }})">
                          <input type="button" value="关闭" onclick="closer({{ $v->rid }})">
                        </form> -->
                      </div>
                    </td>
                  </tr>
                  <tr class="ad">
                    <td class="pls"></td>
                  </tr>
                </tbody>
                 <!-- <script type="text/javascript">
                    //显示回复表单方法
                    function answer(rid)
                    {
                    //回复
                     var answer = 'answer' + rid;
                     document.getElementById(answer).hidden=true;
                     //回复表单
                     var answer_form = 'answer_form' + rid;
                     document.getElementById(answer_form).hidden=false;
                    }
                    //隐藏回复表单方法
                    function closer(rid){
                      //定义回复的变量
                     var answer = 'answer' + rid;
                     document.getElementById(answer).hidden=false;
                     //回复表单
                     var answer_form = 'answer_form' + rid;
                     document.getElementById(answer_form).hidden=true;
                    }
                    //验证数据方法
                    function validata(rid){alert(rid);
                      var answer_form = 'answer_form' + rid;
                      var acontent_id = 'acontent' + rid;
                      alert(acontent_id);
                      var acontent = document.getElementById(acontent_id);
                      alert(acontent);
                      if(acontent.value == ""){
                        alert("回复不能为空！囧!");
                        return false;
                      }
                      document.getElementById(answer_form).submit();
                    }
                  </script> -->
              </table>
              @endforeach
            </div>
            <div id="postlistreply" class="pl">
              <div id="post_new" class="viewthread_table" style="display: none;"></div>
            </div>
          </div>
          <form method="post" autocomplete="off" name="modactions" id="modactions">
            <input type="hidden" name="formhash" value="327233d2">
            <input type="hidden" name="optgroup">
            <input type="hidden" name="operation">
            <input type="hidden" name="listextra" value="page%3D%257Bprevpage%257D">
            <input type="hidden" name="page" value="1"></form>
          <div class="pgs mtm mbm cl" style="padding: 20px 0 0 0;"></div>
          <!--[diy=diyfastposttop]-->
          <div id="diyfastposttop" class="area"></div>
          <!--[/diy]-->
          <script type="text/javascript">document.onkeyup = function(e) {
              keyPageScroll(e, 0, 0, 'forum.php?mod=viewthread&tid=240393', 1);
            }</script>
        </div>
        <!--[diy=diy_like1]-->
        <div id="diy_like1" class="area"></div>
        <!--[/diy]-->
        <script type="text/javascript">var postminchars = parseInt('10');
          var postmaxchars = parseInt('10000');
          var disablepostctrl = parseInt('0');</script>
        <div id="f_pst" class="pl bm bmw">
         <form class="form-inline" action="/home/reply/{{$posts_data->pid}}" method="post">
             {{  csrf_field() }}
             {{ method_field('PUT')}}
            <!--引入百度编辑器-->
            <script id="container" name="content" type="text/plain"></script>

           <!--  <button type="submit" class="btn btn-default">Send invitation</button> -->
            <input type="submit" class="btn btn-info" value="回帖" style="margin-left: 716px">
          </form>
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