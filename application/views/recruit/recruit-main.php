<?php $this->load->view('/public/general-header'); ?>
<div class="general-pageheader">
	<div class="container">
		<h1 class="title">社团招募<span>Recruitment</span></h1>

		<div class="clear"></div>
	</div>
</div>
<div class="container">
	<div class="left-block">
		<ul class="recruit-list">
			<li>
				<a class="left-area" href="/societies/info"><img class="cover" src="/resource/images/test.jpg"><br>cos社团</a>
				<h3><a href="">我们找个化妆师</a></h3>
				<div class="base-info">
					<table>
						<tr>
							<td class="title"><b>所在地</b></td>
							<td>上海</td>
							<td class="title"><b>招募职位</b></td>
							<td>化妆师</td>
							<td class="title"><b>发布时间</b></td>
							<td>2014-04－05</td>
						</tr>
					</table>
				</div>
			</li>
		</ul>
		
	<form id="fileupload" action="server/php/index.php" method="POST" enctype="multipart/form-data">
        <!-- Redirect browsers with JavaScript disabled to the origin page -->
        <noscript><input type="hidden" name="redirect" value="http://blueimp.github.io/jQuery-File-Upload/"></noscript>
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
            <div class="col-lg-7">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Add files...</span>
                    <input type="file" name="files[]" multiple>
                </span>
                <button type="submit" class="btn btn-primary start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start upload</span>
                </button>
                <button type="reset" class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel upload</span>
                </button>
                <button type="button" class="btn btn-danger delete">
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" class="toggle">
                <!-- The global file processing state -->
                <span class="fileupload-process"></span>
            </div>
            <!-- The global progress state -->
            <div class="col-lg-5 fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                </div>
                <!-- The extended global progress state -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <!-- The table listing the files available for upload/download -->
        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
    </form>
	<!-- The basic File Upload plugin -->
	<script src="js/jquery.fileupload.js"></script>
	<!-- The File Upload processing plugin -->
	<script src="js/jquery.fileupload-process.js"></script>
	<!-- The File Upload image preview & resize plugin -->
	<script src="js/jquery.fileupload-image.js"></script>
	<!-- The File Upload audio preview plugin -->
	<script src="js/jquery.fileupload-audio.js"></script>
	<!-- The File Upload video preview plugin -->
	<script src="js/jquery.fileupload-video.js"></script>
	<!-- The File Upload validation plugin -->
	<script src="js/jquery.fileupload-validate.js"></script>
	<!-- The File Upload user interface plugin -->
	<script src="js/jquery.fileupload-ui.js"></script>
	<!-- The main application script -->
	<script src="js/main.js"></script>	
		
	</div>
	<div class="right-block">
		
	</div>
	<div class="clear"></div>
</div>
<?php $this->load->view('/public/general-foot'); ?>	