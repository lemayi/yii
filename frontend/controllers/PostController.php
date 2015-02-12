<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class PostController extends Controller
{

    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }

}