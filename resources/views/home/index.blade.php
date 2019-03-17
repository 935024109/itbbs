@extends('home/layout/index')
    
@section('title')
{{ $title[0]->title }}

@endsection
    @section('main')
    <div id="wp" class="wp time_wp cl">
      <script src="/homes/static/js/jquery.superslide.js" type="text/javascript" type="text/javascript"></script>
      <style id="diy_style" type="text/css"></style>
      <!-- 闈㈠寘灞?-->
      <div id="pt" class="bm cl" style="padding: 0;display: none;">
        <div class="z">
          <a href="./" class="nvhm" title="首页">兄弟连论坛_每个人的交流社区</a>
          <em>&raquo;</em>
          <a href="http://bbs.itxdl.cn/forum.php">论坛</a></div>
        <div class="z"></div>
      </div>
      <div class="wp cl">
        <!--[diy=diy1]-->
        <div id="diy1" class="area">
          <div id="framePY40WZ" class="frame move-span cl frame-1">
            <div id="framePY40WZ_left" class="column frame-1-c">
              <div id="framePY40WZ_left_temp" class="move-span temp"></div>
            </div>
          </div>
        </div>
        <!--[/diy]--></div>
      <div class="wp cl" style="margin: 0;margin-top: 20px;">
        <!--[diy=diy_chart]-->
        <div id="diy_chart" class="area"></div>
        <!--[/diy]-->
        <div class="mn cl" style="float: left; width: 770px;">
          <!--[diy=diy_center]-->
          <div id="diy_center" class="area">
            <div id="framelap7iz" class="frame move-span cl frame-1">
              <div id="framelap7iz_left" class="column frame-1-c">
                <div id="framelap7iz_left_temp" class="move-span temp"></div>
                <div id="portal_block_3" class="block move-span">
                  <div id="portal_block_3_content" class="dxb_bc">
                    <div class="foucebox cl">
                      <!-- 大图 -->
                      <div class="bd">
                        @foreach($carousels_data as $k => $v)
                        <div class="showDiv">
                          <a href="{{ $v->link_url }}" target="_blank">
                            <img src="/uploads/images/carousel/{{ $v->img_src }}" width="770" height="330" /></a>
                          <div class="foucebox_bg"></div>
                          <div>
                            <h2>
                              <a href="http://python.itxdl.cn/">兄弟连Python培训</a></h2>
                          </div>
                        </div>
                        @endforeach
                      </div>
                      <!-- 小图 -->
                      <div class="hd">
                        <ul>
                          @foreach($carousels_data as $k => $v)
                          <li>
                            <a href="{{ $v->link_url }}">
                              <img src="/uploads/images/carousel/{{ $v->img_src }}">
                              <span class="txt_bg"></span>
                              <span class="mask"></span>
                            </a>
                          </li>
                          @endforeach
                        </ul> 
                      </div>
                    </div>
                    <script type="text/javascript">jQuery(".foucebox").slide({
                        effect: "fold",
                        autoPlay: true,
                        delayTime: 300,
                        startFun: function(i) {
                          //下面代码控制文字显示
                          jQuery(".foucebox .showDiv").eq(i).find("h2").css({
                            display: "none",
                            bottom: 0
                          }).animate({
                            opacity: "show",
                            bottom: "15px"
                          },
                          300);
                          jQuery(".foucebox .showDiv").eq(i).find("p").css({
                            display: "none",
                            bottom: 0
                          }).animate({
                            opacity: "show",
                            bottom: "6px"
                          },
                          300);
                        }
                      });</script>
                  </div>
                </div>
              </div>
            </div>
            <div id="frameUd9DWM" class="frame move-span cl frame-1">
              <div id="frameUd9DWM_left" class="column frame-1-c">
                <div id="frameUd9DWM_left_temp" class="move-span temp"></div>



                <div id="portal_block_32" class="block move-span">
                  <div id="portal_block_32_content" class="dxb_bc">
                    <div class="listBlocks noticeWrap" style="width:100%; padding: 0; margin-bottom: 0; box-shadow: none;">

                      <div id="notice">
                        <div style="width: 705px; margin-left: 0;" class="notices bd">
                          
                          <ul>
                           @foreach($announcement as $k=> $v)
                              <li style="width: 705px;">
                                <a class="imgAni_curr" href="{{$v->href}}/{{$v->id}}" title="{{$v->title}}" target="_blank">{{$v->title}}</a>
                                <i class="icon icon_zan">07-13</i>
                              </li>
                           @endforeach
                           
                          </ul>

                        </div>
                      </div>

                      <script type="text/javascript">jQuery.noConflict();
                        jQuery("#notice").slide({
                          titCell: ".hd",
                          mainCell: ".bd ul",
                          autoPage: true,
                          effect: "topLoop",
                          autoPlay: true,
                          delayTime: 1000
                        });</script>
                    </div>
                  </div>
                </div>

                  

                <div id="portal_block_10" class="block move-span">
                  <div id="portal_block_10_content" class="dxb_bc">
                    <div class="box cl" style="margin-bottom: 0; border-radius: 2px 2px 0 0;">
                      <h3 class="modname" style="padding: 0 25px;">推荐阅读</h3>
                      <div class="recommend_pic_small cl">
                        <ul>
                          @foreach($grooms as $k => $v)
                          <li>
                            <a href="{{$v->img_href}}{{$v->pid}}" target="_blank" title="">
                              <img src="/uploads/images/groom/{{$v->picture}}" alt="" height="100" width="228"></a>
                          </li>
                          @endforeach
                        </ul>
                      </div>
                      <div class="recommend_article_list cl">
                        <!--<ul></ul>--></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--[/diy]-->
          <div class="cl" style="box-shadow: 0px 1px 1px rgba(0,0,0,0.08);">
            <div id="chart" class="bm mb10 cl" style="padding: 20px 25px; margin: 0; border-radius: 0; border-top: 1px solid #F1F1F1; border-bottom: 1px solid #F1F1F1; background: #F9F9F9; box-shadow: none;">
              <p class="chart z">今日:
                <em>2</em>
                <span class="pipe">|</span>昨日:
                <em>10</em>
                <span class="pipe">|</span>帖子:
                <em>1064499</em>
                <span class="pipe">|</span>会员:
                <em>449421</em>
                <span class="pipe">|</span>欢迎新会员:
                <em>
                  <a href="http://d.bbs.itxdl.cn/space-username-NasomaLiach.html" target="_blank" class="xi2">NasomaLiach</a></em>
              </p>
              <div class="y">
                <a href="http://bbs.itxdl.cn/forum.php?mod=guide&amp;view=new" title="最新回复" class="xi2">最新回复</a></div>
            </div>
            <div class="Framebox cl" style="width: 720px; padding: 10px 25px; border-radius: 0 0 2px 2px; background: #FFFFFF; box-shadow: none; overflow: hidden;">
              <!-- 栏目遍历 -->
              @foreach($data as $k=>$v)
              <div class="fl bm" style="margin-right: 50px;">
                <div class="bm bmw  flg cl">
                  <div class="bm_h cl">
                    <h2>
                      :::. {{$v->fname}} :::.</h2>
                  </div>
                  <div id="category_123" class="bm_c" style="">
                    <table cellspacing="0" cellpadding="0" class="fl_tb">
                      <!-- 二级栏目遍历 -->
                      @foreach($v->sub as $kk=>$vv)
                      <tr>
                        <td class="fl_g" width="49.9%">
                          <div class="fl_icn_g" style="width: 60px;">
                            <a href="/home/post/{{$vv->fid}}/edit">
                              <img src="/homes/static/picture/common_271_icon.png" align="left" alt="" /></a>
                          </div>
                          <dl style="margin-left: 60px;">
                            <dt>
                              <a href="/home/post/{{$vv->fid}}/edit">{{$vv->fname}}</a>
                            <dd>
                              <em>帖数: {{$vv->count}}</em></dd>
                            <dd>
                              <a href="http://bbs.itxdl.cn/forum.php?mod=redirect&amp;tid=243117&amp;goto=lastpost#lastpost" class="xi2" style="color: #555555;">{{$vv->title}}</a>
                              <cite>{{$vv->created}}
                                <a href="home/user/{{session('id')}}">{{$vv->auth}}</a></cite>
                            </dd>
                          </dl>
                        </td>
                      </tr>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
              @endforeach

              <div class="wp mtn">
                <!--[diy=diy3]-->
                <div id="diy3" class="area"></div>
                <!--[/diy]--></div>
              <div id="online" class="bm oll">
                
              </div>
              <div class="bm lk">
                <div id="category_lk" class="bm_c ptm">
                  <ul class="x mbm cl">
                    @foreach($blogroll as $k => $v)
                    <li>
                      <a href="{{$v->url}}" target="_blank" title="{{$v->name}}">{{$v->name}}</a>
                    </li>
                    @endforeach
                  
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="main_sidebar" style="width: 310px;">
          <div class="cl" style="height: auto; margin: 0; overflow: hidden;">
            <!--[diy=diy6]-->
            <div id="diy6" class="area">
              <div id="frameW44663" class="frame move-span cl frame-1">
                <div id="frameW44663_left" class="column frame-1-c">
                  <div id="frameW44663_left_temp" class="move-span temp"></div>
                  <div id="portal_block_4" class="block move-span">
                    <div id="portal_block_4_content" class="dxb_bc">
                      <div class="portal_block_summary">
                        <div class="itofeedback cl">
                          <a class="bluebigbutton" href='/home/post/create/{{$id or 0}}' title="发帖">发帖</a> 
                          <a href="/home/signs/create" target="_blank" class="greenbigbutton" title="签到" style="margin-right: 0;">签到</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="frameyexZNq" class="frame move-span cl frame-1">
                <div id="frameyexZNq_left" class="column frame-1-c">
                  <div id="frameyexZNq_left_temp" class="move-span temp"></div>
                  <div id="portal_block_11" class="block move-span">
                    <div id="portal_block_11_content" class="dxb_bc">
                      <div class="box">
                      
                        <h3 class="modname">

                            @foreach($topic as $k => $v)
                          
                          <span class="more" style="float: right; font-weight: 400;">第1期 - {{$v->updated_at}} 更新</span>兄弟连话题
                            @endforeach
                        </h3>

                          @foreach($topic as $k => $v)
                         
                          <a href="/home/topic/post/{{$v->pid}}">
                            <img src="/uploads/{{$v->logo}}" target="_blank" style="width:300px;height:150px;">
                          </a>
                          @endforeach
                        </div>
                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--[/diy]--></div>
          <div id="recommendArticle">
            <!--[diy=diy7]-->
            <div id="diy7" class="area"></div>
            <!--[/diy]--></div>
          <div id="jiang108">
            <!--[diy=diy8]-->
            <div id="diy8" class="area"></div>
            <!--[/diy]--></div>
          <!--[diy=diy11]-->
          <!-- <div id="diy11" class="area">
            <div id="tabI6ABg6" class="frame-tab move-span cl">
              <div id="tabI6ABg6_title" class="tab-title title column cl tab-style" switchtype="mouseover">
                <div id="portal_block_15" class="block move-span">
                  <div class="blocktitle title">
                    <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">热门直播课</span></div>
                  <div id="portal_block_15_content" class="dxb_bc">
                    <div class="box s_timeline">
                      <div class="s_text_list">
                        <div class="nano has-scrollbar">
                          <ul style="right: -17px;" tabindex="0" class="nano-content">
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-241377-page-1.html" target="_blank">【名师培优计划】开启你的“薪”未来</a>
                              <p>2018-09-03</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-239438-page-1.html" target="_blank">兄弟连教育获批“教育部2018年首批产学合作</a>
                              <p>2018-05-08</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-181508-page-1.html" target="_blank">兄弟连PHP课程课堂实录thinkphp 的源码谁有</a>
                              <p>2015-12-30</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-231557-page-1.html" target="_blank">新版兄弟连原创视频光盘闪亮火热出炉</a>
                              <p>2015-06-30</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-241157-page-1.html" target="_blank">iOS应用软件开发实战在线课</a>
                              <p>2015-05-27</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-170088-page-1.html" target="_blank">高洛峰JavaScript在线课</a>
                              <p>2015-01-29</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-169385-page-1.html" target="_blank">[在线课]移动互联网服务端开发[已开课]</a>
                              <p>2014-12-19</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-169366-page-1.html" target="_blank">【移动互联网服务端开发在线课】国内最权威</a>
                              <p>2014-12-18</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-168482-page-1.html" target="_blank">【微营销在线课】（微信+QQ），三天，我们</a>
                              <p>2014-11-13</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-168431-page-1.html" target="_blank">微营销在线课（微信+QQ），三天，我们只讲</a>
                              <p>2014-11-10</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="portal_block_17" class="block move-span">
                  <div class="blocktitle title">
                    <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">热门技术帖</span></div>
                  <div id="portal_block_17_content" class="dxb_bc">
                    <div class="box s_timeline">
                      <div class="s_text_list">
                        <div class="nano has-scrollbar">
                          <ul style="right: -17px;" tabindex="0" class="nano-content">
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-244146-page-1.html" target="_blank">忘记密码了又没邮箱怎么办？</a>
                              <p>2019-02-14</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-244050-page-1.html" target="_blank">PHP wampserver安装完成网页打不开PHPmyadm</a>
                              <p>2019-01-20</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-244003-page-1.html" target="_blank">关于printf的参数问题</a>
                              <p>2019-01-19</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-243751-page-1.html" target="_blank">网站建立不能访问</a>
                              <p>2019-01-04</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-243743-page-1.html" target="_blank">怎么发个帖都是待审核</a>
                              <p>2019-01-03</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-243728-page-1.html" target="_blank">common.py文件被删除了，怎么恢复？</a>
                              <p>2019-01-02</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-243706-page-1.html" target="_blank">怎么执行备份？</a>
                              <p>2018-12-28</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-243694-page-1.html" target="_blank">Apache和nginx。哪个好</a>
                              <p>2018-12-27</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-243687-page-1.html" target="_blank">php7.3何时才能支持memcache扩展？</a>
                              <p>2018-12-26</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-243679-page-1.html" target="_blank">签到</a>
                              <p>2018-12-25</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="portal_block_16" class="block move-span">
                  <div class="blocktitle title">
                    <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">免费资源</span></div>
                  <div id="portal_block_16_content" class="dxb_bc">
                    <div class="box s_timeline">
                      <div class="s_text_list">
                        <div class="nano has-scrollbar">
                          <ul style="right: -17px;" tabindex="0" class="nano-content">
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-243302-page-1.html" target="_blank">【互联网营销直播课|送书】视频资料分享！</a>
                              <p>2018-11-21</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-240271-page-1.html" target="_blank">学习</a>
                              <p>2018-06-20</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-239763-page-1.html" target="_blank">求高洛峰高大帅哥2015年的视频配套学习源代</a>
                              <p>2018-05-19</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-237331-page-1.html" target="_blank">谁有细说Linux的书么或者资料么 就是视频配</a>
                              <p>2017-12-05</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-237178-page-1.html" target="_blank">B2B2C系统 如何实现商品分类功能</a>
                              <p>2017-11-30</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-236651-page-1.html" target="_blank">如何在thinkphp 5中实现阿里云云通信发短信</a>
                              <p>2017-11-15</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-236578-page-1.html" target="_blank">Thinkphp 5如何使用验证码</a>
                              <p>2017-11-14</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-236541-page-1.html" target="_blank">ThinkPHP 5.0如何实现自定义404（异常处理</a>
                              <p>2017-11-13</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-235866-page-1.html" target="_blank">PDF虚拟打印机下载后怎么安装使用</a>
                              <p>2017-10-25</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-233710-page-1.html" target="_blank">写给未来的一封信</a>
                              <p>2017-08-08</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tabI6ABg6_content" class="tb-c"></div>
              <script type="text/javascript">initTab("tabI6ABg6", "mouseover");</script></div>
            <div id="tabrxfoEN" class="frame-tab move-span cl">
              <div id="tabrxfoEN_title" class="tab-title title column cl tab-style" switchtype="mouseover">
                <div id="portal_block_12" class="block move-span">
                  <div class="blocktitle title">
                    <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">战地日记</span></div>
                  <div id="portal_block_12_content" class="dxb_bc">
                    <div class="box s_timeline">
                      <div class="s_text_list">
                        <div class="nano has-scrollbar">
                          <ul style="right: -17px;" tabindex="0" class="nano-content">
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-244171-page-1.html" target="_blank">二期项目心得</a>
                              <p>2019-02-21</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-244170-page-1.html" target="_blank">二期项目感想</a>
                              <p>2019-02-21</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-244167-page-1.html" target="_blank">二期项目总结</a>
                              <p>2019-02-19</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-244160-page-1.html" target="_blank">二期项目后感想</a>
                              <p>2019-02-19</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-244166-page-1.html" target="_blank">二期项目总结</a>
                              <p>2019-02-19</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-244165-page-1.html" target="_blank">二期项目心得</a>
                              <p>2019-02-19</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-244164-page-1.html" target="_blank">我的感想</a>
                              <p>2019-02-19</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-244162-page-1.html" target="_blank">二期项目总结</a>
                              <p>2019-02-19</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-244163-page-1.html" target="_blank">二期项目总结</a>
                              <p>2019-02-19</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-244161-page-1.html" target="_blank">二期项目总结</a>
                              <p>2019-02-19</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="portal_block_14" class="block move-span">
                  <div class="blocktitle title">
                    <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">热门活动</span></div>
                  <div id="portal_block_14_content" class="dxb_bc">
                    <div class="box s_timeline">
                      <div class="s_text_list">
                        <div class="nano has-scrollbar">
                          <ul style="right: -17px;" tabindex="0" class="nano-content">
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-241983-page-1.html" target="_blank">新书推荐|《Python3.7从零开始学》来了！</a>
                              <p>2018-10-10</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-241174-page-1.html" target="_blank">大家快来看啊！两个老男人出来卖啦！Linux</a>
                              <p>2018-08-15</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-241161-page-1.html" target="_blank">兄弟连老学员专访：月薪3K的网管到年薪30万</a>
                              <p>2018-08-15</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-241129-page-1.html" target="_blank">【有奖征集】糟糕，是心动的声音丨七夕爱情</a>
                              <p>2018-08-14</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-240296-page-1.html" target="_blank">兄弟连教育携手清华尹成团队成立区块链学院</a>
                              <p>2018-06-22</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-240249-page-1.html" target="_blank">兄弟连前端教材五件套，七月放“价”啦！</a>
                              <p>2018-06-19</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-240184-page-1.html" target="_blank">发展 | 2018年学历教育改革政策全解读</a>
                              <p>2018-06-14</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-240180-page-1.html" target="_blank">从退役军人到CTO，他经历了怎样的改变</a>
                              <p>2018-06-14</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-239893-page-1.html" target="_blank">只为培养三十万年薪高端人才，兄弟连战狼特</a>
                              <p>2018-05-29</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-239467-page-1.html" target="_blank">兄弟连就业指导课登录中国大学慕课网！</a>
                              <p>2018-05-09</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="portal_block_13" class="block move-span">
                  <div class="blocktitle title">
                    <span class="titletext" style="float:;margin-left:px;font-size:;color: !important;">明哥聊求职</span></div>
                  <div id="portal_block_13_content" class="dxb_bc">
                    <div class="box s_timeline">
                      <div class="s_text_list">
                        <div class="nano has-scrollbar">
                          <ul style="right: -17px;" tabindex="0" class="nano-content">
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-243776-page-1.html" target="_blank">面试谈薪，是一着不慎满盘皆输的博弈！</a>
                              <p>2019-01-09</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-243727-page-1.html" target="_blank">职业选择，不是猛踩油门就一定能到想去的远</a>
                              <p>2019-01-02</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-243685-page-1.html" target="_blank">把兴趣变成工作，只是看上去很美！</a>
                              <p>2018-12-26</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-243639-page-1.html" target="_blank">提问小事情，藏着大智慧！</a>
                              <p>2018-12-19</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-243578-page-1.html" target="_blank">幸福的烦恼：如何优雅地拒绝offer</a>
                              <p>2018-12-12</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-243552-page-1.html" target="_blank">职场工作群生存指南</a>
                              <p>2018-12-05</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-243377-page-1.html" target="_blank">画大饼，是一项基本的职业技能</a>
                              <p>2018-11-28</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-243301-page-1.html" target="_blank">人生的选择题：小城市的安逸经vs大城市的奋</a>
                              <p>2018-11-21</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-243140-page-1.html" target="_blank">明哥聊求职：就业指导文章汇总</a>
                              <p>2018-11-14</p>
                            </li>
                            <li>
                              <i>
                                <span></span>
                              </i>
                              <a href="http://bbs.itxdl.cn/read-htm-tid-243137-page-1.html" target="_blank">明哥聊求职：职场攻略文章汇总</a>
                              <p>2018-11-14</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tabrxfoEN_content" class="tb-c"></div>
              <script type="text/javascript">initTab("tabrxfoEN", "mouseover");</script></div>
            <div id="tabp945F3" class="tab2 frame-tab move-span cl">
              <div id="tabp945F3_title" class="tab-title title column cl" switchtype="mouseover">
                <div id="portal_block_6" class="block move-span">
                  <div class="blocktitle title">
                    <span style="float:;margin-left:px;font-size:;color: !important;" class="titletext">联系我们</span></div>
                  <div id="portal_block_6_content" class="dxb_bc">
                    <div class="portal_block_summary">
                      <div class="_helplidelist">
                        <div style="display: block;">
                          <div class="grid_list">
                            <ul>
                              <li>
                                <a href="http://www11.53kf.com/webCompany.php?style=1&arg=10143228" target="_blank">
                                  <span class="grid_list_img">
                                    <img src="/homes/static/picture/s_customer.png" height="30" width="30"></span>在线咨询</a>
                              </li>
                              <li>
                                <a href="http://www.itxdl.cn/activity/chengche/" target="_blank">
                                  <span class="grid_list_img">
                                    <img src="/homes/static/picture/s_map.png" height="30" width="30"></span>公司地址</a>
                              </li>
                              <li>
                                <a href="http://www.itxdl.cn/html/xldfaq/xdlbaoming/" target="_blank">
                                  <span class="grid_list_img">
                                    <img src="/homes/static/picture/s_service.png" height="30" width="30"></span>报名流程</a>
                              </li>
                            </ul>
                          </div>
                          <div class="customer_service">
                            <h4 class="fullfont color">400-700-1307</h4>
                            <p class="font12 color3">电话服务热线</p></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="portal_block_8" class="block move-span">
                  <div class="blocktitle title">
                    <span style="float:;margin-left:px;font-size:;color: !important;" class="titletext">关注我们</span></div>
                  <div id="portal_block_8_content" class="dxb_bc">
                    <div class="portal_block_summary">
                      <div class="snswidget" style="display: block;">
                        <div class="sns_widget">
                          <a href="#" title="官方微博" target="_blank">
                            <img src="/homes/static/picture/wb.png" height="120" width="120"></a>
                          <p>
                            <a href="#" target="_blank" title="ZUK官方微博">官方微博</a></p>
                        </div>
                        <div class="sns_widget">
                          <img src="/homes/static/picture/wx.jpg" title="扫一扫关注微信" height="120" width="120">
                          <p>官方微信</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="portal_block_7" class="block move-span">
                  <div class="blocktitle title">
                    <span style="float:;margin-left:px;font-size:;color: !important;" class="titletext">快速入口</span></div>
                  <div id="portal_block_7_content" class="dxb_bc">
                    <div class="portal_block_summary">
                      <div class="forum_newbie" style="display: block;background:none;height:130px;">
                        <ul class="top_list cl">
                          <a href="http://www11.53kf.com/webCompany.php?style=1&arg=10143228" target="_blank">
                            <span class="a_arrow"></span>就业薪资</a>
                          <a href="http://www11.53kf.com/webCompany.php?style=1&arg=10143228" target="_blank">
                            <span class="a_arrow"></span>免费资源</a>
                          <a href="http://www11.53kf.com/webCompany.php?style=1&arg=10143228" target="_blank">
                            <span class="a_arrow"></span>技术交流</a>
                          <a href="http://www11.53kf.com/webCompany.php?style=1&arg=10143228" target="_blank">
                            <span class="a_arrow"></span>学习路线</a>
                          <a href="http://www11.53kf.com/webCompany.php?style=1&arg=10143228" target="_blank">
                            <span class="a_arrow"></span>社区活动</a>
                          <a href="http://www11.53kf.com/webCompany.php?style=1&arg=10143228" target="_blank">
                            <span class="a_arrow"></span>礼品兑换</a>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tabp945F3_content" class="tb-c"></div>
              <script type="text/javascript">initTab("tabp945F3", "mouseover");</script></div>
          </div> -->
          <!--[/diy]--></div>
      </div>
    </div>
    <!--[diy=diy_bottom]-->
    <div id="diy_bottom" class="area">
      <div id="framefH9wcY" class="frame move-span cl frame-1">
        <div id="framefH9wcY_left" class="column frame-1-c">
          <div id="framefH9wcY_left_temp" class="move-span temp"></div>
          <div id="portal_block_5" class="block move-span">
            <div id="portal_block_5_content" class="dxb_bc">
              <div class="cl" style="width: 100%; margin: 25px 0 -30px 0; background: #FAFAFA;">
                <div class="links cl">
                  <div class="links_txt">
                    <ul></ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--[/diy]-->
    <script>fixed_top_nv();</script>
    <script type="text/javascript">jQuery(".slideBox").slide({
        mainCell: ".bd ul",
        effect: "left",
        easing: "easeOutQuart",
        delayTime: 500,
        autoPlay: true
      });
      jQuery(".hbody").slide({
        titCell: ".hd li",
        mainCell: ".bd",
        delayTime: 0
      });</script>
    </div>
    <script src="/homes/static/js/plugin.js" type="text/javascript"></script>
    @endsection

