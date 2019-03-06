@extends('home.layout.index')

@section('main')
	<div id="wp" class="wp time_wp cl"><div id="pt" class="bm cl">
<div class="z"> 
<a href="./" class="nvhm" title="首页">兄弟连论坛_每个人的交流社区</a><em>›</em><a href="plugin.php?id=dc_signin">每日签到</a>
</div>
</div>

<div id="dcsignin" class="wp cl">
<div class="mn">
<ul class="tb cl"></ul><style>
.mytips{margin-left:10px;}
.mytips b{color:#FF0000}
</style>
<div class="mtm pbm bbs">
<div class="mytips">
<p>尊敬的<b>{{session('uname')}}</b> ，您累计已签到:  <b>3</b>天 ，连续签到:<b>1</b> 天</p>
<p>您本月已累计签到:<b>2</b>天 ，本月连续签到:<b>1</b> 天</p>
<p>您上次签到时间:<b>{{$data->last_time}}</b></p>
<p>您目前获得的总奖励为: 金钱 <b>{{$data->score}}</b>，上次获得的奖励为:金钱 <b>27</b></p>
<p>坚持签到，努力前行！</p>
</div>
</div> 
<div class="mtm" style="margin-left:10px;">1．奖励措施：随机奖励10－50块金币，另额外奖励不定。<br>
2．签到时间：8：00－24：00<br>
3．要求签到信息的思想内容健康、积极向上。</div></div>
<div class="sd">
<div class="login-info bm">
<div class="user-info"><img class="avatar" src="{{$data->photo}}" style="margin-top:-160px;"><p>累计已签到：3天</p><p class="m">本月已签到：2天</p><p class="m">已获得金钱：94个</p></div>
</div>
<div class="bm bw0">
<div class="sign_div">
<div class="date-week">
<div class="date">03.04</div>
<div class="week">周一</div>
</div>
<div title="!condaysstr!1天" class="sign-num">1</div>
<a href="javascript:void(0);">已签到</a></div>
</div>
</div>
</div></div>
@endsection