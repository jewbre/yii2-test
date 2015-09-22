<?php
/**
 * Created by PhpStorm.
 * User: Vilim Stubièan
 * Date: 22.9.2015.
 * Time: 22:09
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Status;

class StatusController extends Controller
{
    public function actionCreate()
    {
        $model = new Status;

        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->render('view', array('model' => $model));
        } else {
            return $this->render('create', array('model' => $model));
        }
    }
}