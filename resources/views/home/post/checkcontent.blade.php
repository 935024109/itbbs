@extends('home.layout.index')
@section('main')
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
            <a href="http://d.bbs.itxdl.cn/space-uid-450063.html" target="_blank" class="toux">
              <img src="http://bbs.itxdl.cn/uc_server/avatar.php?uid=450063&amp;size=middle" data-bd-imgshare-binded="1"></a>
            <p>
              <a href="#" target="_blank">{{$user->uname}}</a></p>
            <p style="margin-top: 3px;">
              <a href="http://d.bbs.itxdl.cn/home.php?mod=spacecp&amp;ac=usergroup&amp;gid=20" target="_blank" style="color: #FF0000;">下士</a></p>
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
                       <!--  <a href="http://d.bbs.itxdl.cn/home.php?mod=spacecp&amp;ac=usergroup&amp;gid=7" target="_blank">游客</a> -->&nbsp;&nbsp;/&nbsp;&nbsp;{{$posts_data->created_at}}&nbsp;&nbsp;/&nbsp;&nbsp;
                        <span>
                          <a href="http://d.bbs.itxdl.cn/home.php?mod=spacecp&amp;ac=favorite&amp;type=thread&amp;id=240393&amp;formhash=327233d2" id="k_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" onmouseover="this.title = $('favoritenumber').innerHTML + ' 人收藏'" title="收藏本帖" class="k_favorite" style="padding-right: 10px;">
                            <i></i>0 人收藏</a>
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
                        <div class="viewthread_foot cl" style="margin-bottom: 0; border-bottom: 0;">
                          
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
                          
                          
                          <span class="cutline" style="margin: 9px 10px 0 0;"></span>
                          <a href="http://d.bbs.itxdl.cn/home.php?mod=spacecp&amp;ac=favorite&amp;type=thread&amp;id=240393&amp;formhash=327233d2" id="k_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" onmouseover="this.title = $('favoritenumber').innerHTML + ' 人收藏'" title="收藏本帖" class="k_favorite">收藏</a>
                          <div class="y" style="margin-top: 7px;">
                            <em>
                              <a class="times_fastre" href="forum.php?mod=post&amp;action=reply&amp;fid=271&amp;tid=240393&amp;reppost=1154080&amp;extra=page%3D%257Bprevpage%257D&amp;page=1" onclick="showWindow('reply', this.href)">
                                <span></span>回复</a>
                            </em>
                          </div>
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
              <table id="pid1068720" class="plhin" summary="pid1068720" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                    <td class="plc" style="width:100%">
                      <i class="arr"></i>
                      <div class="pi " style="height: 50px; padding-bottom: 0; border-bottom: 0;">
                        <div class="pti" style="color: #515151;">
                          <div class="authi">
                            <div class="cl" style="float: right; width: 660px; overflow: hidden;">
                              <div class="cl" style="height: 30px; margin: 7px 0 0 0; overflow: hidden;">
                                <em id="authorposton1068720">
                                  <a href="http://d.bbs.itxdl.cn/space-uid-442000.html" target="_blank" style="padding: 0 5px 0 0; color: #333333; font-size: 14px; font-weight: 400;">{{ $user->uname }}</a></em>
                                <a href="http://d.bbs.itxdl.cn/home.php?mod=spacecp&amp;ac=usergroup&amp;gid=20" target="_blank" style="padding: 0 10px 0 5px;">下士</a>
                                <em style="padding: 0 10px 0 0; color: #BBBBBB;">{{ $reply->created_at}}</em>
                                <div style="display:none;">
                                  <span class="pipe">|</span>
                                  <a href="http://bbs.itxdl.cn/forum.php?mod=viewthread&amp;tid=240393&amp;page=1&amp;authorid=442000" rel="nofollow">只看该作者</a></div>
                                <div style="display:none;"></div>
                                <strong style="margin: 0;" class="floors y">
                                  <a href="http://bbs.itxdl.cn/forum.php?mod=redirect&amp;goto=findpost&amp;ptid=240393&amp;pid=1068720" id="postnum1068720" onclick="setCopy(this.href, '帖子地址复制成功');return false;" style="line-height: 18px; padding: 2px 5px;">沙发</a></strong>
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
                                  <td class="t_f" id="postmessage_1068720">没有基础的情况下确实会感到比较困难，能够寻求导师和同学的帮助是值得肯定的，没有人是生来什么都会得，相信你继续保持学习的热情，积极面对遇到的难题，是能够成为佼佼者的，加油！</td></tr>
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
                        <div class="pob cl">
                          <span style="float: left;">
                            <a class="fastre" href="forum.php?mod=post&amp;action=reply&amp;fid=271&amp;tid=240393&amp;repquote=1068720&amp;extra=page%3D%257Bprevpage%257D&amp;page=1" onclick="showWindow('reply', this.href)">回复</a></span>
                          <em>
                            <a href="javascript:;" id="mgc_post_1068720" onmouseover="showMenu(this.id)" class="showmenu" style="display: none;"></a>
                            <a href="javascript:;" onclick="showWindow('miscreport1068720', 'misc.php?mod=report&amp;rtype=post&amp;rid=1068720&amp;tid=240393&amp;fid=271', 'get', -1);return false;" style="padding-left: 0;">举报</a></em>
                          <ul id="mgc_post_1068720_menu" class="p_pop mgcmn" style="display: none;"></ul>
                          <script type="text/javascript" reload="1">checkmgcmn('post_1068720')</script></div>
                      </div>
                    </td>
                  </tr>
                  <tr class="ad">
                    <td class="pls"></td>
                  </tr>
                </tbody>
              </table>
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
          <form method="post" autocomplete="off" id="fastpostform" action="forum.php?mod=post&amp;action=reply&amp;fid=271&amp;tid=240393&amp;extra=page%3D%257Bprevpage%257D&amp;replysubmit=yes&amp;infloat=yes&amp;handlekey=fastpost" onsubmit="return fastpostvalidate(this)">
            <table cellspacing="0" cellpadding="0">
              <tbody>
                <tr>
                  <td class="plc">
                    <span id="fastpostreturn"></span>
                    <div class="cl">
                      <div id="fastsmiliesdiv" class="y" style="margin-top: 60px;">
                        <div id="fastsmiliesdiv_data">
                          <div id="fastsmilies"></div>
                        </div>
                      </div>
                      <div class="hasfsl" id="fastposteditor">
                        <div class="tedt mtn">
                          <div class="bar">
                            <span class="y">
                              <a href="http://bbs.itxdl.cn/forum.php?mod=post&amp;action=reply&amp;fid=271&amp;tid=240393" onclick="return switchAdvanceMode(this.href)">高级模式</a></span>
                            <script src="/home/js/seditor.js" type="text/javascript"></script>
                            <div class="fpd">
                              <a href="javascript:;" title="文字加粗" class="fbld">B</a>
                              <a href="javascript:;" title="设置文字颜色" class="fclr" id="fastpostforecolor">Color</a>
                              <a id="fastpostimg" href="javascript:;" title="图片" class="fmg">Image</a>
                              <a id="fastposturl" href="javascript:;" title="添加链接" class="flnk">Link</a>
                              <a id="fastpostquote" href="javascript:;" title="引用" class="fqt">Quote</a>
                              <a id="fastpostcode" href="javascript:;" title="代码" class="fcd">Code</a>
                              <a href="javascript:;" class="fsml" id="fastpostsml">Smilies</a></div>
                          </div>
                          <div class="area">
                            <div class="pt hm">您需要登录后才可以回帖
                              <a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)" class="xi2">登录</a>|
                              <a href="member.php?mod=register" class="xi2">立即注册</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <input type="hidden" name="formhash" value="327233d2">
                    <input type="hidden" name="usesig" value="">
                    <input type="hidden" name="subject" value="  ">
                    <div class="pnpost cl" style="padding-top: 10px;">
                      <button type="button" onclick="showWindow('login', 'member.php?mod=logging&amp;action=login&amp;guestmessage=yes')" name="replysubmit" id="fastpostsubmit" class="pn pnc vm" value="replysubmit" tabindex="5" style="float: right; padding: 0; height: 35px; line-height: 35px;">
                        <strong style="padding: 0 15px; font-size: 14px; font-weight: bold;">发表回复</strong></button>
                      <em style="float: right; margin: 2px 0 0 0;"></em>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
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
@endsection