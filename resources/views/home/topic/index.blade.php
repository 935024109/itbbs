@extends('home.layout.create')

@section('main')
<div id="ct" class="wp ct2 cl">
  <div class="cl">
    <div class="sd">
      <div class="quater_author_info cl">
        <div class="quater_author_info_1 cl">
          <a href="http://d.bbs.itxdl.cn/space-uid-444303.html" target="_blank" class="toux">
            <img src="http://www.itbbs.com/uploads/{{$user->photo}}"  data-bd-imgshare-binded="1"></a>
          <p>
            <a href="http://d.bbs.itxdl.cn/space-uid-444303.html" style="text-align:center;" target="_blank"></a></p>
             <div class="time_thread_stat cl">{{$user->nickname}}</div>
          <p style="margin-top: 3px;">
            <a href="http://d.bbs.itxdl.cn/home.php?mod=spacecp&amp;ac=usergroup&amp;gid=26" target="_blank" style="color: #FF0000;">
                @if($user->auth == 0)
            普通会员
            @elseif($user->auth == 1)
            版主
            @else($user->auth == 2)
            站长
            @endif

            </a></p>
         <div class="time_thread_stat cl">
 <ul>     
                  <li><a>{{$user->score}}</a><p>积分</p></li>
                    <li><a>{{$post_count}}</a><p>帖子</p></li>
                    <li style="border-right: 0;"><a>{{$post_hot_count}}</a><p>精华</p></li>
 </ul>
                </div>
        </div>
        <div class="quater_author_info_3 cl" style="background: #F9F9F9;">
          <div class="s_timeline s_timeline2 cl" style="margin: 0 20px 20px 20px;"></div>
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
                      <a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=252&amp;filter=typeid&amp;typeid=1115" class="colorlink">[PHP]</a>
                      <a href="http://bbs.itxdl.cn/read-htm-tid-244171-page-1.html" onclick="return copyThreadUrl(this, '兄弟连论坛_每个人的交流社区')">{{$post_content->title}}</a></h1>
                  </div>
                 <div class="moquu_small">
            <p><a href="/vip" class=""></a>©                                                                         <a href="http://d.bbs.itxdl.cn/space-uid-129412.html" target="_blank">{{$user->nickname}}</a>                  <a href="http://d.bbs.itxdl.cn/home.php?mod=spacecp&amp;ac=usergroup&amp;gid=1" target="_blank">
            </a>
            @if($user->auth == 0)
            普通会员
            @elseif($user->auth == 1)
            版主
            @else($user->auth == 2)
            站长
            @endif
                <a href="javascript:void(0)" class="cc1" title="保留作者信息">保留作者信息</a>
                <a href="javascript:void(0)" class="cc2" title="禁止商业使用（站长自定义文字）">禁止商业使用（站长自定义文字）</a></span></p>
          </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="postlist" class="pl bm" style="padding: 25px 0 0 0;">
          <div id="post_1158615">
            <table id="pid1158615" class="plhin" summary="pid1158615" cellspacing="0" cellpadding="0">
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
                                <td class="t_f" id="postmessage_1158615">
	                                <div align="left">
	                                   {{$post_content->content}}		
	                                </div>
                              </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div id="comment_1158615" class="cm"></div>
                        <div id="post_rate_div_1158615"></div>
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
                        <div class="bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1552353055380">
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
                        <a href="http://d.bbs.itxdl.cn/home.php?mod=spacecp&amp;ac=favorite&amp;type=thread&amp;id=244171&amp;formhash=f022a392" id="k_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" onmouseover="this.title = $('favoritenumber').innerHTML + ' 人收藏'" title="收藏本帖" class="k_favorite">收藏</a>
                       
                      </div>
                    </div>
                  </td>
                </tr>
               
               
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!--[diy=diy_like]-->
      <div id="diy_like" class="area"></div>
        <div id="visitedforums_menu" class="p_pop blk cl" style="display: none;">
          <table cellspacing="0" cellpadding="0">
            <tbody>
              <tr>
                <td id="v_forums">
                  <h3 class="mbn pbn bbda xg1">浏览过的版块</h3>
                  <ul class="xl xl1">
                    <li>
                      <a href="http://bbs.itxdl.cn/thread-htm-fid-175-page-1.html">在线课</a></li>
                  </ul>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <script type="text/javascript">document.onkeyup = function(e) {
            keyPageScroll(e, 0, 0, 'forum.php?mod=viewthread&tid=244171', 1);
          }</script>
      </div>
      <!--[diy=diy_like1]-->
      <div id="diy_like1" class="area"></div>
      <!--[/diy]-->
      <script type="text/javascript">var postminchars = parseInt('10');
        var postmaxchars = parseInt('10000');
        var disablepostctrl = parseInt('0');</script>
      <div id="f_pst" class="pl bm bmw">
        <form method="post" autocomplete="off" id="fastpostform" action="forum.php?mod=post&amp;action=reply&amp;fid=252&amp;tid=244171&amp;extra=page%3D%257Bprevpage%257D&amp;replysubmit=yes&amp;infloat=yes&amp;handlekey=fastpost" onsubmit="return fastpostvalidate(this)">
          <table cellspacing="0" cellpadding="0">
            <tbody>
             
            </tbody>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection