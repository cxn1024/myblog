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

								<h3 class="page-title">
									<small>[声明] 本站原创文章版权归原作者所有，内容为作者个人观点，本站只提供参考并不构成任何投资及应用建议。如若转载，请注明原文链接。本站拥有对此声明的最终解释权</small>
								</h3>
								
								<span>分享到：</span>
								<div class="bdsharebuttonbox">
									<a href="#" class="bds_more" data-cmd="more"></a>
									<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
									<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
									<a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
									<a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
									<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
								</div>

								
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
	<script>
		window._bd_share_config={
			"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},
			"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},
			"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}
		};
		with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
	</script>