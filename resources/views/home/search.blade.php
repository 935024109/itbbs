@extends('home/layout/index')
@section('main')
<!--  引入bootstrap start -->
<link rel="stylesheet" type="text/css" href="/homes/bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <script type="text/javascript" src="/homes/bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="/homes/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<!--  引入bootstrap end -->
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
        <div style="width: 100%;height: 1700px;margin-left: 400px;">
        <ul>
        	<h3>结果:搜索找到 “{{$search}}” 相关内容 {{$count}} 个</h3>
            @foreach ($post as $k=>$v)
          <li  style="height: 100px;background-color: white;border-top: 1px solid #896961;width:48%;">
            <div style="height: 100%;width: 30px;float: left;">
              <input type="text" readonly name="" style="width: 50px;height: 40px;margin-top: 30px;margin-left: 15px;" title="回复" value="{{$v->reply->count()}}"></input>
            </div>
            <div style="width: 1px;height: 100%;float: left;margin-left: 40px;"></div>
            <div style="float: right;height: 48px;width: 650px; ">
              <b><a href="/home/post/checkcontent/{{ $v->pid }}/{{ $v->user->uid}}" style="color:black;" >{{$v->title}}</a></b>
            @if(session('flag') == true)
              @if($v->collection_uid($v->pid,session('id')))
                <form action="/home/post/nolike/{{$v->pid}}">
                  <button style="float: right;" class="btn btn-danger">已收藏</button>
                </form>
              @else
                <form action="/home/post/like/{{$v->pid}}">
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
              <a href="/home/user/{{$v->user->uid}}">{{$v->user->uname}}</a>&nbsp;&nbsp; @ {{$v->created_at}}
              <div style="float: right;margin-top: 20px;">{!!$v->newreply($v->pid)!!}</div>
            </div>
            </div>
          </li>
        @endforeach
        </ul>
        <nav aria-label="Page navigation">
        {{ $post->appends(['count'=>$count,'search'=>$search,'searchsubmit'=>$searchsubmit])->links() }}
        </nav>
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
@endsection