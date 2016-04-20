<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ArticlesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '文章列表';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- BEGIN CONTAINER -->

    <div class="page-container row-fluid">

        <!-- BEGIN SIDEBAR -->

        <div class="page-sidebar nav-collapse collapse">

            <!-- BEGIN SIDEBAR MENU -->        

            <?= $this->render('@backend/views/layouts/menu.php'); ?>

            <!-- END SIDEBAR MENU -->

        </div>

        <!-- END SIDEBAR -->

        <!-- BEGIN PAGE -->

        <div class="page-content">

            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

            <div id="portlet-config" class="modal hide">

                <div class="modal-header">

                    <button data-dismiss="modal" class="close" type="button"></button>

                    <h3>portlet Settings</h3>

                </div>

                <div class="modal-body">

                    <p>Here will be a configuration form</p>

                </div>

            </div>

            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

            <!-- BEGIN PAGE CONTAINER-->        

            <div class="container-fluid">

                <!-- BEGIN PAGE HEADER-->

                <div class="row-fluid">

                    <div class="span12">

                        <!-- BEGIN STYLE CUSTOMIZER -->

                        <div class="color-panel hidden-phone">

                            <div class="color-mode-icons icon-color"></div>

                            <div class="color-mode-icons icon-color-close"></div>

                            <div class="color-mode">

                                <p>THEME COLOR</p>

                                <ul class="inline">

                                    <li class="color-black current color-default" data-style="default"></li>

                                    <li class="color-blue" data-style="blue"></li>

                                    <li class="color-brown" data-style="brown"></li>

                                    <li class="color-purple" data-style="purple"></li>

                                    <li class="color-grey" data-style="grey"></li>

                                    <li class="color-white color-light" data-style="light"></li>

                                </ul>

                                <label>

                                    <span>Layout</span>

                                    <select class="layout-option m-wrap small">

                                        <option value="fluid" selected>Fluid</option>

                                        <option value="boxed">Boxed</option>

                                    </select>

                                </label>

                                <label>

                                    <span>Header</span>

                                    <select class="header-option m-wrap small">

                                        <option value="fixed" selected>Fixed</option>

                                        <option value="default">Default</option>

                                    </select>

                                </label>

                                <label>

                                    <span>Sidebar</span>

                                    <select class="sidebar-option m-wrap small">

                                        <option value="fixed">Fixed</option>

                                        <option value="default" selected>Default</option>

                                    </select>

                                </label>

                                <label>

                                    <span>Footer</span>

                                    <select class="footer-option m-wrap small">

                                        <option value="fixed">Fixed</option>

                                        <option value="default" selected>Default</option>

                                    </select>

                                </label>

                            </div>

                        </div>

                        <!-- END BEGIN STYLE CUSTOMIZER -->  

                        <!-- BEGIN PAGE TITLE & BREADCRUMB-->

                        <h3 class="page-title">

                            文章列表

                        </h3>

                        <ul class="breadcrumb">

                            <li>

                                <i class="icon-home"></i>

                                <a href="/site/index.html">首页</a> 

                                <i class="icon-angle-right"></i>

                            </li>

                            <li><span>文章列表</span></li>

                        </ul>

                        <!-- END PAGE TITLE & BREADCRUMB-->

                    </div>

                </div>

                <!-- END PAGE HEADER-->

                <!-- BEGIN PAGE CONTENT-->

                <div class="row-fluid">

                    <div class="span12">

                        <!-- BEGIN EXAMPLE TABLE PORTLET-->

                        <div class="portlet box blue">

                            <div class="portlet-title">

                                <div class="caption"><i class="icon-book"></i>Table</div>

                                <div class="tools">

                                    <!-- <a href="javascript:;" class="collapse"></a>

                                    <a href="#portlet-config" data-toggle="modal" class="config"></a>

                                    <a href="javascript:;" class="reload"></a>

                                    <a href="javascript:;" class="remove"></a> -->

                                </div>

                            </div>

                            <div class="portlet-body">

                                <div class="clearfix">

                                    <div class="btn-group">

                                        <a href="/articles/create.html"><button id="sample_editable_1_new" class="btn green">

                                        添加文章 <i class="icon-plus"></i>

                                        </button></a>

                                    </div>

                                    <div class="btn-group pull-right">

                                        <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>

                                        </button>

                                        <ul class="dropdown-menu pull-right">

                                            <li><a href="#">Print</a></li>

                                            <li><a href="#">Save as PDF</a></li>

                                            <li><a href="#">Export to Excel</a></li>

                                        </ul>

                                    </div>

                                </div>

                                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">

                                    <thead>

                                        <tr>

                                            <th>标题</th>

                                            <th>标签</th>

                                            <th>点击量</th>

                                            <th>状态</th>

                                            <th>创建时间</th>

                                            <th>更新时间</th>

                                            <th>作者</th>

                                            <th>操作</th>

                                        </tr>

                                    </thead>

                                    <tbody>
                                        <?php $statusArr = ['隐藏', '显示']; ?>
                                        <?php foreach($data as $key => $value): ?>
                                        <tr class="">

                                            <td><?php echo $value['title']; ?></td>

                                            <td><?php echo $value['tags']; ?></td>

                                            <td><?php echo $value['hits']; ?></td>

                                            <td><?php echo $statusArr[$value['status']]; ?></td>

                                            <td><?php echo date("Y-m-d H:i:s", $value['create_time']); ?></td>

                                            <td><?php echo date("Y-m-d H:i:s", $value['update_time']); ?></td>

                                            <td><?php echo $value['user']['nickname']; ?></td>

                                            <td>
                                                <a href="/articles/update.html?id=<?php echo $value['id']; ?>" class="btn mini purple"><i class="icon-edit"></i> Edit</a>
                                                <a href="/articles/delete.html?id=<?php echo $value['id']; ?>" class="btn mini black"><i class="icon-trash"></i> Delete</a>
                                            </td>

                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>

                                </table>
                                <div class="row-fluid">
                                    <div class="span12 text-center">
                                        <div class="dataTables_paginate paging_bootstrap pagination">
                                            <!-- <ul>
                                                <li class="prev disabled"><a href="#">← <span class="hidden-480">Prev</span></a></li>
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li class="next"><a href="#"><span class="hidden-480">Next</span> → </a></li>
                                            </ul> -->
                                            <?= LinkPager::widget([
                                                'pagination' => $pages,
                                            ]); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- END EXAMPLE TABLE PORTLET-->

                    </div>

                </div>

                <!-- END PAGE CONTENT -->

            </div>

            <!-- END PAGE CONTAINER-->

        </div>

        <!-- END PAGE -->

    </div>

    <!-- END CONTAINER -->