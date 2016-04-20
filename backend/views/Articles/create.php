<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Articles */

$this->title = '添加文章';
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- BEGIN CONTAINER -->

	<div class="page-container row-fluid">

		<!-- BEGIN SIDEBAR -->

		<div class="page-sidebar nav-collapse collapse">

			<!-- BEGIN SIDEBAR MENU -->        

			<?php echo $this->render('@backend/views/layouts/menu.php'); ?>

			<!-- END SIDEBAR MENU -->

		</div>

		<!-- END SIDEBAR -->

		<!-- BEGIN PAGE -->  

		<div class="page-content">

			<!-- BEGIN PAGE CONTAINER-->

			<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->   

				<div class="row-fluid">

					<div class="span12">

						<h3 class="page-title">添加文章</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="/site/index.html">首页</a> 

								<span class="icon-angle-right"></span>

							</li>

							<li>

								<a href="/articles/index.html">文章列表</a>

							</li>

						</ul>

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN SAMPLE FORM PORTLET-->   

						<div class="portlet box blue tabbable">

							<div class="portlet-title">

								<div class="caption">

									<i class="icon-reorder"></i>

									<span class="hidden-480">FORM</span>

								</div>

							</div>

							<div class="portlet-body form">

								<div class="tabbable portlet-tabs">

									<ul class="nav nav-tabs">

										<li class="active"><a href="#portlet_tab1" data-toggle="tab">Default</a></li>

									</ul>

									<div class="tab-content">

										<div class="tab-pane active" id="portlet_tab1">

											<!-- BEGIN FORM-->

											<form action="/articles/create.html" method="post" class="form-horizontal">

												<div class="control-group">

													<label class="control-label">标题</label>

													<div class="controls">

														<input type="text" name="title" placeholder="标题" class="m-wrap large" />

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">标签</label>

													<div class="controls">

														<input type="text" name="tags" placeholder="标签" class="m-wrap large" /><span class="inline">(多个标签用,隔开)</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">描述</label>

													<div class="controls">

														<textarea name="description"></textarea>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">分类</label>

													<div class="controls">

														<select class="medium m-wrap" tabindex="1" name="category_id">

															<option value="1">php</option>

														</select>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">内容</label>

													<div class="controls">

														<script id="editor" name="content" type="text/plain" style="width:1024px;height:500px;"></script>

													</div>

												</div>						

												<div class="form-actions">

													<button type="submit" class="btn blue"><i class="icon-ok"></i> 保存</button>

													<button type="reset" class="btn" onclick="clearEdit()">重置</button>

												</div>

											</form>

											<!-- END FORM-->  

										</div>

									</div>

								</div>

							</div>

						</div>

						<!-- END SAMPLE FORM PORTLET-->

					</div>

				</div>

				<!-- END PAGE CONTENT-->         

			</div>

			<!-- END PAGE CONTAINER-->

		</div>

		<!-- END PAGE -->  

	</div>

	<!-- END CONTAINER -->
<script type="text/javascript" charset="utf-8" src="/edit/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/edit/ueditor.all.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/edit/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">

    //实例化编辑器
    var ue = UE.getEditor('editor', {
    	toolbars : [[
            'fullscreen', 'source', '|', 'undo', 'redo', '|',
            'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
            'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
            'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
            'directionalityltr', 'directionalityrtl', 'indent', '|',
            'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
            'link', 'unlink', 'anchor', '|', 'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
            
        ]] ,
        initialFrameWidth : 800,
        initialFrameHeight : 300,
    });

    function clearEdit(){
    	UE.getEditor('editor').setContent('');
    }
</script>