<?php $this->load->view('/public/general-header'); ?>
<div class="general-pageheader">
	<div class="container">
		<h1 class="navigate"><a href="/user">redback1020</a><span>/</span><strong>设置</strong></h1>
		<div class="clear"></div>
	</div>
</div>
<div class="container usersetting">
	<div class="left-block">
		<?php $this->load->view('/setting/setting-left'); ?>
	</div>
	<div class="right-block">
		<div class="border-box">
			<div class="box-container">
				<div class="box-header">重置密码</div>
				<div class="box-body form_table">
					<dl>
						<dt>
							<label>旧密码</label>
						</dt>
						<dd>
							<input class="input" type="text">
						</dd>
						<dt>
							<label>新密码</label>
						</dt>
						<dd>
							<input class="input" type="text">
						</dd>
						<dt>
							<label>新密码确认</label>
						</dt>
						<dd>
							<input class="input" type="text">
						</dd>
					</dl>
					<a class="actionbutton-green">保存</a>
				</div>
			</div>
		</div>
		<div class="space10"></div>
		<div class="border-box">
			<div class="box-container">
				<div class="box-header">更换邮箱</div>
				<div class="box-body form_table">
					<dl>
						<dd>
							<input class="input" type="text"><a class="actionbutton-green" href="">发送邮件验证邮箱</a>
						</dd>
					</dl>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>
