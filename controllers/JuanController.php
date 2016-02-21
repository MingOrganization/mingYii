<?php

namespace app\controllers;

use yii\web\Controller;

class JuanController extends Controller
{
	public function actionMyLend()
	{
		$lendContent = "fsfsfs";
		return $this->render("my-lend", [
			'content' => $lendContent
		]);
	}
}
