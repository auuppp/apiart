<?php
/**
 * @Author: Dzer <Email:d20053140@gmail.com Blog:dzer.me>
 * @Date:   2015-11-28 16:28:27
 * @Last Modified by:   Dzer
 * @Last Modified time: 2015-11-28 16:46:06
 */

namespace frontend\controllers;

use yii\web\Controller;

class IndexController extends Controller {

	public function actionIndex($message = null){
		return $this->render('index', ['message' => $message]);
	}
}
