<?php

use yii\widgets\LinkPager;
$this->title = '文章列表';
?>
<!-- BEGIN CONTAINER -->   

    <div class="page-container row-fluid">

        <!-- BEGIN PAGE -->

        <div class="page-content row-fluid">

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

                            <li><span>列表</span></li>

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
                                <?php foreach( $articles as $key => $value ): ?>
                                <div class="row-fluid">

                                    <div class="span12 blog-article">

                                        <h2><a href="/site/view.html?id=<?php echo $value['id']; ?>"><?php echo $value['title']; ?></a></h2>

                                        <ul class="unstyled inline">

                                            <li><i class="icon-calendar"></i> <span><?php echo date("Y-m-d", $value['create_time']); ?></span></li>

                                            <li><i class="icon-eye-open"></i> <span>阅读<?php echo $value['hits'];?>次</span></li>

                                        </ul>

                                        <div class="space20"></div>

                                        <p><?php echo mb_substr($value['content'], 0, 200, 'utf-8'); ?></p>

                                        <a class="btn blue" href="/site/view.html?id=<?php echo $value['id']; ?>">

                                        阅读全文 

                                        <i class="m-icon-swapright m-icon-white"></i>

                                        </a>

                                    </div>

                                </div>

                                <hr>
                                <?php endforeach; ?>
                            </div>

                            <!--end span9-->

                            <?php echo $this->render('@frontend/views/layouts/right.php', ['hot' => $hot , 'tags' => $tags]); ?>

                            <!--end span3-->

                        </div>

                        <div class="pagination pagination-right">

                            <?php echo LinkPager::widget([
                                'pagination' => $pages
                            ]); ?>

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