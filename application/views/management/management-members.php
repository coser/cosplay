<?php $this->load->view('/public/general-header'); ?>
<div class="general-pageheader">
	<div class="container">
		<h1 class="title">管理<span>Management</span></h1>
		<ul>
			<li><a  href="/management">作品管理</a></li>
			<li><a class="selected" href="/management/members">成员管理</a></li>
		</ul>
		<div class="clear"></div>
	</div>
</div>
<div class="container">
	<div class="left-block">
		<div class="button-group">
			<a href="/" class=" first-child selected">申请加入社团</a>
			<a href="/" class="last-child">社团已有成员</a>
			<div class="clear"></div>
		</div>
		<table class="managemengt-members-list">
			<tr>
				<td class="first-child"><a class="img_text" href=""><img src="/resource/images/test.jpg">redback1020</a></td>
				<td class="middle-child">coser/化妆师</td>
				<td><a class="actionbutton-gray">编辑</a><a class="actionbutton-gray">踢除</a></td>
			</tr>
			<tr>
				<td class="first-child"><a class="img_text" href=""><img src="/resource/images/test.jpg">redback1020</a></td>
				<td class="middle-child">coser/化妆师</td>
				<td><a class="actionbutton-gray">编辑</a><a class="actionbutton-gray">踢除</a></td>
			</tr>
			<tr>
				<td class="first-child"><a class="img_text" href=""><img src="/resource/images/test.jpg">redback1020</a></td>
				<td class="middle-child">coser/化妆师</td>
				<td><a class="actionbutton-gray">编辑</a><a class="actionbutton-gray">踢除</a></td>
			</tr>
			<tr>
				<td class="first-child"><a class="img_text" href=""><img src="/resource/images/test.jpg">redback1020</a></td>
				<td class="middle-child">coser/化妆师</td>
				<td><a class="actionbutton-gray">编辑</a><a class="actionbutton-gray">踢除</a></td>
			</tr>
			<tr>
				<td class="first-child"><a class="img_text" href=""><img src="/resource/images/test.jpg">redback1020</a></td>
				<td class="middle-child">coser/化妆师</td>
				<td><a class="actionbutton-gray">编辑</a><a class="actionbutton-gray">踢除</a></td>
			</tr>
		</table>
	</div>
	<div class="right-block">

	</div>
	<div class="clear"></div>
</div>
<?php $this->load->view('/public/general-foot'); ?>	