<?php $this->load->view('/public/general-header'); ?>
<div class="general-pageheader">
	<div class="container">
		<h1 class="title">redback1020<span>User Center</span></h1>
		<ul>
			<li><a href="/user/coswork">个人作品</a></li>
			<li><a href="/user/setting">设置</a></li>
		</ul>
		<div class="clear"></div>
	</div>
</div>
<div class="container usermain">
	<div class="left-block">
		<div class="general-title">
			<h3>我的动态</h3>
		</div>
		<div class="general-feedlist">
			<ul>
				<li>
					<img class="avatar" src="/resource/images/test.jpg">
					<b>redback1020</b>
					<p>加入了社团<span>2014-4-2</span></p>
					<div class="clear"></div>
				</li>
			</ul>
		</div>
		<div class="general-title">
			<h3>我的社团</h3>
		</div>
		<div class="usermain-societies-list">
			<ul>
				<li>
					<a href="/show/info"><img src="/resource/images/test.jpg" /></a>
					<div>
						<h3>cos社团</h3>
						<em>团长</em>
						<p>成员数<span>50</span></p>
					</div>
				</li>
				<div class="clear"></div>
			</ul>
			<div class="hr"></div>
			<ul>
				<li>
					<a href="/show/info"><img src="/resource/images/test.jpg" /></a>
					<div>
						<h3>cos社团</h3>
						<em>普通成员</em>
						<p>成员数<span>50</span></p>
					</div>
				</li>
				<li>
					<a href="/show/info"><img src="/resource/images/test.jpg" /></a>
					<div>
						<h3>cos社团</h3>
						<em>普通成员</em>
						<p>成员数<span>50</span></p>
					</div>
				</li>
				<li>
					<a href="/show/info"><img src="/resource/images/test.jpg" /></a>
					<div>
						<h3>cos社团</h3>
						<em>普通成员</em>
						<p>成员数<span>50</span></p>
					</div>
				</li>
				<div class="clear"></div>
			</ul>
		</div>
	</div>
	<div class="right-block">
		<div class="general-baseinfo-box">
			<div class="box-header">
				<img src="/resource/images/test.jpg">
				<h3>redback</h3>
			</div>
			<div class="box-body">
				<table>
					<tr>
						<td class="title">作品数</td>
						<td>4564</td>
					</tr>
					<tr>
						<td class="title">年龄</td>
						<td>25</td>
					</tr>
					<tr>
						<td class="title">所在地</td>
						<td>上海</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>
<?php $this->load->view('/public/general-foot'); ?>		