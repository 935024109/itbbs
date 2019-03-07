@extends('home.layout.index')

@section('main')
<div id="wp" class="wp time_wp cl">
  <script type="text/javascript">var fid = parseInt('127'),
    tid = parseInt('244180');</script>
  <script src="static/js/forum_moderate.js?Ac9" type="text/javascript"></script>
  <script src="static/js/forum_viewthread.js?Ac9" type="text/javascript"></script>
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
      <a href="http://bbs.itxdl.cn/forum.php?mod=viewthread&amp;action=printable&amp;tid=244180" title="打印" target="_blank">
        <img src="static/image/common/print.png" alt="打印" class="vm" data-bd-imgshare-binded="1"></a>
      <a href="http://bbs.itxdl.cn/forum.php?mod=redirect&amp;goto=nextoldset&amp;tid=244180" title="上一主题">
        <img src="static/image/common/thread-prev.png" alt="上一主题" class="vm" data-bd-imgshare-binded="1"></a>
      <a href="http://bbs.itxdl.cn/forum.php?mod=redirect&amp;goto=nextnewset&amp;tid=244180" title="下一主题">
        <img src="static/image/common/thread-next.png" alt="下一主题" class="vm" data-bd-imgshare-binded="1"></a>
    </div>
  </div>
  <script src="http://pc1.gtimg.com/js/jquery-1.4.4.min.js" type="text/javascript"></script>
  <script type="text/javascript">jQuery.noConflict();</script>
  <script type="text/javascript">(function(d) {
      j = d.createElement('script');
      j.src = '//openapi.guanjia.qq.com/fcgi-bin/getdzjs?cmd=urlquery_gbk_zh_cn';
      j.setAttribute('ime-cfg', 'lt=2');
      d.getElementsByTagName('head')[0].appendChild(j)
    })(document)</script>
  <link rel="stylesheet" type="text/css" href="http://s.pc.qq.com/discuz/css/style.css">
  <style id="diy_style" type="text/css"></style>
  <div class="wp">
    <!--[diy=diy1]-->
    <div id="diy1" class="area"></div>
    <!--[/diy]--></div>
  <div id="ct" class="wp ct2 cl">
    <ul class="p_pop" id="newspecial_menu" style="display: none">
      <li>
        <a href="http://bbs.itxdl.cn/forum.php?mod=post&amp;action=newthread&amp;fid=127">发表帖子</a></li>
      <li class="poll">
        <a href="http://bbs.itxdl.cn/forum.php?mod=post&amp;action=newthread&amp;fid=127&amp;special=1">发起投票</a></li>
      <li class="reward">
        <a href="http://bbs.itxdl.cn/forum.php?mod=post&amp;action=newthread&amp;fid=127&amp;special=3">发布悬赏</a></li>
      <li class="debate">
        <a href="http://bbs.itxdl.cn/forum.php?mod=post&amp;action=newthread&amp;fid=127&amp;special=5">发起辩论</a></li>
      <li class="activity">
        <a href="http://bbs.itxdl.cn/forum.php?mod=post&amp;action=newthread&amp;fid=127&amp;special=4">发起活动</a></li>
      <li class="trade">
        <a href="http://bbs.itxdl.cn/forum.php?mod=post&amp;action=newthread&amp;fid=127&amp;special=2">出售商品</a></li>
    </ul>
    <div id="mdly" class="fwinmask" style="display:none;z-index:350;">
      <table cellspacing="0" cellpadding="0" class="fwin">
        <tbody>
          <tr>
            <td class="t_l"></td>
            <td class="t_c"></td>
            <td class="t_r"></td>
          </tr>
          <tr>
            <td class="m_l">&nbsp;&nbsp;</td>
            <td class="m_c">
              <div class="f_c">
                <div class="c">
                  <h3>选中&nbsp;
                    <strong id="mdct" class="xi1"></strong>&nbsp;篇:</h3>
                  <a href="javascript:;" onclick="modaction('stickreply')">置顶</a>
                  <span class="pipe">|</span></div>
              </div>
            </td>
            <td class="m_r"></td>
          </tr>
          <tr>
            <td class="b_l"></td>
            <td class="b_c"></td>
            <td class="b_r"></td>
          </tr>
        </tbody>
      </table>
    </div>
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
              <ul style="border-top: 0;">
                <li>
                  <i>
                    <span></span>
                  </i>
                  <a href="http://bbs.itxdl.cn/read-htm-tid-244229-page-1.html" target="_blank">学习学习</a>
                  <p>
                  </p>
                </li>
                <li>
                  <i>
                    <span></span>
                  </i>
                  <a href="http://bbs.itxdl.cn/read-htm-tid-244169-page-1.html" target="_blank">xinr</a>
                  <p>
                  </p>
                </li>
                <li>
                  <i>
                    <span></span>
                  </i>
                  <a href="http://bbs.itxdl.cn/read-htm-tid-244232-page-1.html" target="_blank">ghjkjhlkkjljl</a>
                  <p>
                  </p>
                </li>
              </ul>
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
        <div class="box cl" style="padding: 25px 25px 10px 25px;height:500px; background: #FFFFFF;">
          <div class="zprrtt cl">
            <div class="moquu_rrskzx">
              <div class="moquu_date">
                <div class="moquu_rrbt cl">
                  <div class="css cl">
                    <div class="moquu_mz cl">
                      <h1>[我要提问]
                        <a href="http://bbs.itxdl.cn/forum.php?mod=viewthread&amp;tid=244180&amp;fromuid=450063" onclick="return copyThreadUrl(this, '兄弟连论坛_每个人的交流社区')">{{$posts_data->title}}</a></h1>
                    </div>
                    <div class="moquu_small">
                      <p>
                        <a href="/vip" class=""></a>©
                        <a href="#" target="_blank">{{$user->uname}}</a>
                        <a href="#" target="_blank">下士</a>&nbsp;&nbsp;/&nbsp;&nbsp;2019-2-25 10:51&nbsp;&nbsp;/&nbsp;&nbsp;
                        <span>
                          <a href="http://d.bbs.itxdl.cn/home.php?mod=spacecp&amp;ac=favorite&amp;type=thread&amp;id=244180&amp;formhash=9ad9bf04" id="k_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" onmouseover="this.title = $('favoritenumber').innerHTML + ' 人收藏'" title="收藏本帖" class="k_favorite" style="padding-right: 10px;">
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
            <div id="post_1158631">
              <table id="pid1158631" class="plhin" summary="pid1158631" cellspacing="0" cellpadding="0">
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
                                  <td class="t_f" id="postmessage_1158631">{!! $posts_data -> content !!}
                                    <br>
                                    <br></td></tr>
                              </tbody>
                            </table>
                          </div>
                          <div id="comment_1158631" class="cm"></div>
                          <div id="post_rate_div_1158631"></div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="plc plm">
                      <div id="p_btn" class="mtw hm cl" style="margin-bottom: 30px;"></div>
                      <div id="viewthread_foot cl">
                        <div class="viewthread_foot cl" style="margin-bottom: 0; border-bottom: 0;">
                          <!-- 分享按钮 -->
                          <div class="bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1551766258370">
                            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                            <a href="#" class="bds_more" data-cmd="more"></a>
                          </div>
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
                          <!-- <div class="bdsharebuttonbox cl" style="padding: 0 5px 20px 0;">
                          <em style="padding: 0; background: none; color: #999999;">分享至 :</em>
                          <a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a>
                          <a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a>
                          <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间">QQ空间</a>
                          <a href="#" class="bds_more" data-cmd="more"></a></div> -->
                          <script>window._bd_share_config = {
                              "common": {
                                "bdSnsKey": {},
                                "bdText": "",
                                "bdMini": "2",
                                "bdMiniList": false,
                                "bdPic": "",
                                "bdStyle": "0",
                                "bdSize": "16"
                              },
                              "share": {},
                              "image": {
                                "viewList": ["qzone", "tsina", "tqq", "renren", "weixin"],
                                "viewText": "分享到：",
                                "viewSize": "16"
                              },
                              "selectShare": {
                                "bdContainerClass": null,
                                "bdSelectMiniList": ["qzone", "tsina", "tqq", "renren", "weixin"]
                              }
                            };
                            with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~ ( - new Date() / 36e5)];</script>
                          <span class="cutline" style="margin: 9px 10px 0 0;"></span>
                          <a href="http://d.bbs.itxdl.cn/home.php?mod=spacecp&amp;ac=favorite&amp;type=thread&amp;id=244180&amp;formhash=9ad9bf04" id="k_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" onmouseover="this.title = $('favoritenumber').innerHTML + ' 人收藏'" title="收藏本帖" class="k_favorite">收藏</a>
                          <div class="y" style="margin-top: 7px;">
                            <em>
                              <a class="times_fastre" href="forum.php?mod=post&amp;action=reply&amp;fid=127&amp;tid=244180&amp;reppost=1158631&amp;extra=&amp;page=1" onclick="showWindow('reply', this.href)">
                                <span></span>回复</a>
                              <a class="times_editp" href="forum.php?mod=post&amp;action=edit&amp;fid=127&amp;tid=244180&amp;pid=1158631&amp;page=1">
                                <span></span>编辑</a>
                            </em>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr id="_postposition1158631"></tr>
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
                <strong>0</strong>个回复</h2></div>
            <div id="postlistreply" class="pl">
              <div id="post_new" class="viewthread_table" style="display: none;"></div>
            </div>
          </div>
          <form method="post" autocomplete="off" name="modactions" id="modactions">
            <input type="hidden" name="formhash" value="9ad9bf04">
            <input type="hidden" name="optgroup">
            <input type="hidden" name="operation">
            <input type="hidden" name="listextra" value="">
            <input type="hidden" name="page" value="1"></form>
          <div class="pgs mtm mbm cl" style="padding: 20px 0 0 0;"></div>
          <!--[diy=diyfastposttop]-->
          <div id="diyfastposttop" class="area"></div>
          <!--[/diy]-->
          <div id="visitedforums_menu" class="p_pop blk cl" style="display: none;">
            <table cellspacing="0" cellpadding="0">
              <tbody>
                <tr>
                  <td id="v_forums">
                    <h3 class="mbn pbn bbda xg1">浏览过的版块</h3>
                    <ul class="xl xl1">
                      <li>
                        <a href="http://bbs.itxdl.cn/thread-htm-fid-271-page-1.html">Java技术</a></li>
                      <li>
                        <a href="http://bbs.itxdl.cn/thread-htm-fid-291-page-1.html">Go全栈+区块链</a></li>
                      <li>
                        <a href="http://bbs.itxdl.cn/thread-htm-fid-252-page-1.html">战地日记</a></li>
                      <li>
                        <a href="http://bbs.itxdl.cn/thread-htm-fid-286-page-1.html">Python+人工智能技术</a></li>
                      <li>
                        <a href="http://bbs.itxdl.cn/thread-htm-fid-126-page-1.html">HTML5技术</a></li>
                      <li>
                        <a href="http://bbs.itxdl.cn/thread-htm-fid-274-page-1.html">在线直播课</a></li>
                    </ul>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <script type="text/javascript">document.onkeyup = function(e) {
              keyPageScroll(e, 0, 0, 'forum.php?mod=viewthread&tid=244180', 1);
            }</script>
        </div>
        <!--[diy=diy_like1]-->
        <div id="diy_like1" class="area"></div>
        <!--[/diy]-->
        <script type="text/javascript">var postminchars = parseInt('10');
          var postmaxchars = parseInt('10000');
          var disablepostctrl = parseInt('1');</script>
        <div id="f_pst" class="pl bm bmw">
          <form method="post" autocomplete="off" id="fastpostform" action="forum.php?mod=post&amp;action=reply&amp;fid=127&amp;tid=244180&amp;extra=&amp;replysubmit=yes&amp;infloat=yes&amp;handlekey=fastpost" onsubmit="return fastpostvalidate(this)">
            <table cellspacing="0" cellpadding="0">
              <tbody>
                <tr>
                  <td class="plc">
                    <span id="fastpostreturn"></span>
                    <div class="cl">
                      <div id="fastsmiliesdiv" class="y" style="margin-top: 60px;">
                        
                      </div>
                      <div class="hasfsl" id="fastposteditor">
                        <div class="tedt mtn">
                          <div class="bar">
                            <span class="y">
                              <a href="http://bbs.itxdl.cn/forum.php?mod=post&amp;action=reply&amp;fid=127&amp;tid=244180" onclick="return switchAdvanceMode(this.href)">高级模式</a></span>
                            <script src="static/js/seditor.js?Ac9" type="text/javascript"></script>
                            <div class="fpd">
                              <a href="javascript:;" title="文字加粗" class="fbld" onclick="seditor_insertunit('fastpost', '[b]', '[/b]');doane(event);">B</a>
                              <a href="javascript:;" title="设置文字颜色" class="fclr" id="fastpostforecolor" onclick="showColorBox(this.id, 2, 'fastpost');doane(event);">Color</a>
                              <a id="fastpostimg" href="javascript:;" title="图片" class="fmg" onclick="seditor_menu('fastpost', 'img');doane(event);">Image</a>
                              <a id="fastposturl" href="javascript:;" title="添加链接" class="flnk" onclick="seditor_menu('fastpost', 'url');doane(event);">Link</a>
                              <a id="fastpostquote" href="javascript:;" title="引用" class="fqt" onclick="seditor_menu('fastpost', 'quote');doane(event);">Quote</a>
                              <a id="fastpostcode" href="javascript:;" title="代码" class="fcd" onclick="seditor_menu('fastpost', 'code');doane(event);">Code</a>
                              <a href="javascript:;" class="fsml" id="fastpostsml" onclick="showMenu({'ctrlid':this.id,'evt':'click','layer':2});return false;">Smilies</a>
                              <script type="text/javascript" reload="1">smilies_show('fastpostsmiliesdiv', 8, 'fastpost');</script>
                              <span class="pipe z">|</span>
                              <span id="spanButtonPlaceholder">上传</span></div>
                          </div>
                          <div class="area">
                            <textarea rows="6" cols="80" name="message" id="fastpostmessage" onkeydown="seditor_ctlent(event, 'fastpostvalidate($(\'fastpostform\'))');" tabindex="4" class="pt"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <script type="text/javascript">var editorid = '';
                      var ATTACHNUM = {
                        'imageused': 0,
                        'imageunused': 0,
                        'attachused': 0,
                        'attachunused': 0
                      },
                      ATTACHUNUSEDAID = new Array(),
                      IMGUNUSEDAID = new Array();</script>
                    <input type="hidden" name="posttime" id="posttime" value="1551766251">
                    <div class="upfl hasfsl">
                      <table cellpadding="0" cellspacing="0" border="0" id="attach_tblheader" style="display: none;">
                        <tbody>
                          <tr>
                            <td>点击附件文件名添加到帖子内容中</td>
                            <td class="atds">描述</td>
                            <td class="attv">阅读权限
                              <img src="static/image/common/faq.gif" alt="Tip" class="vm" onmouseover="showTip(this)" tip="阅读权限按由高到低排列，高于或等于选中组的用户才可以阅读" data-bd-imgshare-binded="1"></td>
                            <td class="attc"></td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="fieldset flash" id="attachlist"></div>
                      <script src="static/js/upload.js?Ac9" type="text/javascript"></script>
                      <script type="text/javascript">var upload = new SWFUpload({
                          upload_url: "http://bbs.itxdl.cn/misc.php?mod=swfupload&action=swfupload&operation=upload&fid=127",
                          post_params: {
                            "uid": "450063",
                            "hash": "c6b39a3ed8b7868aeeadc065e684392b"
                          },
                          file_size_limit: "2048",
                          file_types: "*.*",
                          file_types_description: "All Support Formats",
                          file_upload_limit: 0,
                          file_queue_limit: 0,
                          swfupload_preload_handler: preLoad,
                          swfupload_load_failed_handler: loadFailed,
                          file_dialog_start_handler: fileDialogStart,
                          file_queued_handler: fileQueued,
                          file_queue_error_handler: fileQueueError,
                          file_dialog_complete_handler: fileDialogComplete,
                          upload_start_handler: uploadStart,
                          upload_progress_handler: uploadProgress,
                          upload_error_handler: uploadError,
                          upload_success_handler: uploadSuccess,
                          upload_complete_handler: uploadComplete,
                          button_image_url: "static/image/common/uploadbutton_small.png",
                          button_placeholder_id: "spanButtonPlaceholder",
                          button_width: 17,
                          button_height: 25,
                          button_cursor: SWFUpload.CURSOR.HAND,
                          button_window_mode: "transparent",
                          custom_settings: {
                            progressTarget: "attachlist",
                            uploadSource: 'forum',
                            uploadType: 'attach',
                            uploadFrom: 'fastpost'
                          },
                          debug: false
                        });</script>
                    </div>
                    <input type="hidden" name="formhash" value="9ad9bf04">
                    <input type="hidden" name="usesig" value="">
                    <input type="hidden" name="subject" value="  ">
                    <div class="pnpost cl" style="padding-top: 10px;">
                      <button type="submit" onmouseover="checkpostrule('seccheck_fastpost', 'ac=reply');this.onmouseover=null" name="replysubmit" id="fastpostsubmit" class="pn pnc vm" value="replysubmit" tabindex="5" style="float: right; padding: 0; height: 35px; line-height: 35px;">
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
        fObj.href = 'home.php?mod=spacecp&ac=follow&op=add&hash=9ad9bf04&fuid=' + values['fuid'];
      }
    }
    fixed_avatar([1158631], 1);</script>
</div>
<!-- 判断是否显示发帖按钮 -->
<!-- <script type="text/javascript">
	alert($);
</script> -->
@endsection