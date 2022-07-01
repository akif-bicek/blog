<?php

namespace app\controllers;

use app\models\LoginForm;
use Yii;
use app\models\User;
use yii\web\UploadedFile;

class AuthController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $request = Yii::$app->request;
        $user = new User();
        $user->load($request->post());

        if (!$user->validate())
        {
            //validation flush
        }


        $user->image = UploadedFile::getInstanceByName('image');

        $user->profile_photo = $user->upload();
        $user->email = $request->post('email');
        $user->name = $request->post('name');
        $user->password = md5($request->post('password'));

        if ($user->save(false))
        {
            echo 'okey';
            //giriş yapılacak
        }
    }

    public function actionIndex()
    {
        return $this->render('/site/auth/create');
    }

    public function actionLogin()
    {
        return $this->render('/site/auth/login');
    }

    public function actionProfile()
    {
        return $this->render('site/auth/update');
    }

    public function actionUpdate()
    {

    }

    public function actionAuth()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'email' => $model->email,
        ]);
    }

}
