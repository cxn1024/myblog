<?php 

?>

<!-- BEGIN CONTAINER -->   

	<div class="page-container row-fluid">

		<!-- BEGIN SIDEBAR -->

		<div class="page-sidebar nav-collapse collapse">

		</div>

		<!-- END SIDEBAR -->

		<!-- BEGIN PAGE -->

		<div class="page-content">

			<!-- BEGIN PAGE CONTAINER-->

			<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12">


						<!-- BEGIN PAGE TITLE & BREADCRUMB-->

						<h3 class="page-title">

							个人博客 <small>blog</small>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="/">首页</a> 

								<i class="icon-angle-right"></i>

							</li>

							<li>

								<a href="/site/index.html">文章列表</a>

								<i class="icon-angle-right"></i>

							</li>

							<li><span><?php echo $article['title']; ?></span></li>

						</ul>

						<!-- END PAGE TITLE & BREADCRUMB-->

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid">

					<div class="span12 blog-page">

						<div class="row-fluid">

							<div class="span9 article-block">

								<h1><?php echo $article['title']; ?></h1>

								<div class="blog-tag-data">

									<div class="row-fluid">

										<div class="span6">

											<ul class="unstyled inline blog-tags">

												<li>

													<i class="icon-tags"></i> 

													<?php foreach($article['tags'] as $key => $value): ?>

													<a href="/site/index.html?tags=<?php echo $value; ?>"><?php echo $value; ?></a> 

													<?php endforeach; ?>

												</li>

											</ul>

										</div>

										<div class="span6 blog-tag-data-inner">

											<ul class="unstyled inline">

												<li><i class="icon-calendar"></i> <span><?php echo date("Y-m-d", $article['create_time']); ?></span></li>

												<li><i class="icon-eye-open"></i> <span>阅读<?php echo $article['hits'];?>次</span></li>

											</ul>

										</div>

									</div>

								</div>

								<!--end news-tag-data-->

								<div>

									<p><?php echo $article['content']; ?></p>

								</div>

								<hr>

							</div>

							<!--end span9-->

							<?php echo $this->render('@frontend/views/layouts/right.php', ['hot' => $hot, 'tags' => $tags]); ?>

							<!--end span3-->

						</div>

					</div>

				</div>

				<!-- END PAGE CONTENT-->

			</div>

			<!-- END PAGE CONTAINER--> 

		</div>

		<!-- END PAGE -->    

	</div>

	<!-- END CONTAINER -->