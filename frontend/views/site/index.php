<?php

/* @var $this yii\web\View */

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

                                            <li><i class="icon-calendar"></i> <span><?php echo date("Y-m-d H:i:s", $value['create_time']); ?></span></li>

                                            <li><i class="icon-comments"></i> <span>38 Comments</span></li>

                                        </ul>

                                        <div class="space20"></div>

                                        <p><?php echo $value['content']; ?></p>

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

                            <div class="span3 blog-sidebar">
                                
                                <h2>Flickr</h2>

                                <ul class="unstyled blog-images">

                                    <li><a href="#"><img alt="" src="media/image/2.jpg"></a></li>

                                    <li><a href="#"><img alt="" src="media/image/3.jpg"></a></li>

                                    <li><a href="#"><img alt="" src="media/image/4.jpg"></a></li>

                                    <li><a href="#"><img alt="" src="media/image/5.jpg"></a></li>

                                    <li><a href="#"><img alt="" src="media/image/6.jpg"></a></li>

                                    <li><a href="#"><img alt="" src="media/image/8.jpg"></a></li>

                                    <li><a href="#"><img alt="" src="media/image/10.jpg"></a></li>

                                    <li><a href="#"><img alt="" src="media/image/11.jpg"></a></li>

                                    <li><a href="#"><img alt="" src="media/image/1.jpg"></a></li>

                                    <li><a href="#"><img alt="" src="media/image/2.jpg"></a></li>

                                    <li><a href="#"><img alt="" src="media/image/7.jpg"></a></li>

                                </ul>

                                <div class="space20"></div>

                                <h2>Top Entiries</h2>

                                <div class="top-news">

                                    <a href="#" class="btn red">

                                    <span>Metronic News</span>

                                    <em>Posted on: April 16, 2013</em>

                                    <em>

                                    <i class="icon-tags"></i>

                                    Money, Business, Google

                                    </em>

                                    <i class="icon-briefcase top-news-icon"></i>

                                    </a>

                                    <a href="#" class="btn green">

                                    <span>Top Week</span>

                                    <em>Posted on: April 15, 2013</em>

                                    <em>

                                    <i class="icon-tags"></i>

                                    Internet, Music, People

                                    </em>

                                    <i class="icon-music top-news-icon"></i>                             

                                    </a>

                                    <a href="#" class="btn blue">

                                    <span>Gold Price Falls</span>

                                    <em>Posted on: April 14, 2013</em>

                                    <em>

                                    <i class="icon-tags"></i>

                                    USA, Business, Apple

                                    </em>

                                    <i class="icon-globe top-news-icon"></i>                             

                                    </a>

                                    <a href="#" class="btn yellow">

                                    <span>Study Abroad</span>

                                    <em>Posted on: April 13, 2013</em>

                                    <em>

                                    <i class="icon-tags"></i>

                                    Education, Students, Canada

                                    </em>

                                    <i class="icon-book top-news-icon"></i>                              

                                    </a>

                                    <a href="#" class="btn purple">

                                    <span>Top Destinations</span>

                                    <em>Posted on: April 12, 2013</em>

                                    <em>

                                    <i class="icon-tags"></i>

                                    Places, Internet, Google Map

                                    </em>

                                    <i class="icon-bolt top-news-icon"></i>                              

                                    </a>

                                </div>

                                <div class="space20"></div>

                                <h2>Recent Twitts</h2>

                                <div class="blog-twitter">

                                    <div class="blog-twitter-block">

                                        <a href="">@keenthemes</a> 

                                        <p>At vero eos et accusamus et iusto odio.</p>

                                        <a href="#"><em>http://t.co/sBav7dm</em></a> 

                                        <span>2 hours ago</span>

                                        <i class="icon-twitter blog-twiiter-icon"></i>

                                    </div>

                                    <div class="blog-twitter-block">

                                        <a href="">@keenthemes</a> 

                                        <p>At vero eos et accusamus et iusto odio.</p>

                                        <a href="#"><em>http://t.co/sBav7dm</em></a> 

                                        <span>5 hours ago</span>

                                        <i class="icon-twitter blog-twiiter-icon"></i>

                                    </div>

                                    <div class="blog-twitter-block">

                                        <a href="">@keenthemes</a> 

                                        <p>At vero eos et accusamus et iusto odio.</p>

                                        <a href="#"><em>http://t.co/sBav7dm</em></a> 

                                        <span>7 hours ago</span>

                                        <i class="icon-twitter blog-twiiter-icon"></i>

                                    </div>

                                </div>

                            </div>

                            <!--end span3-->

                        </div>

                        <div class="pagination pagination-right">

                            <ul>

                                <li><a href="#">Prev</a></li>

                                <li><a href="#">1</a></li>

                                <li><a href="#">2</a></li>

                                <li class="active"><a href="#">3</a></li>

                                <li><a href="#">4</a></li>

                                <li><a href="#">5</a></li>

                                <li><a href="#">Next</a></li>

                            </ul>

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