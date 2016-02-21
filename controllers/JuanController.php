<?php

namespace app\controllers;

use yii\web\Controller;

class JuanController extends Controller
{
	public function actionMyLend()
	{
		$lendContent = file_get_contents("http://124.160.64.127:8080/sms/opac/user/lendStatus.action?xc=3&sn=F9A80C19E2E0007C75CECFC183EB2B52F1BB61E2C9484C1C94B4446BF933933D24202946A092703474BC17903E70F4CDABF8C674B3E2C21EECCA609B150B98A6");
		return $this->render("my-lend", [
			'content' => $lendContent
		]);
	}
}
