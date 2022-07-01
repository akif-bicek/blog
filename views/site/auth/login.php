<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use app\models\User;

$this->title = 'Giriş Yap';
$this->params['breadcrumbs'][] = $this->title;
$model = new User();
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="<?= route('auth', 'create'); ?>" method="post" enctype="multipart/form-data">
                <p>
                    Giriş İçin Lütfen Aşağıdaki Formu Doldurunuz
                </p>
                <div class="form-outline mb-4">
                    <input required name="email" type="email" id="form3Example3" class="form-control" />
                    <label class="form-label" for="form3Example3">E-Posta</label>
                </div>
                <div class="form-outline mb-4">
                    <input required name="password" type="password" id="form3Example4" class="form-control" />
                    <label class="form-label" for="form3Example4">Parola</label>
                </div>
                <div class="form-check mt-1">
                    <input name="remember_me" class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                    <label class="form-check-label" for="form1Example3"> Beni Hatırla </label>
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-4 mt-3">Kayıt Ol</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>




<?php /*$form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
            'inputOptions' => ['class' => 'col-lg-3 form-control'],
            'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
        ],
    ]); */?><!--

        <?/*= $form->field($model, 'email')->textInput(['autofocus' => true]) */?>

        <?/*= $form->field($model, 'password')->passwordInput() */?>

        <div class="form-group">
            <div class="offset-lg-1 col-lg-11">
                <?/*= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) */?>
            </div>
        </div>

    --><?php /*ActiveForm::end(); */?>