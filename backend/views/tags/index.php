<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\TagsSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '标签列表';
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

            <!-- BEGIN PAGE CONTAINER-->        

            <div class="container-fluid">

                <!-- BEGIN PAGE HEADER-->

                <div class="row-fluid">

                    <div class="span12">

                        <!-- BEGIN PAGE TITLE & BREADCRUMB-->

                        <h3 class="page-title">

                            标签列表

                        </h3>

                        <ul class="breadcrumb">

                            <li>

                                <i class="icon-home"></i>

                                <a href="/site/index.html">首页</a> 

                                <i class="icon-angle-right"></i>

                            </li>

                            <li><span>标签列表</span></li>

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

                            </div>

                            <div class="portlet-body">

                                <div class="clearfix">

                                    <div class="btn-group">

                                        <a href="/tags/create.html"><button id="sample_editable_1_new" class="btn green">

                                        添加标签 <i class="icon-plus"></i>

                                        </button></a>

                                    </div>

                                </div>

                                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">

                                    <thead>

                                        <tr>

                                            <th>ID</th>

                                            <th>标签名</th>

                                            <th>点击量</th>

                                            <th>操作</th>

                                        </tr>

                                    </thead>

                                    <tbody>
                                        <?php foreach($data as $key => $value): ?>
                                        <tr class="">

                                            <td><?php echo $value['id']; ?></td>

                                            <td><?php echo $value['name']; ?></td>

                                            <td><?php echo $value['hits']; ?></td>

                                            <td>
                                                <a href="/tags/update.html?id=<?php echo $value['id']; ?>" class="btn mini purple"><i class="icon-edit"></i> Edit</a>
                                                <a href="/tags/delete.html?id=<?php echo $value['id']; ?>" class="btn mini black"><i class="icon-trash"></i> Delete</a>
                                            </td>

                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>

                                </table>
                                <div class="row-fluid">
                                    <div class="span12 text-center">
                                        <div class="dataTables_paginate paging_bootstrap pagination">
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