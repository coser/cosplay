<?php $this->load->view('/public/general-header'); ?>
<div class="general-pageheader">
	<div class="container">
		<h1 class="navigate"><a href="/user">redback1020</a><span>/</span><strong>设置</strong></h1>
		<div class="clear"></div>
	</div>
</div>
<div class="container usersetting">
	<div class="left-block">
		<div class="border-box">
			<div class="box-container">
				<div class="box-header">
					<a class="img_text" href=""><img src="/resource/images/test.jpg">redback1020</a>
				</div>
				<div class="box-body">
					<ul class="menu">
						<li>
							<a class="selected" href="">基本资料</a>
						</li>
						<li>
							<a href="">帐号绑定</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="right-block">
		<div class="border-box">
			<div class="box-container">
				<div class="box-header">基础资料</div>
				<div class="box-body setting-form">
					<dl>
						<dt>
							<label>头像</label>
						</dt>
						<dd>
							<div class="upload-avatar">
								<img src="/resource/images/test.jpg">
								<a class="actionbutton-gray">选择一张图片</a>
								<p>推荐你选择大于200x200正方形图片，文件类型jpg,jpeg,gif</p>
							</div>
							
						</dd>
						<dt>
							<label>性别</label>
						</dt>
						<dd>
							<div class="button-group">
								<a href="/" class=" first-child selected">男生</a>
								<a href="/" class="last-child">女生</a>
								<div class="clear"></div>
							</div>
						</dd>
						<dt>
							<label>出生年月</label>
						</dt>
						<dd>
							<div class="input">1990年8月3号</div><a class="actionbutton-gray">选择</a>
						</dd>
						<dt>
							<label>所在地</label>
						</dt>
						<dd>
							<div class="input">上海</div><a class="actionbutton-gray">选择</a>
						</dd>
					</dl>
					<a class="actionbutton-green">保存</a>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>
<?php $this->load->view('/public/general-foot'); ?>	