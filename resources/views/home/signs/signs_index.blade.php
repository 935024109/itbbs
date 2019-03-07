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
<p>尊敬的<b>{{ $data->nickname }}</b> ，您累计已签到:  <b>{{$data->sign_count}}</b>天

<p>您上次签到时间:<b>{{$data->created_at}}</b></p>
<p>您目前获得的总奖励为: 金钱 <b>{{$user->score}}</b>，上次获得的奖励为:金钱 <b>20</b></p>
<p>坚持签到，努力前行！</p>
</div>
</div> 

1．签到时间：8：00－24：00<br>
2．要求签到信息的思想内容健康、积极向上。</div></div>
<div class="sd">
<div class="login-info bm">
<div class="user-info"><img class="avatar" src="/uploads/{{$user->photo}}" style="margin-top:-208px;width:150px;"><p class="m">本月已签到：{{$data->sign_count}}天</p><p class="m">已获得金钱：{{$user->score}}</p></div>
</div>
<div class="bm bw0">
<div class="sign_div">
<div class="date-week">
<div class="date">{{date('Y-m-d')}}</div>
<div class="week"></div>
</div>
<a href="javascript:void(0);">已签到</a></div>
</div>
</div>
</div></div>
@endsection