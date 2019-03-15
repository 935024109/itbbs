<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:wb="http://open.weibo.com/wb">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>@yield('title','itbbs')</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="keywords" content="PHP交流,PHP教程,PHP论坛,php视频,HTML5学习,HTML5教程,Linux教程,UI设计学习,java教程,H5教程,平面设计教程,UE培训" />
<meta name="description" content="兄弟连教育旗下官方论坛：大咖分分钟解答的技术交流社区，专注PHP、linux、java、html5、UI设计培训等专业技术交流与教程分享的地方 " />
<meta name="generator" content="Discuz! X3.3" />
<meta name="author" content="Discuz! Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2013 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="stylesheet" type="text/css" href="/homes/static/css/style_2_common.css" /><link rel="stylesheet" type="text/css" href="/homes/static/css/style_2_forum_index.css" />    <script src="/homes/static/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">var STYLEID = '2', STATICURL = 'static/', IMGDIR = 'static/image/common', VERHASH = 'Ac9', charset = 'gbk', discuz_uid = '0', cookiepre = '6tcf_40b9_', cookiedomain = '.itxdl.cn', cookiepath = '/', showusercard = '1', attackevasive = '0', disallowfloat = 'newthread', creditnotice = '1|威望|,2|金钱|,3|贡献|', defaultstyle = '', REPORTURL = 'aHR0cDovL2Jicy5pdHhkbC5jbi8=', SITEURL = 'http://bbs.itxdl.cn/', JSPATH = 'static/js/', CSSPATH = 'data/cache/style_', DYNAMICURL = '';</script>
    <!--[if IE 6]>
     <script language='javascript' type="text/javascript">   
    function ResumeError() {  
         return true;  
    }  
    window.onerror = ResumeError;   
    </script> 
    <![endif]-->
<meta name="application-name" content="兄弟连论坛_每个人的交流社区" />
<meta name="msapplication-tooltip" content="兄弟连论坛_每个人的交流社区" />
<meta name="msapplication-task" content="name=论坛;action-uri=http://bbs.itxdl.cn;icon-uri=http://bbs.itxdl.cn/static/image/common/bbs.ico" />
<link rel="archives" title="兄弟连论坛_每个人的交流社区" href="http://bbs.itxdl.cn/archiver/" />
<link rel="stylesheet" id="css_widthauto" type="text/css" href="/homes/static/css/style_2_widthauto.css" />
<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
<script src="/homes/static/js/forum.js" type="text/javascript"></script>
</head><body id="nv_forum" class="pg_index" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>


 <link href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

<!--<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script> -->


<div id="Quater_headtop" >
  <div class="wp cl">
        </div>
  <div class="Quater_shouye"> 
    <ul>
      <li>兄弟连教育旗下技术交流社区</li>
      <li><a href="http://bbs2.itxdl.cn/" target="_blank">旧版论坛入口</a></li>
      <li><a href="http://www.ydma.cn/" target="_blank">兄弟连云课堂官网</a></li>
      <li><a href="http://www.itxdl.cn/" target="_blank">兄弟连教育官网</a></li>
    </ul>
  </div>
  <div id="Quater_bar" class="cl" > 
    <div class="wp cl">
      <!-- 站点LOGO -->
      <div class="hd_logo"> 
          <h2 style="margin-top: 0px"><a href="http://www.itbbs.com/home" target="_blank"><img src="/homes/static/picture/itbbs.jpg" style="width:150px;height:200px;" /></a></h2>
      </div>
      <!-- 导航 -->
      <div class="nav">
        @foreach ($common_forum as $k=>$v)
        <ul>
           
                    <li id="mn_N8473{{$v->fid}}" onmouseover="showMenu({'ctrlid':this.id,'ctrlclass':'hover','duration':2})"><a href="#" hidefocus="true" target="_blank"  >{{$v->fname}}</a>
          </li>
           
           
                   
                  </ul>
        @endforeach
         
      </div>
      <!-- 二级导航 -->
     @foreach ($common_forum as $k=>$v)
      <div class="sub_nav">
       
        <ul class="p_pop h_pop" id="mn_N8473{{$v->fid}}_menu" style="display: none ;width:150px;">
         @foreach ($v->sub as $kk=>$vv)
          <li>
            <a href="/home/post/{{$vv->fid}}/edit" hidefocus="true" target="_blank">{{$vv->fname}}</a>
          </li>
        @endforeach
        </ul>
      
     
      </div>
      @endforeach
      <div href="javascript:void(0)" target="_blank" class="headerbtn header_search newbtn" title="搜索" style="margin:0;padding: 0;margin:18px"></div>
      <div class="th_post y cl" style="display: none;"><a href="/home/goPost/{{$id or 0}}" title="发新帖" style="margin: 0;">发布</a></div>
    
    
      <!-- <div href="javascript:void(0)" target="_blank" class="headerbtn header_search newbtn" title="搜索" style="margin:0;padding: 0;margin:18px"></div>
      <div class="th_post y cl" style="display: none;"><a onClick="showWindow('newthread', 'forum.php?mod=post&amp;action=newthread&amp;fid=')" href="javascript:;" title="发新帖" style="margin: 0;">发布</a></div> -->

      <!-- 用户信息 --> 
            <div class="Quater_user" style="width: 88px; margin-left: 20px; line-height: 60px; font-size: 14px;">
        
      @if(session('flag') != true)
       <ul>
              <li class="z"><a href="/home/login"><i></i>登录</a></li>
              <span class="pipe z" style="margin: 0 12px; color: #e6e6e6;">|</span>
              <li class="z"><a href="/home/user/register" ><i></i>注册</a></li>
       </ul>
       @else

        <div class="Quater_user logined" style="margin:0;padding:0">
        <div class="Quater_user_info">
          <div class="user-main ">
            <div class="avatar"> <a href="/home/user/{{ session('id') }}" target="_blank" title="访问我的空间" id="umnav" onmouseover="showMenu({'ctrlid':this.id,'ctrlclass':'a'})"> 
              <img src=" /uploads/{{ session('photo') }}"> 


            
              </a></div>
            <span class="nickname" style="width:50px" title="{{ session('uname') }}">{{ session('uname') }}</span>
            <span class="arrow"></span>
          </div>
          <div class="user-link">
            <ul>
              <li><a id="nte_menu" href="/home/user/{{ session('id') }}/edit" class="notification">修改密码</a></li>
              <li><a id="msg_menu" href="/home/user/collection/{{ session('id') }}" class="msg">收藏</a></li>
                            <li><a href="/home/user/{{ session('id') }}">个人中心</a></li>           
                            <li><a href="/home/user/user_info/{{ session('id') }}">个人空间</a></li>           
               
                            <li class="l4"><a href="/home/out">退出登录</a></li>
              </div>
                        </ul>
          </div>
        </div>
      </div>
  

      @endif
      

      </div>
      <div style="display:none"><script src="/homes/static/js/logging.js" type="text/javascript"></script>
<form method="post" autocomplete="off" id="lsform" action="member.php?mod=logging&amp;action=login&amp;loginsubmit=yes&amp;infloat=yes&amp;lssubmit=yes" onsubmit="return lsSubmit();">
<div class="fastlg cl">
<span id="return_ls" style="display:none"></span>
<div class="y pns">
<table cellspacing="0" cellpadding="0">
<tr>
<td>
<span class="ftid">
<select name="fastloginfield" id="ls_fastloginfield" width="40" tabindex="900">
<option value="username">用户名</option>
<option value="email">Email</option>
</select>
</span>
<script type="text/javascript">simulateSelect('ls_fastloginfield')</script>
</td>
<td><input type="text" name="username" id="ls_username" autocomplete="off" class="px vm" tabindex="901" /></td>
<td class="fastlg_l"><label for="ls_cookietime"><input type="checkbox" name="cookietime" id="ls_cookietime" class="pc" value="2592000" tabindex="903" />自动登录</label></td>
<td>&nbsp;<a href="javascript:;" onclick="showWindow('login', 'member.php?mod=logging&action=login&viewlostpw=1')">找回密码</a></td>
</tr>
<tr>
<td><label for="ls_password" class="z psw_w">密码</label></td>
<td><input type="password" name="password" id="ls_password" class="px vm" autocomplete="off" tabindex="902" /></td>
<td class="fastlg_l"><button type="submit" class="pn vm" tabindex="904" style="width: 75px;"><em>登录</em></button></td>
<td>&nbsp;<a href="member.php?mod=register" class="xi2 xw1">立即注册</a></td>
</tr>
</table>
<input type="hidden" name="quickforward" value="yes" />
<input type="hidden" name="handlekey" value="ls" />
</div>
</div>
</form>

</div>
            
      <div style="display: none;" class="Quater_search"> 
       <div class="wp cl" style="position: relative; z-index: 1000;">
          <div id="scbar" class="cl">
<form id="scbar_form" autocomplete="off" action="/home/search" >
      <table cellspacing="0" cellpadding="0">
      <tr>
      <td class="scbar_btn_td">
        <button type="submit" name="searchsubmit" id="scbar_btn" sc="1" class="pn pnc">
          <strong class="xi2">搜索</strong>
        </button>
      </td>                            
      <td class="scbar_txt_td">
        <input type="text" name="search" id="scbar_txt" placeholder="请输入搜索内容" autocomplete="off" x-webkit-speech speech />
      </td>
    </tr>
  </table>
</form>
</div>
<ul id="scbar_type_menu" class="p_pop" style="display: none;"><li><a href="javascript:;" rel="forum" class="curtype">帖子</a></li><li><a href="javascript:;" rel="user">用户</a></li></ul>
<script type="text/javascript">
initSearchmenu('scbar', '');
</script>
          <i class="close-search headericon-close"></i>
           
<!-- 搜索筛选 -->
<ul id="scbar_type_menu" class="p_pop" style="display: none;">
  <li><a href="javascript:;" rel="forum" class="curtype">帖子</a></li><li><a href="javascript:;" rel="user">用户</a></li></ul>
<script type="text/javascript">
initSearchmenu('scbar', '');
</script> 
       </div>
      </div>
      <div class="global-search-mask" style="display: none; background-color: rgba(0, 0, 0, 0.4); width: 100%; height: 100%; position: fixed; top: 61px; left: 0px; z-index: 300;"></div>

    </div>
  </div>
  <div class="fm_line"></div>
</div>


 
 
 <div id="qmenu_menu" class="p_pop blk" style="display: none;">
<div class="ptm pbw hm">
请 <a href="javascript:;" class="xi2" onclick="lsSubmit()"><strong>登录</strong></a> 后使用快捷导航<br />没有帐号？<a href="member.php?mod=register" class="xi2 xw1">立即注册</a>
</div>
<div id="fjump_menu" class="btda"></div></div> 
 

<ul class="p_pop h_pop" id="plugin_menu" style="display: none">
   
    <li><a href="dc_signin-dc_signin.html" id="mn_plink_dc_signin">每日签到</a></li>
   
  </ul>
 

<!-- 用户菜单 -->
<ul class="sub_menu" id="m_menu" style="display: none;">
   
   
    <li style="display: none;"><a href="http://d.bbs.itxdl.cn/home.php?mod=magic" style="background-image:url(static/images/magic_b.png) !important">道具</a></li>
   
   
    <li style="display: none;"><a href="http://d.bbs.itxdl.cn/home.php?mod=medal" style="background-image:url(static/images/medal_b.png) !important">勋章</a></li>
   
   
    <li style="display: none;"><a href="http://d.bbs.itxdl.cn/home.php?mod=task" style="background-image:url(static/images/task_b.png) !important">任务</a></li>
   
   
   
   
   
   
   
    <li><a href="http://d.bbs.itxdl.cn/home.php?mod=spacecp">设置</a></li>
   
    <li><a href="http://d.bbs.itxdl.cn/home.php?mod=space&amp;do=favorite&amp;view=me">我的收藏</a></li>
   
    <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li><a href="member.php?mod=logging&amp;action=logout&amp;formhash=4f174724">退出</a></li>
</ul>
<ul class="sub_menu" id="l_menu" style="display: none;">
  
  <!-- 第三方登录 -->
  <li class="user_list app_login"><a href="connect.php?mod=login&amp;op=init&amp;referer=forum.php&amp;statfrom=login"><i class="i_qq"></i>腾讯QQ</a></li>
  <li class="user_list app_login"><a href="wechat-login.html"><i class="i_wb"></i>微信登录</a></li>
</ul> 
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-success">
        {{ session('error') }}
    </div>
@endif
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@section('main')

@show

<div id="footer" class="footer cl">
  <div class="ft_top cl" style="width: 100%; background: #2D3237;">
  <div class="wp sections cl">
  <div class="link-section">
    <h3> <img src="/homes/static/picture/logo-footer.png" style="position: relative;top: 1px;margin-right: 10px;" alt="quater" height="16px"> 课程培训 </h3>
    <div class="link1">
      <ul>
        <li><a href="http://java.itxdl.cn" target="_blank">Java培训</a></li>
        <li><a href="http://bt.itxdl.cn" target="_blank">Go语言+区块链培训</a></li>
        <li><a href="http://python.itxdl.cn" target="_blank">Python人工智能培训</a></li>
        <li><a href="http://ui.itxdl.cn" target="_blank">UI/UE培训</a></li>
        <li><a href="http://php.itxdl.cn" target="_blank">PHP培训</a></li>
        <li><a href="http://linux.itxdl.cn" target="_blank">云计算Linux培训</a></li>
        <li><a href="http://data.itxdl.cn" target="_blank">大数据开发培训</a></li>
        <li><a href="http://h5.itxdl.cn" target="_blank">前端全栈培训</a></li>
        <li><a href="http://em.itxdl.cn" target="_blank">网络营销培训</a></li>
      </ul>
    </div>
    
  </div>
  <div class="partner-section">
    <div class="section-l">
      <h3>关于我们</h3>
      <ul class="footer-partner">
        <li><a href="http://www.itxdl.cn/activity/about/" rel="nofollow" class="external" target="_blank">关于兄弟连</a></li>
        <li><a href="http://www.itxdl.cn/activity/about/" rel="nofollow" class="external" target="_blank">联系我们</a></li>
        <li><a href="http://www.itxdl.cn/activity/teacher/teacher_lieibiao/" rel="nofollow" class="external" target="_blank">师资介绍</a></li>
        <li><a href="http://www11.53kf.com/webCompany.php?style=1&amp;arg=10143228" rel="nofollow" class="external" target="_blank">就业喜报</a></li>
      </ul>
    </div>
    <div class="section-r">
      <h3>服务中心</h3>
      <ul class="footer-partner">
        <li><a href="http://www.itxdl.cn/html/xldfaq/xdlbaoming/" rel="nofollow" class="external" target="_blank">报名须知</a></li>
        <li><a href="http://www.itxdl.cn/html/xldfaq/xdlbaoming/" rel="nofollow" class="external" target="_blank">报名流程</a></li>
        <li><a href="http://www11.53kf.com/webCompany.php?style=1&amp;arg=10143228" rel="nofollow" class="external" target="_blank">常见问题</a></li>
        <li><a href="http://www.itxdl.cn/activity/chengche/" rel="nofollow" class="external" target="_blank">住宿安排</a></li>
      </ul>
    </div>
  </div>
  <div class="qr-section">
    <h3>官方微博</h3>
    <img src="/homes/static/picture/wb.png" class="qr" alt="关注我们">
  </div>
  <div class="qr-section">
    <h3>官方微信</h3>
    <img src="/homes/static/picture/wx.jpg" class="qr" alt="关注我们">
  </div>
    <div class="phone"><p>官方咨询电话&nbsp;&nbsp;400-700-1307</p></div> 
  </div>
  </div>
  <div id="ft" class="wp cl">
     <div class="footer-left cl">
      <a href="http://bbs.itxdl.cn/archiver/" >Archiver</a><span class="pipe">|</span><a href="http://m.bbs.itxdl.cn" >手机版</a><span class="pipe">|</span><a href="http://bbs.itxdl.cn/forum.php?mod=misc&action=showdarkroom" >小黑屋</a><span class="pipe">|</span>      <span>Copyright 易第优（北京）科技股份有限公司 2006 - 2018 Edu Inc. <a style="margin-left:20px;" href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow"> 京ICP备11018177号</a> <a style="margin-right:20px;" target="_blank"><img src="/homes/static/picture/beian.png" alt="">京公网安备 11010802026987号</a>
        <script src="/homes/static/js/cnzz.js" type="text/javascript"></script><span id="cnzz_stat_icon_1261440059"><a href="http://www.cnzz.com/stat/website.php?web_id=1261440059" target="_blank" title="站长统计"><img border="0" hspace="0" vspace="0" src="/homes/static/picture/pic.gif"></a></span><script src="/homes/static/js/stat.js" type="text/javascript" type="text/javascript"></script><script src="/homes/static/js/core.js" type="text/javascript" charset="utf-8" type="text/javascript"></script>
      </span>
      <script type="text/javascript">
        var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1274442336'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s19.cnzz.com/z_stat.php%3Fid%3D1274442336%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));
      </script>
    </div>         
  </div> 
 

 

 
 

 

 
<script src="/homes/static/js/home.js" type="text/javascript"></script> 
 

 
 

 
 
 
 
 

  

    <div id="share">
    <a class="moquu_wxin"><div class="moquu_wxinh"><em class="arrow"></em></div></a>
    <a href="http://www11.53kf.com/webCompany.php?style=1&amp;arg=10143228" target="_blank" class="moquu_wmaps"></a>
    <a id="totop" title="">返回顶部</a>
    </div>

 
 </div>



<script> 
(function(){ var bp = document.createElement('script'); var curProtocol = window.location.protocol.split(':')[0]; if (curProtocol === 'https') { bp.src = 'https://zz.bdstatic.com/linksubmit/push.js'; } else { bp.src = 'http://push.zhanzhang.baidu.com/push.js'; } var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(bp, s); })(); 
</script>
</body>
<script src="/homes/static/js/bdtj.js" type="text/javascript"></script>
<script src="/homes/static/js/cnzz.js" type="text/javascript"></script></html>   
<script src="/homes/static/js/common.js" type="text/javascript"></script>

</html>   

