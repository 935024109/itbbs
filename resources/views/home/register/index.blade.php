@extends('home.layout.index')


@section('main')
<script src="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

   <div id="ct" class="wp cl" style="padding: 100px 0 60px 0;"> 
    <div class="nfl" id="main_succeed" style="display: none"> 
     <div class="f_c altw"> 
      <div class="alert_right"> 
       <p id="succeedmessage"></p> 
       <p id="succeedlocation" class="alert_btnleft"></p> 
       <p class="alert_btnleft"><a id="succeedmessage_href">如果您的浏览器没有自动跳转，请点击此链接</a></p> 
      </div> 
     </div> 
    </div> 
    <div class="mn"> 
     <div class="comForm cl" id="main_message" style="border: 1px solid #E4E4E4; border-top: 3px solid #1499F7;"> 
      <div class="bm_h" id="main_hnav" style="padding-left: 20px; height: 50px; line-height: 50px; border-bottom: 0; background: none;"> 
       <h3 id="layer_reginfo_t" style="height: 50px; line-height: 50px; padding-top: 10px; font-size: 24px; font-weight: bold; color: #CCCCCC;"> 立即注册</h3> 
      </div> 
      <p id="returnmessage4"></p> 
      <form method="post"  name="register" id="registerform" action="/home/user/register/email"> 
        <br>
         <!-- 显示错误消息 开始 -->
            @if (session('success'))
                <div class="alert alert-danger">
                  <ul>
                    <li>  {{ session('success') }}</li>
                  </ul>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                  <ul>
                    <li>{{ session('error') }}</li>
                  </ul>
                </div>
            @endif  

            @if (count($errors) > 0)
              <div class="alert alert-danger ">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

        {{ csrf_field() }}
       <div id="layer_reg" class="bm_c"> 

        <div class="mtw"> 
         <div id="reginfo_a"> 
          <div class="rfm"> 
           <table> 
            <tbody>
             <tr> 
              <th><span class="rq">*</span><label for="A6Egk6">用户名:</label></th> 
              <td><input type="text" id="A6Egk6" name="uname" class="px er" tabindex="1" value="{{ old('uname') }}" autocomplete="off" size="25" maxlength="15" required="" /></td> 
              <td class="tipcol"><i id="tip_A6Egk6" class="p_tip" style="display: none;">用户名由 3 到 15 个字符组成</i></td> 
             </tr> 
            </tbody>
           </table> 
          </div> 
          <div class="rfm"> 
           <table> 
            <tbody>
             <tr> 
              <th><span class="rq">*</span><label for="Ftm0ls">密码:</label></th> 
              <td><input type="password" id="Ftm0ls" name="pwd" size="25" tabindex="1" class="px er" required="" value="" /></td> 
              <td class="tipcol"><i id="tip_Ftm0ls" class="p_tip" style="display: none;">请填写密码, 最小长度为 6 个字符</i></td> 
             </tr> 
            </tbody>
           </table> 
          </div> 
          <div class="rfm"> 
           <table> 
            <tbody>
             <tr> 
              <th><span class="rq">*</span><label for="o0t0ue">确认密码:</label></th> 
              <td><input type="repwd" id="o0t0ue" name="repwd" size="25" tabindex="1" value="" class="px" required="" /></td> 
              <td class="tipcol"><i id="tip_o0t0ue" class="p_tip" style="display: none;">请再次输入密码</i></td> 
             </tr> 
            </tbody>
           </table> 
          </div> 
          <div class="rfm"> 
           <table> 
            <tbody>
             <tr> 
              <th><span class="rq">*</span><label for="dW68KX">Email:</label></th> 
              <td><input type="text" id="dW68KX" name="email" autocomplete="off" size="25" tabindex="1" class="px" value="{{ old('email') }}" required="" /><br /><em id="emailmore">&nbsp;</em></td> 
              <td class="tipcol"><i id="tip_dW68KX" class="p_tip" style="display: none;">请输入正确的邮箱地址</i></td> 
             </tr> 
            </tbody>
           </table> 
          </div> 
          <span id="seccode_cSrsQjsZ" class="seccode_1"></span> 
          
         </div> 
        </div> 
       </div> 
       <div id="layer_reginfo_b"> 
        <div class="rfm mbw bw0"> 
         <table width="100%"> 
          <tbody>
           <tr> 
            <th>&nbsp;</th> 
            <td> 
             <div id="reginfo_a_btn" class="login_btn"> 
              <em>&nbsp;</em>
              <button class="pn pnc" id="registerformsubmit" type="submit" value="true" tabindex="1">点击邮箱验证</button> 
             </div> </td> 
            <td></td> 
           </tr> 
          </tbody>
         </table> 
        </div> 
       </div> 
       <div class="login_now cl" style="padding-left: 446px;"> 
        <a href="/home/login" onclick="showWindow('login', this.href);return false;" class="xi2"><em style="color: #000000;">已有账号？</em>现在登录</a> 
       </div> 
      </form> 
     </div> 
     <div id="layer_regmessage" class="f_c blr nfl" style="display: none"> 
      <div class="c">
       <div class="alert_right"> 
        <div id="messageleft1"></div> 
        <p class="alert_btnleft" id="messageright1"></p> 
       </div> 
      </div> 
      <div id="layer_bbrule" style="display: none"> 
       <div class="c" style="width:700px;height:350px;overflow:auto">
        <br /> 
        <br /> 
        <br /> 
       </div> 
       
      
     </div>
    </div> 
   </div> 
  </div> 



@endsection