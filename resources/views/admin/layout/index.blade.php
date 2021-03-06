<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/admins/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/admins/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admins/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/icons/icol32.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/page_page.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/page-post.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admins/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admins/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admins/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/themer.css" media="screen">

<!-- wzl pages Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admins/css/page_page.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/page-post.css" media="screen">

<title>MWS admins - Dashboard</title>

</head>

<body>

    <!-- Header -->
    <div id="mws-header" class="clearfix">
    
        <!-- Logo Container -->
        <div id="mws-logo-container">
        
            <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
            <div id="mws-logo-wrap">
                <a href="/admin/index"><img src="/admins/images/mws-logo.png" alt="mws admins"></a>
            </div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
                <!-- User Photo -->
                <div id="mws-user-photo">
                	@if (session('photo'))
						<img src="/uploads/{{ session('photo')}}" alt="User Photo">               	
                	@else 
                		<img src="/uploads/images/user/15512302229854.jpeg" alt="User Photo">               	
                    @endif
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                   <div id="mws-username">
                        你好，{{session('uname')}}
                    </div>
                    <ul>
                        @if (!session('uname'))
                        <li><a href="/admin/in"">请登录</a></li>
                        @else
                        <li><a href="/admin/out" >退出</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
        <!-- Necessary markup, do not remove -->
        <div id="mws-sidebar-stitch"></div>
        <div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-users"></i> 用户管理</a>
                        <ul>
                            <li><a href="/admin/user">用户列表</a></li>
                            <li><a href="/admin/user/create">用户添加</a></li>
                            <li><a href="/admin/user/black">小黑屋</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-list"></i> 板块分类</a>
                        <ul>
                            <li><a href="/admin/forum">板块列表</a></li>
                            <li><a href="/admin/forum/create">添加板块</a></li>                           
                        </ul>
                    </li>   
                    <li>
                        <a href="#"><i class="icon-list-2"></i> 帖子管理</a>
                        <ul>
                            <li><a href="/admin/post">帖子列表</a></li>
                            <li><a href="/admin/post/create">添加帖子</a></li>
                        </ul>
                    </li>  
                    <li>
                        <a href="#"><i class="icon-pacman"></i> 话题管理</a>
                        <ul>
                            <li><a href="/admin/topic">话题列表</a></li>
                            <li><a href="/admin/topic/create">添加话题</a></li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="icon-pictures"></i>轮播图管理</a>
                        <ul>
                            <li><a href="/admin/carousel">轮播图列表</a></li>
                            <li><a href="/admin/carousel/create">添加轮播图</a></li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="icon-list"></i>推荐阅读管理</a>
                        <ul>
                            <li><a href="/admin/groom">推荐阅读列表</a></li>
                            <li><a href="/admin/groom/create">添加推荐阅读</a></li>
                        </ul>
                    </li> 
                    <li>

                        <a href="#"><i class="icon-unlink"></i> 友情链接</a>
                        <ul>
                            <li><a href="/admin/blogroll">链接列表</a></li>
                            <li><a href="/admin/blogroll/create">添加链接</a></li>
                        </ul>
                    </li>   
                    <li>
                        <a href="#"><i class="icon-cogs"></i> 网站配置管理</a>
                        <ul>
                            <li><a href="/admin/config">网站配置列表</a></li>
                            <li><a href="/admin/config/create">添加网站配置</a></li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="icon-volume-up"></i>公告管理</a>
                        <ul>
                            <li><a href="/admin/announcement">公告列表</a></li>
                            <li><a href="/admin/announcement/create">添加公告</a></li>
                        </ul>
                    </li>                   
                </ul>
            </div>         
        </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
            <!-- Inner Container Start -->
            <!-- 显示错误消息 开始 -->
            @if (session('success'))
                <div class="mws-form-message success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="mws-form-message error">
                    {{ session('error') }}
                </div>
            @endif  

            @section('main')
        

            @show     
            <!-- Inner Container End -->
            
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/admins/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/admins/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/admins/js/libs/jquery.placeholder.min.js"></script>
    <script src="/admins/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/admins/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/admins/jui/jquery-ui.custom.min.js"></script>
    <script src="/admins/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/admins/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="/admins/js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/admins/plugins/flot/jquery.flot.min.js"></script>
    <script src="/admins/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/admins/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/admins/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/admins/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/admins/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/admins/plugins/validate/jquery.validate-min.js"></script>
    <script src="/admins/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/admins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/admins/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/admins/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/admins/js/demo/demo.dashboard.js"></script>

</body>
</html>
