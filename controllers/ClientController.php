<?php

namespace app\controllers;

use app\models\Client;
use yii\web\Controller;

class ClientController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', [
            'clients' => Client::find()->all()
        ]);
    }

}
