<?php

namespace frontend\controllers;

use yii\web\Controller;

/**
 * 首页控制器
 * 
 * @author dzer
 * @version 1.0
 */
class IndexController extends Controller {

    /**
     * 显示首页页面
     * @param  string $message 
     * @return mixed
     */
    public function actionIndex($message = null) {
        return $this->render('index', ['message' => $message]);
    }
    
    /**
     * [actionMessage description]
     * @return [type] [description]
     */
    public function actionMessage() {
    	echo 'ss';
    }

}
