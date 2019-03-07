@extends('home.layout.index')

@section('main')
    <div id="wp" class="wp time_wp cl">
  <h3 class="flb">
    <em id="return_sign">每日签到</em>
    <span>
      <a href="javascript:;" onclick="hideWindow('sign');" class="flbc" title="关闭">关闭</a></span>
  </h3>
  <style type="text/css">.layer_dcsignin { padding: 10px 0 0; width: 322px; overflow: hidden; position: relative; } .layer_dcsignin .dcsignin_title{background:url("source/plugin/dc_signin/images/top.png") no-repeat; width :162px; height:15px; margin:0 15px 10px;} .layer_dcsignin .dcsignin_list{ padding:0 0 5px 15px; } .layer_dcsignin .dcsignin_list li{ float:left; text-align:center; cursor:pointer; height:60px; } .layer_dcsignin .dcsignin_list li div{ padding:4px 5px 2px; width:48px;} .layer_dcsignin .dcsignin_list li.current div{ border:1px solid #99d0ff; background:#eaf6ff; padding:3px 4px 1px;} .layer_dcsignin .dcsignin_list li img{ display:block; margin:0 0 3px; margin-left:8px; *margin-left:3px;} .layer_dcsignin .dcsignin_send{ padding:5px 15px;} .layer_dcsignin .dcsignin_send textarea{ width:280px; padding:5px; border:1px solid #c6c6c6; font-family:"Tahoma" ; line-height:18px; height:55px;}</style>
  <form method="post" id="signform" action="/home/signs">
   {{ csrf_field() }}
    <input type="hidden" name="formhash" value="60c2ede7">
    <input type="hidden" name="signsubmit" value="yes">
    <input type="hidden" name="handlekey" value="signin">
    <input type="hidden" name="emotid" id="emotid">
    <input type="hidden" name="referer" value="http://bbs.itxdl.cn/">
    <div class="layer_dcsignin">
      <div class="dcsignin_title"></div>
      <ul class="dcsignin_list">
        <li onmouseover="this.className='current'" onmouseout="this.className=$('emotid').value==1?this.className:''" onclick="check(this, 1)" class="">
          <div class="dcsignin2">
            <img width="32" height="32" id="emot_1" src="/homes/static/signin/1.jpg" title="" alt=""></div>
        </li>
        <li onmouseover="this.className='current'" onmouseout="this.className=$('emotid').value==2?this.className:''" onclick="check(this, 2)">
          <div class="dcsignin2">
            <img width="32" height="32" id="emot_2" src="/homes/static/signin/2.jpg" title="" alt=""></div>
        </li>
        <li onmouseover="this.className='current'" onmouseout="this.className=$('emotid').value==3?this.className:''" onclick="check(this, 3)">
          <div class="dcsignin2">
            <img width="32" height="32" id="emot_3"src="/homes/static/signin/3.jpg" title="" alt=""></div>
        </li>
        <li onmouseover="this.className='current'" onmouseout="this.className=$('emotid').value==4?this.className:''" onclick="check(this, 4)">
          <div class="dcsignin2">
            <img width="32" height="32" id="emot_4" src="/homes/static/signin/4.jpg" title="" alt=""></div>
        </li>
        <li onmouseover="this.className='current'" onmouseout="this.className=$('emotid').value==5?this.className:''" onclick="check(this, 5)">
          <div class="dcsignin2">
            <img width="32" height="32" id="emot_5" src="/homes/static/signin/5.jpg" title="" alt=""></div>
        </li>
        <li onmouseover="this.className='current'" onmouseout="this.className=$('emotid').value==6?this.className:''" onclick="check(this, 6)" class="">
          <div class="dcsignin2">
            <img width="32" height="32" id="emot_6" src="/homes/static/signin/6.jpg" title="" alt=""></div>
        </li>
        <li onmouseover="this.className='current'" onmouseout="this.className=$('emotid').value==7?this.className:''" onclick="check(this, 7)" class="">
          <div class="dcsignin2">
            <img width="32" height="32" id="emot_7" src="/homes/static/signin/7.jpg" title="" alt=""></div>
        </li>
        <li onmouseover="this.className='current'" onmouseout="this.className=$('emotid').value==8?this.className:''" onclick="check(this, 8)">
          <div class="dcsignin2">
            <img width="32" height="32" id="emot_8" src="/homes/static/signin/8.jpg" title="" alt=""></div>
        </li>
        <li onmouseover="this.className='current'" onmouseout="this.className=$('emotid').value==9?this.className:''" onclick="check(this, 9)">
          <div class="dcsignin2">
            <img width="32" height="32" id="emot_9" src="/homes/static/signin/9.jpg" title="" alt=""></div>
        </li>
        <li onmouseover="this.className='current'" onmouseout="this.className=$('emotid').value==10?this.className:''" onclick="check(this, 10)" class="">
          <div class="dcsignin2">
            <img width="32" height="32" id="emot_10" src="/homes/static/signin/10.jpg" title="" alt=""></div>
        </li>
      </ul>
      <div class="dcsignin_send">
        <textarea name="content" id="content"></textarea>
      </div>
    </div>
        <!-- <p class="o pns">
          <button type="submit" name="signpn" value="true" class="pn pnc">
            <strong>确认</strong></button>
            
        </p> -->
        <input type="submit" value="提交">
  </form>
  <div id="floatlayout_signin" style="display:none"></div>
  <script type="text/javascript">function check(obj, id) {
      var lis = obj.parentNode.childNodes;
      for (var i = 0; i < lis.length; i++) {
        lis[i].className = '';
      }
      obj.className = 'current';
      $('emotid').value = id;
      $('content').innerText = $('emot_' + id).title;
    }
    function succeedhandle_signin(href, message, param) {
      hideWindow('');
      showDialog(message, 'right', '', 'window.location.href=\'' + href + '\'', '', '', '', '', '', '', 3);
    }</script>
</div>
@endsection