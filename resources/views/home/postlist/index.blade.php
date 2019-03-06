  @extends('home/layout/index')
   @section('main') 
  <link href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/js/bootstrap.js"></script>
  <script src="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <div id="wp" class="wp time_wp cl">
   <script src="template/zvis_3_zuk/src/js/jquery.superslide.js" type="text/javascript"></script> 
   <div id="pt" class="bm cl"> 
    <div class="z" style="padding-right: 0;">
     <a href="/home">论坛</a> 
     <em>›</em> 
     <a href="/home">:::. 技术交流 :::.</a>
     <em>›</em> 
     <a href="/home/postlist/{{$id}}/edit">{{$data->fname}}</a>
    </div> 
   </div> 
   <style id="diy_style" type="text/css"></style>
   <div class="wp"> 
    <!--[diy=diy1]-->
    <div id="diy1" class="area"></div>
    <!--[/diy]--> 
   </div> 
   <div class="box forum_top bm cl"> 
    <div class="forum_top_icon cl">
     <img src="/homes/static/picture/common_271_icon.png" alt="Java技术" />
    </div> 
    <div class="forum_right cl" style="width: 935px;"> 
     <div class="forum_top_name cl"> 
      <h2> <a href="http://bbs.itxdl.cn/thread-htm-fid-271-page-1.html">{{$data->fname}}</a> </h2> 
      <div class="cl" style="padding: 2px 0; color: #6f6f6f; font-size: 14px;"> 
       <p id="forum_rules_271">本版块提供{{$data->fname}}学习视频中遇到的各种学习问题，有私密问题也可以随时交流哦。</p> 
      </div> 
     </div> 
    </div> 
   </div> 
   <div class="boardnav cl" style="margin: 0;"> 
    <div id="ct" class="wp inside_box cl"> 
     <!-- 板块右侧 --> 
     <div id="main_sidebar"> 
      <div class="itofeedback cl"> 
       <a class="bluebigbutton" onclick="showWindow('newthread', 'forum.php?mod=post&amp;action=newthread&amp;fid=271')" href="javascript:;" title="发新帖">发帖</a> 
       <a href="dc_signin-sign.html" target="_blank" class="greenbigbutton" title="签到" style="margin-right: 0;">签到</a> 
      </div> 
      <!--[diy=diy6]-->
      <div id="diy6" class="area">
       <div id="tabR3lVox" class="frame-tab move-span cl">
        <div id="tabR3lVox_title" class="tab-title title column cl tab-style" switchtype="mouseover">
         <ul class="tb cl">
          <li id="portal_block_73" class="a"><a href="javascript:;" onfocus="this.blur();" style="float:;margin-left:px;font-size:;color: !important;;">热门直播课</a></li>
          <li id="portal_block_75" class=""><a href="javascript:;" onfocus="this.blur();" style="float:;margin-left:px;font-size:;color: !important;;">热门技术帖</a></li>
          <li id="portal_block_74" class=""><a href="javascript:;" onfocus="this.blur();" style="float:;margin-left:px;font-size:;color: !important;;">免费资源</a></li>
         </ul>
        </div>
        <div id="tabR3lVox_content" class="tb-c">
         <div id="portal_block_73_content" class="dxb_bc">
          <div class="box s_timeline"> 
           <div class="s_text_list"> 
            <div class="nano has-scrollbar"> 
             <ul style="right: -17px;" tabindex="0" class="nano-content">
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-241245-page-1.html" target="_blank">【直播课】清华团队带你区块链实战（7.7-7.</a><p>2018-08-21</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-242317-page-1.html" target="_blank">视频资源 | Python视频教程入门到精通</a><p>2018-10-19</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244180-page-1.html" target="_blank">关于laravel框架</a><p>2019-02-25</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244178-page-1.html" target="_blank">我的兄弟连生活</a><p>2019-02-24</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-241190-page-1.html" target="_blank">Go语言+区块链教程视频教程+源码+课件全套</a><p>2018-08-17</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244171-page-1.html" target="_blank">二期项目心得</a><p>2019-02-21</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244170-page-1.html" target="_blank">二期项目感想</a><p>2019-02-21</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244167-page-1.html" target="_blank">二期项目总结</a><p>2019-02-19</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244160-page-1.html" target="_blank">二期项目后感想</a><p>2019-02-19</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244166-page-1.html" target="_blank">二期项目总结</a><p>2019-02-19</p></li>
             </ul> 
            </div> 
           </div>
          </div>
         </div>
         <div id="portal_block_75_content" class="dxb_bc" style="display: none;">
          <div class="box s_timeline"> 
           <div class="s_text_list"> 
            <div class="nano has-scrollbar"> 
             <ul style="right: -17px;" tabindex="0" class="nano-content">
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-241245-page-1.html" target="_blank">【直播课】清华团队带你区块链实战（7.7-7.</a><p>2018-08-21</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-242317-page-1.html" target="_blank">视频资源 | Python视频教程入门到精通</a><p>2018-10-19</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244180-page-1.html" target="_blank">关于laravel框架</a><p>2019-02-25</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244178-page-1.html" target="_blank">我的兄弟连生活</a><p>2019-02-24</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-241190-page-1.html" target="_blank">Go语言+区块链教程视频教程+源码+课件全套</a><p>2018-08-17</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244171-page-1.html" target="_blank">二期项目心得</a><p>2019-02-21</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244170-page-1.html" target="_blank">二期项目感想</a><p>2019-02-21</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244167-page-1.html" target="_blank">二期项目总结</a><p>2019-02-19</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244160-page-1.html" target="_blank">二期项目后感想</a><p>2019-02-19</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244166-page-1.html" target="_blank">二期项目总结</a><p>2019-02-19</p></li>
             </ul> 
            </div> 
           </div>
          </div>
         </div>
         <div id="portal_block_74_content" class="dxb_bc" style="display: none;">
          <div class="box s_timeline"> 
           <div class="s_text_list"> 
            <div class="nano has-scrollbar"> 
             <ul style="right: -17px;" tabindex="0" class="nano-content">
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-241245-page-1.html" target="_blank">【直播课】清华团队带你区块链实战（7.7-7.</a><p>2018-08-21</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-242317-page-1.html" target="_blank">视频资源 | Python视频教程入门到精通</a><p>2018-10-19</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244180-page-1.html" target="_blank">关于laravel框架</a><p>2019-02-25</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244178-page-1.html" target="_blank">我的兄弟连生活</a><p>2019-02-24</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-241190-page-1.html" target="_blank">Go语言+区块链教程视频教程+源码+课件全套</a><p>2018-08-17</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244171-page-1.html" target="_blank">二期项目心得</a><p>2019-02-21</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244170-page-1.html" target="_blank">二期项目感想</a><p>2019-02-21</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244167-page-1.html" target="_blank">二期项目总结</a><p>2019-02-19</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244160-page-1.html" target="_blank">二期项目后感想</a><p>2019-02-19</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244166-page-1.html" target="_blank">二期项目总结</a><p>2019-02-19</p></li>
             </ul> 
            </div> 
           </div>
          </div>
         </div>
        </div>
        <script type="text/javascript">initTab("tabR3lVox","mouseover");</script>
       </div>
      </div>
      <!--[/diy]--> 
      <div id="recommendArticle"> 
       <!--[diy=diy7]-->
       <div id="diy7" class="area"></div>
       <!--[/diy]--> 
      </div> 
      <div id="jiang108"> 
       <!--[diy=diy8]-->
       <div id="diy8" class="area"></div>
       <!--[/diy]--> 
      </div> 
      <!--[diy=diy11]-->
      <div id="diy11" class="area">
       <div id="tabvXjMXJ" class="frame-tab move-span cl">
        <div id="tabvXjMXJ_title" class="tab-title title column cl tab-style" switchtype="mouseover">
         <ul class="tb cl">
          <li id="portal_block_70" class="a"><a href="javascript:;" onfocus="this.blur();" style="float:;margin-left:px;font-size:;color: !important;;">战地日记</a></li>
          <li id="portal_block_72" class=""><a href="javascript:;" onfocus="this.blur();" style="float:;margin-left:px;font-size:;color: !important;;">热门活动</a></li>
          <li id="portal_block_71" class=""><a href="javascript:;" onfocus="this.blur();" style="float:;margin-left:px;font-size:;color: !important;;">明哥聊求职</a></li>
         </ul>
        </div>
        <div id="tabvXjMXJ_content" class="tb-c">
         <div id="portal_block_70_content" class="dxb_bc">
          <div class="box s_timeline"> 
           <div class="s_text_list"> 
            <div class="nano has-scrollbar"> 
             <ul style="right: -17px;" tabindex="0" class="nano-content">
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-241245-page-1.html" target="_blank">【直播课】清华团队带你区块链实战（7.7-7.</a><p>2018-08-21</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-242317-page-1.html" target="_blank">视频资源 | Python视频教程入门到精通</a><p>2018-10-19</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244180-page-1.html" target="_blank">关于laravel框架</a><p>2019-02-25</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244178-page-1.html" target="_blank">我的兄弟连生活</a><p>2019-02-24</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-241190-page-1.html" target="_blank">Go语言+区块链教程视频教程+源码+课件全套</a><p>2018-08-17</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244171-page-1.html" target="_blank">二期项目心得</a><p>2019-02-21</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244170-page-1.html" target="_blank">二期项目感想</a><p>2019-02-21</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244167-page-1.html" target="_blank">二期项目总结</a><p>2019-02-19</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244160-page-1.html" target="_blank">二期项目后感想</a><p>2019-02-19</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244166-page-1.html" target="_blank">二期项目总结</a><p>2019-02-19</p></li>
             </ul> 
            </div> 
           </div>
          </div>
         </div>
         <div id="portal_block_72_content" class="dxb_bc" style="display: none;">
          <div class="box s_timeline"> 
           <div class="s_text_list"> 
            <div class="nano has-scrollbar"> 
             <ul style="right: -17px;" tabindex="0" class="nano-content">
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-241245-page-1.html" target="_blank">【直播课】清华团队带你区块链实战（7.7-7.</a><p>2018-08-21</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-242317-page-1.html" target="_blank">视频资源 | Python视频教程入门到精通</a><p>2018-10-19</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244180-page-1.html" target="_blank">关于laravel框架</a><p>2019-02-25</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244178-page-1.html" target="_blank">我的兄弟连生活</a><p>2019-02-24</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-241190-page-1.html" target="_blank">Go语言+区块链教程视频教程+源码+课件全套</a><p>2018-08-17</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244171-page-1.html" target="_blank">二期项目心得</a><p>2019-02-21</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244170-page-1.html" target="_blank">二期项目感想</a><p>2019-02-21</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244167-page-1.html" target="_blank">二期项目总结</a><p>2019-02-19</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244160-page-1.html" target="_blank">二期项目后感想</a><p>2019-02-19</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244166-page-1.html" target="_blank">二期项目总结</a><p>2019-02-19</p></li>
             </ul> 
            </div> 
           </div>
          </div>
         </div>
         <div id="portal_block_71_content" class="dxb_bc" style="display: none;">
          <div class="box s_timeline"> 
           <div class="s_text_list"> 
            <div class="nano has-scrollbar"> 
             <ul style="right: -17px;" tabindex="0" class="nano-content">
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-241245-page-1.html" target="_blank">【直播课】清华团队带你区块链实战（7.7-7.</a><p>2018-08-21</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-242317-page-1.html" target="_blank">视频资源 | Python视频教程入门到精通</a><p>2018-10-19</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244180-page-1.html" target="_blank">关于laravel框架</a><p>2019-02-25</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244178-page-1.html" target="_blank">我的兄弟连生活</a><p>2019-02-24</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-241190-page-1.html" target="_blank">Go语言+区块链教程视频教程+源码+课件全套</a><p>2018-08-17</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244171-page-1.html" target="_blank">二期项目心得</a><p>2019-02-21</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244170-page-1.html" target="_blank">二期项目感想</a><p>2019-02-21</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244167-page-1.html" target="_blank">二期项目总结</a><p>2019-02-19</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244160-page-1.html" target="_blank">二期项目后感想</a><p>2019-02-19</p></li>
              <li><i><span></span></i><a href="http://bbs.itxdl.cn/read-htm-tid-244166-page-1.html" target="_blank">二期项目总结</a><p>2019-02-19</p></li>
             </ul> 
            </div> 
           </div>
          </div>
         </div>
        </div>
        <script type="text/javascript">initTab("tabvXjMXJ","mouseover");</script>
       </div>
      </div>
      <!--[/diy]--> 
     </div> 
     <!-- 板块右侧 --> 
     <div class="forum-left cl" style="padding: 0; border-radius: 2px; box-shadow: 0px 1px 1px rgba(0,0,0,0.08); overflow: hidden; background: #FFFFFF;"> 
      <!--[diy=diynavtop]-->
      <div id="diynavtop" class="area"></div>
      <!--[/diy]--> 
      <div class="mn" style="padding-top: 0;"> 
       <div class="bm bml" style="margin: 20px 20px 0 20px;"> 
       </div> 
       <div class="drag" style="padding: 0 20px;"> 
        <!--[diy=diy4]-->
        <div id="diy4" class="area">
         <div id="frameRBB84l" class="frame move-span cl frame-1">
          <div id="frameRBB84l_left" class="column frame-1-c">
           <div id="frameRBB84l_left_temp" class="move-span temp"></div> 
           <div id="portal_block_76" class="block move-span">
            <div id="portal_block_76_content" class="dxb_bc"> 
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
       <!--[/diy]--> 
      </div> 
      <div id="threadlist" class="tl bm bmw"> 
       <div class="th showmenubox"> 
        <div class="y"> 
         
        </div>
        <table cellspacing="0" cellpadding="0" style="display: none"> 
         <!--hide for dev--> 
         <tbody>
          <tr> 
           <th colspan="2"> 
            <div class="tf"> 
             <span id="atarget" onclick="setatarget(1)" class="y" title="在新窗口中打开帖子">新窗</span> 
             <a id="filter_dateline" href="javascript:;" class="showmenu xi2" onclick="showMenu(this.id)">更多</a>&nbsp; 
             <span id="clearstickthread" style="display: none;"> <span class="pipe">|</span> <a href="javascript:;" onclick="clearStickThread()" class="xi2" title="显示置顶">显示置顶</a> </span> 
            </div> </th> 
           <td class="by">作者</td> 
           <td class="num">回复/查看</td> 
           <td class="by">最后发表</td> 
          </tr> 
         </tbody>
        </table> 
       </div> 
       <div class="bm_c"> 
        <script type="text/javascript">var lasttime = 1551680858;var listcolspan= '5';</script> 
        <div id="forumnew" style="display:none"></div> 
        <div style="width: 100%;height: 1700px;">
        <ul>
          <div style="height: 50px;">
            <form action="/home/postlist/{{$data->fid}}/edit" method="get">
              <input type="submit" name="" class="" value="查看所有" >
              <input type="submit" name="top" value="查看置顶" >
              <input type="submit" name="hot" value="查看精品" >
            </form>
          </div>
        @foreach ($post as $k=>$v)
          <li  style="height: 100px;margin-top: 10px;background-color: #D3D3D3;border: 1px solid #896961;border-radius: 10px;">
            <div style="height: 100%;width: 30px;float: left;">
              <input type="text" readonly name="" style="width: 50px;height: 40px;margin-top: 30px;margin-left: 15px;" title="回复" value="{{$v->reply->count()}}"></input>
            </div>
            <div style="width: 1px;height: 100%;float: left;margin-left: 40px;"></div>
            <div style="float: right;height: 48px;width: 650px; ">
              <b><a href="" style="color:black;">{{$v->title}}</a></b>
            @if(session('flag') == true)
              @if($v->collection_uid($v->pid,session('id')))
                <form action="/home/postlist/nolike/{{$v->pid}}">
                  <button style="float: right;" class="btn btn-danger">已收藏</button>
                </form>
              @else
                <form action="/home/postlist/like/{{$v->pid}}">
                  <button class="btn btn-info" style="float: right;">收藏</button>
                </form>
              @endif
            @endif
              @if($v->top == 1)
              <button class="btn btn-success" style="float: right;">置顶</button>
              @endif

              @if($v->hot == 1)
              <button class="btn btn-warning" style="float: right;">精品</button>
              @endif
            </div>
            <div style="float: right;height: 48px;width: 650px;">
              <div>
              <a href="">{{$v->user->uname}}</a>&nbsp;&nbsp; @ {{$v->created_at}}
            </div>
            </div>
          </li>
        @endforeach
        </ul>
        </div> 
       </div> 
      </div> 
      <div id="filter_special_menu" class="p_pop showsub" style="display:none" change="location.href='forum.php?mod=forumdisplay&amp;fid=271&amp;filter='+$('filter_special').value"> 
       <ul> 
        <li><a href="http://bbs.itxdl.cn/thread-htm-fid-271-page-1.html">全部主题</a></li> 
        <li><a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;filter=specialtype&amp;specialtype=poll">投票</a></li>
        <li><a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;filter=specialtype&amp;specialtype=trade">商品</a></li>
        <li><a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;filter=specialtype&amp;specialtype=reward">悬赏</a></li>
        <li><a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;filter=specialtype&amp;specialtype=activity">活动</a></li>
        <li><a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;filter=specialtype&amp;specialtype=debate">辩论</a></li>
       </ul> 
      </div> 
      <div id="filter_reward_menu" class="p_pop showsub" style="display:none" change="forum.php?mod=forumdisplay&amp;fid=271&amp;filter=specialtype&amp;specialtype=reward&amp;rewardtype='+$('filter_reward').value"> 
       <ul> 
        <li><a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;filter=specialtype&amp;specialtype=reward">全部悬赏</a></li> 
        <li><a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;filter=specialtype&amp;specialtype=reward&amp;rewardtype=1">进行中</a></li>
        <li><a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;filter=specialtype&amp;specialtype=reward&amp;rewardtype=2">已解决</a></li>
       </ul> 
      </div> 
      <div id="filter_dateline_menu" class="p_pop showsub" style="display:none"> 
       <ul class="pop_moremenu"> 
        <li>排序: <a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;filter=author&amp;orderby=dateline">发帖时间</a><span class="pipe">|</span> <a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;filter=reply&amp;orderby=replies">回复/查看</a><span class="pipe">|</span> <a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;filter=reply&amp;orderby=views">查看</a> </li> 
        <li>时间: <a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;orderby=lastpost&amp;filter=dateline" class="xw1">全部时间</a><span class="pipe">|</span> <a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;orderby=lastpost&amp;filter=dateline&amp;dateline=86400">一天</a><span class="pipe">|</span> <a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;orderby=lastpost&amp;filter=dateline&amp;dateline=172800">两天</a><span class="pipe">|</span> <a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;orderby=lastpost&amp;filter=dateline&amp;dateline=604800">一周</a><span class="pipe">|</span> <a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;orderby=lastpost&amp;filter=dateline&amp;dateline=2592000">一个月</a><span class="pipe">|</span> <a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;orderby=lastpost&amp;filter=dateline&amp;dateline=7948800">三个月</a> </li> 
       </ul> 
      </div> 
      <div id="filter_time_menu" class="p_pop showsub" style="display:none"> 
       <ul> 
        <li><a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;orderby=lastpost&amp;filter=dateline">全部时间</a></li> 
        <li><a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;orderby=lastpost&amp;filter=dateline&amp;dateline=86400">一天</a></li> 
        <li><a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;orderby=lastpost&amp;filter=dateline&amp;dateline=172800">两天</a></li> 
        <li><a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;orderby=lastpost&amp;filter=dateline&amp;dateline=604800">一周</a></li> 
        <li><a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;orderby=lastpost&amp;filter=dateline&amp;dateline=2592000">一个月</a></li> 
        <li><a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;orderby=lastpost&amp;filter=dateline&amp;dateline=7948800">三个月</a></li> 
       </ul> 
      </div> 
      <div id="filter_orderby_menu" class="p_pop showsub" style="display:none"> 
       <ul> 
        <li><a href="http://bbs.itxdl.cn/thread-htm-fid-271-page-1.html">默认排序</a></li> 
        <li><a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;filter=author&amp;orderby=dateline">发帖时间</a></li> 
        <li><a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;filter=reply&amp;orderby=replies">回复/查看</a></li> 
        <li><a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;filter=reply&amp;orderby=views">查看</a></li> 
        <li><a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;filter=lastpost&amp;orderby=lastpost">最后发表</a></li> 
        <li><a href="http://bbs.itxdl.cn/forum.php?mod=forumdisplay&amp;fid=271&amp;filter=heat&amp;orderby=heats">热门</a></li> 
       </ul> 
      </div> 
      <script src="static/js/autoloadpage.js?Ac9" type="text/javascript"></script> 
     </div> 
     <div class="bm npgs cl" style="padding-top: 30px; margin: 0 20px 30px 20px; border-top: 1px solid #EEEEEE;"> 
      <span id="fd_page_bottom">
       <div class="pg">
        
       </div></span> 
     </div> 
     <div> 
      <!--[diy=diyfastposttop]-->
      <div id="diyfastposttop" class="area"></div>
      <!--[/diy]--> 
      <script type="text/javascript">
var postminchars = parseInt('10');
var postmaxchars = parseInt('10000');
var disablepostctrl = parseInt('0');
var fid = parseInt('271');
</script> 
      <div id="f_pst" class="bm" style="display: none;"> 
       <div class="bm_c"> 
        <form method="post" autocomplete="off" id="fastpostform" action="forum.php?mod=post&amp;action=newthread&amp;fid=271&amp;topicsubmit=yes&amp;infloat=yes&amp;handlekey=fastnewpost" onsubmit="return fastpostvalidate(this)"> 
         <div id="fastpostreturn" style="margin:-5px 0 5px"></div> 
         <div class="pbt cl"> 
          <input type="text" id="subject" name="subject" class="px" value="" onkeyup="strLenCalc(this, 'checklen', 80);" tabindex="11" style="width: 25em" /> 
          <span>还可输入 <strong id="checklen">80</strong> 个字符</span> 
         </div> 
         <div class="cl"> 
          <div id="fastsmiliesdiv" class="y">
           <div id="fastsmiliesdiv_data">
            <div id="fastsmilies"></div>
           </div>
          </div>
          <div class="hasfsl" id="fastposteditor"> 
           <div class="tedt"> 
            <div class="bar"> 
             <span class="y"> <a href="http://bbs.itxdl.cn/forum.php?mod=post&amp;action=newthread&amp;fid=271" onclick="switchAdvanceMode(this.href);doane(event);">高级模式</a> </span>
             <script src="static/js/seditor.js?Ac9" type="text/javascript"></script> 
             <div class="fpd"> 
              <a href="javascript:;" title="文字加粗" class="fbld">B</a> 
              <a href="javascript:;" title="设置文字颜色" class="fclr" id="fastpostforecolor">Color</a> 
              <a id="fastpostimg" href="javascript:;" title="图片" class="fmg">Image</a> 
              <a id="fastposturl" href="javascript:;" title="添加链接" class="flnk">Link</a> 
              <a id="fastpostquote" href="javascript:;" title="引用" class="fqt">Quote</a> 
              <a id="fastpostcode" href="javascript:;" title="代码" class="fcd">Code</a> 
              <a href="javascript:;" class="fsml" id="fastpostsml">Smilies</a> 
             </div>
            </div> 
            <div class="area"> 
             <div class="pt hm">
               您需要登录后才可以发帖 
              <a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)" class="xi2">登录</a> | 
              <a href="member.php?mod=register" class="xi2">立即注册</a> 
             </div> 
            </div> 
           </div> 
          </div> 
          <div class="mtm sec">
           <span id="seccode_cSf7iLUt" class="seccode_1"><input name="seccodehash" type="hidden" value="cSf7iLUt" /><input name="seccodemodid" type="hidden" value="forum::forumdisplay" />验证码 <span id="seccodecSf7iLUt" onclick="showMenu(this.id)"><input name="seccodeverify" id="seccodeverify_cSf7iLUt" type="text" autocomplete="off" style="ime-mode:disabled;width:100px" class="txt px vm" onblur="checksec('code', 'cSf7iLUt', 0, null, 'forum::forumdisplay')" /> <a href="javascript:;" onclick="updateseccode('cSf7iLUt');doane(event);" class="xi2">换一个</a><span id="checkseccodeverify_cSf7iLUt"><img src="static/image/common/none.gif" width="16" height="16" class="vm" /></span></span>
            <div id="seccodecSf7iLUt_menu" class="p_pop p_opt" style="display:none">
             <span id="vseccode_cSf7iLUt">输入下图中的字符<br /><img onclick="updateseccode('cSf7iLUt')" width="100" height="30" src="misc.php?mod=seccode&amp;update=25228&amp;idhash=cSf7iLUt" class="vm" alt="" /></span>
            </div></span> 
           <script type="text/javascript" reload="1">updateseccode('cSf7iLUt', '<sec> <span id="sec<hash>" onclick="showMenu(this.id)"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div>', 'forum::forumdisplay');</script> 
          </div> 
          <input type="hidden" name="formhash" value="e2208b83" /> 
          <input type="hidden" name="usesig" value="" /> 
         </div> 
         <p class="ptm pnpost"> <a href="http://d.bbs.itxdl.cn/home.php?mod=spacecp&amp;ac=credit&amp;op=rule&amp;fid=271" class="y" target="_blank">本版积分规则</a> <button type="submit" name="topicsubmit" id="fastpostsubmit" value="topicsubmit" tabindex="13" class="pn pnc"><strong>发表帖子</strong></button> </p> 
        </form> 
       </div> 
      </div> 
      <!--[diy=diyforumdisplaybottom]-->
      <div id="diyforumdisplaybottom" class="area"></div>
      <!--[/diy]--> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div id="visitedforums_menu" class="p_pop blk cl" style="display: none;"> 
   <table cellspacing="0" cellpadding="0"> 
    <tbody>
     <tr> 
      <td id="v_forums"><h3 class="mbn pbn bbda xg1">浏览过的版块</h3> 
       <ul class="xl xl1"> 
        <li><a href="http://bbs.itxdl.cn/thread-htm-fid-126-page-1.html">HTML5技术</a></li> 
       </ul></td> 
     </tr> 
    </tbody>
   </table> 
  </div> 
  <script type="text/javascript">document.onkeyup = function(e){keyPageScroll(e, 0, 1, 'forum.php?mod=forumdisplay&fid=271&filter=&orderby=lastpost&', 1);}</script> 
  <script type="text/javascript">checkForumnew_handle = setTimeout(function () {checkForumnew(271, lasttime);}, checkForumtimeout);</script> 
  <div class="wp mtn"> 
   <!--[diy=diy3]-->
   <div id="diy3" class="area"></div>
   <!--[/diy]--> 
  </div> 
  <script>fixed_top_nv();</script>  
  @endsection