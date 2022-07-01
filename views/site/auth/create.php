<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Kayıt Ol';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h4><?= Html::encode($this->title) ?></h4>


    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="<?= route('auth', 'create'); ?>" method="post" enctype="multipart/form-data">
                <input id="form-token" type="hidden" name="<?=Yii::$app->request->csrfParam?>"
                       value="<?=Yii::$app->request->csrfToken?>"/>
                <p>
                    Sistemimize kayıt olmak lütfen aşağıdaki formu doldurunuz
                </p>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="form mb-4">
                    <label class="form-label" for="customFile">Profil Fotoğrafı</label>
                    <input type="file" name="image" class="form-control" id="customFile" />
                </div>

                <div class="form-outline mb-4">
                    <input required name="name" type="text" id="form3Example1" class="form-control" />
                    <label class="form-label" for="form3Example1">İsim Soyisim</label>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input required name="email" type="email" id="form3Example3" class="form-control" />
                    <label class="form-label" for="form3Example3">E-Posta Hesabı</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input required name="password" type="password" id="form3Example4" class="form-control" />
                    <label class="form-label" for="form3Example4">Parola</label>
                </div>

                <div class="form-outline mb-4">
                    <input required name="password_confirmation" type="password" id="form3Example4" class="form-control" />
                    <label class="form-label" for="form3Example4">Parola Doğrulama</label>
                </div>

                <button type="submit" class="btn btn-primary btn-block mb-4">Kayıt Ol</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>

</div>
