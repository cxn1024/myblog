<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>
 
        <meta charset="utf-8">
        <title><?= Html::encode($this->title) ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/supersized.css">
        <link rel="stylesheet" href="/css/style.css">

    </head>

    <body>

        <div class="page-container">
            <h1>Login</h1>
            <!-- <form action="" method="post">
                <input type="text" name="username" class="username" placeholder="Username">
                <input type="password" name="password" class="password" placeholder="Password">
                <button type="submit">Sign me in</button>
                <div class="error"><span>+</span></div>
            </form> -->
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->input('text',  ['class' => 'username', 'placeholder' => 'Username'])->label(false) ?>

                <?= $form->field($model, 'password')->passwordInput(['class' => 'password', 'placeholder' => 'Password'])->label(false) ?>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
        
        <!-- Javascript -->
        <script src="/js/jquery-1.8.2.min.js"></script>
        <script src="/js/supersized.3.2.7.min.js"></script>
        <script src="/js/supersized-init.js"></script>
        <script src="/js/scripts.js"></script>

    </body>

</html>
