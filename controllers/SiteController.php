<?php
namespace app\controllers;

use app\models\CategoryForm;
use Yii;
use yii\web\Response;

class SiteController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $categoryForm = new CategoryForm();



        if($categoryForm->load(Yii::$app->request->post()) && $categoryForm->save()) {
            Yii::$app->session->setFlash('success', 'Операция выполнена успешно!');
            return $this->redirect('/');
        }


        return $this->render('index', [
            'categoryForm' => $categoryForm,
        ]);
    }

    public function actionPost()
    {
        // Получаем POST-данные
        $postData = \Yii::$app->request->getBodyParams();

        \Yii::$app->response->format = Response::FORMAT_JSON;
        return $postData;
    }

}
