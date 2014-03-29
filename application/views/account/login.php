<?php $this->load->view('/public/general-header'); ?>
<div class="general-pageheader">
	<div class="container">
		<h1 class="title">登陆<span>Login</span></h1>
		<div class="clear"></div>
	</div>
</div>
<div class="middle-block login">
	<div class="border-box">
			<div class="box-container">
				<div class="box-header">登陆</div>
				<div class="box-body form_table">
					<dl>
						<dt>
							<label>邮箱</label>
						</dt>
						<dd>
							<input type="text" class="input">
						</dd>
						<dt>
							<label>密码</label>
						</dt>
						<dd>
							<input type="text" class="input">
							<p class="tip"><a href="">忘记密码？</a></p>
						</dd>
						<dd>
							<a class="actionbutton-green">登陆</a>
							<p class="tip">没有帐号，<a href="/account/register">立即注册</a></p>
						</dd>
					</dl>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('/public/general-foot'); ?>	