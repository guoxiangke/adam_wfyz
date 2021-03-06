<div id="auth_box" class="login">
  <div class="login_header">
    <div class="container">
      <img src="/sites/all/themes/proedge/images/login/logo_text.png" class="pull-left">
      <div class="back_link floatRight">
        <a href="<?php print url('<front>'); ?>"><img src="/sites/all/themes/proedge/images/login/home.png"><?php print t('返回首页'); ?></a>
      </div>
    </div>
  </div>

  <div class="loginBox_body">
    <div id="logoBg">
      <img src="/sites/all/themes/proedge/images/login/logoBg.jpg" width="1920" height="739">
    </div>
    <div class="loginBox">
      <div class="messages_part">
        <h2 class="title"><?php print $title; ?></h2>
        <!-- 注册信息 -->
        <div>
          <?php print $messages; ?>
          <div class="loginBtns">
            <?php print render($page['content']); ?>
            <?php if (variable_get('user_register')): ?>
            <div class="register_link btnRegisterv" >
              <?php print l(t('注册'), 'user/register'); ?>
            </div>
          </div>
        <?php endif; ?>
        </div>
        <!-- 忘记密码 -->
        <div class="password_link">
          <?php print l(t('忘记密码?'), 'user/password'); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="footer">
  <div id="_pageBottom">
        <div id="_pageBottomInfo" class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7" style="padding-top: 10px;">
                    <row>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <ul class="kcylink">
                                <li><a href="javascript:">关于我们</a></li>
                                <li><a href="javascript:">用户协议</a></li>
                                <li><a href="javascript:">常见问题</a></li>
                                <li><a href="javascript:">联系我们</a></li>
                                <li><a href="javascript:">免责声明</a></li>
                            </ul>
                        </div>
                    </row>
                    <row>
                        <div class="col-lg-12 col-md-12 col-sm-12 logo">
                            <div style="float: left; padding-right: 20px; padding-top: 10px;"><img width="77" height="49" src="/sites/all/themes/proedge/images/login/logo_white.png"></div>
                            <div style="float: left;">
                                <p>Copyright @2013-2016 Qcloud.com.&nbsp;科服驿站&nbsp;版权所有</p>
                                <p>绵阳科技城科技服务有限责任公司&nbsp;版权所有&nbsp;&nbsp;ICP备案许可证:川ICP备&nbsp;11018762号</p>
                                <p>技术支持:绵阳大数据公司&nbsp;&nbsp;&nbsp;&nbsp;绵阳傲锋科技&nbsp;&nbsp;&nbsp;&nbsp;攻城狮</p>
                            </div>
                        </div>
                    </row>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 contactus">
                    <div class="usme">联系我们(9:00-22:00)</div>
                    <p>平台热线：0816-2266040</p>
                    <p>商务合作：0816-2266040</p>
                    <p>客服邮箱：kefu@wfyizhan.com</p>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <div><img src="/sites/all/themes/proedge/images/login/microcode.png"></div>
                    <div style="font-size: 16px; padding-top: 5px;">微信扫我得服务券</div>
                </div>
            </div>
        </div>
    </div>
</div>
