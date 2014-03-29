<?php $this->load->view('/public/general-header'); ?>
<div class="general-pageheader">
	<div class="container">
		<h1 class="title">注册<span>Register</span></h1>
		<div class="clear"></div>
	</div>
</div>
<div class="middle-block login">
	<div class="border-box">
			<div class="box-container">
				<div class="box-header">注册</div>
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
							<p class="tip">密码不能少于6个字</p>
						</dd>
						<dt>
							<label>昵称</label>
						</dt>
						<dd>
							<input type="text" class="input">
							<p class="tip">昵称不能少于6个字</p>
						</dd>
						<dd>
							<a class="actionbutton-green">注册</a>
							<p class="tip">已有帐号，<a href="/account/login">立即登陆</a></p>
						</dd>
					</dl>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('/public/general-foot'); ?>	