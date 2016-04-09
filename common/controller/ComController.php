<?php
namespace common\controllers;

class ComController extends Controller
{
	function actionError()
	{
		return $this->render('@common/views/404.php');
	}
}