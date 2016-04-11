 <!-- BEGIN SIDEBAR MENU -->        

        <ul class="page-sidebar-menu">

            <li>

                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->

                <div class="sidebar-toggler hidden-phone"></div>

                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->

            </li>

            <li>

                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->

                <form class="sidebar-search">

                    <div class="input-box">

                        <a href="javascript:;" class="remove"></a>

                        <input type="text" placeholder="Search..." />

                        <input type="button" class="submit" value=" " />

                    </div>

                </form>

                <!-- END RESPONSIVE QUICK SEARCH FORM -->

            </li>

            <li class="start <?php if(Yii::$app->controller->id == 'site'): ?> active <?php endif; ?>">

                <a href="/site/index.html">

                <i class="icon-home"></i> 

                <span class="title">首页</span>

                <span class="selected"></span>

                </a>

            </li>

            <li class="<?php if(Yii::$app->controller->id == 'articles'): ?> active <?php endif; ?>">

                <a href="javascript:;">

                <i class="icon-file-text"></i> 

                <span class="title">文章管理</span>

                <span class="arrow "></span>

                </a>

                <ul class="sub-menu">

                    <li >

                        <a href="/articles/index.html">

                        文章列表</a>

                    </li>

                </ul>

            </li>

            <li class="<?php if(Yii::$app->controller->id == 'admin'): ?> active <?php endif; ?>">

                <a href="javascript:;">

                <i class="icon-user"></i> 

                <span class="title">用户管理</span>

                <span class="arrow "></span>

                </a>

                <ul class="sub-menu">

                    <li >

                        <a href="/admin/index.html">

                        用户列表</a>

                    </li>

                </ul>

            </li>

            <li class="<?php if(Yii::$app->controller->id == 'category'): ?> active <?php endif; ?>">

                <a href="javascript:;">

                <i class="icon-user"></i> 

                <span class="title">分类管理</span>

                <span class="arrow "></span>

                </a>

                <ul class="sub-menu">

                    <li >

                        <a href="/category/index.html">

                        分类列表</a>

                    </li>

                </ul>

            </li>

            <li class="last ">

                <a href="#">

                <i class="icon-bar-chart"></i> 

                <span class="title">Visual Charts</span>

                </a>

            </li>

        </ul>

        <!-- END SIDEBAR MENU -->