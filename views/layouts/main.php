<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- Font Awesome -->
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
            rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
            rel="stylesheet"
    />
    <!-- MDB -->
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
            rel="stylesheet"
    />
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php
/*    NavBar::begin([
        'brandLabel' => 'Yii Blog',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-lg navbar-light bg-light fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Anasayfa', 'url' => ['/site/index']],
            ['label' => 'Hakkımızda', 'url' => ['/site/about']],
            ['label' => 'İletişim', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Giriş Yap', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                . Html::submitButton(
                    'Çıkış Yap (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            ),
            '<li> 
                <div class="row">
                    <div class="input-group justify-content-center align-items-center">
                        <div class="form-outline">
                            <input type="search" id="form1" class="form-control" />
                            <label class="form-label" for="form1">Ara</label>
                        </div>
                        <button type="button" class="btn btn-lg h-100 btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div> 
                </div>
             </li>',
        ],
    ]);
    NavBar::end();
    */?>
   <!-- --><?php
/*    NavBar::begin([
        'brandLabel' => 'Yii Blog',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-lg navbar-light bg-light fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [

        ],
    ]);
    NavBar::end();
    */?>
    <!-- Navbar Convert Will Be To Widget-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid justify-content-between">
            <!-- Left elements -->
            <div class="d-flex">
                <!-- Brand -->
                <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="#">
                    <img
                            src="https://www.yiiframework.com/image/design/logo/yii3_sign.svg"
                            height="20"
                            alt="Yii II Blog"
                            loading="lazy"
                            style="margin-top: 2px;"
                    />
                </a>

                <ul class="navbar-nav flex-row d-none d-md-flex">
                    <li class="nav-item me-3 me-lg-1 active">
                        <a class="nav-link" href="#">
                            <span><i class="fas fa-home fa-lg"></i></span>
                        </a>
                    </li>

                    <li class="nav-item me-3 me-lg-1">
                        <a class="nav-link" href="<?= route('auth', 'login'); ?>">
                            <span><i class="fas fa-sign-in-alt fa-lg"></i></span>
                        </a>
                    </li>

                    <li class="nav-item me-3 me-lg-1">
                        <a class="nav-link" href="<?= route('auth', 'index'); ?>">
                            <span><i class="fas fa-user-plus fa-lg"></i></span>
                        </a>
                    </li>

                    <li class="nav-item me-3 me-lg-1">
                        <a class="nav-link" href="">
                            <span><i class="fas fa-users fa-lg"></i></span>
                            <span class="badge rounded-pill badge-notification bg-danger">2</span>
                        </a>
                    </li>
                </ul>

            </div>
            <!-- Left elements -->

            <!-- Center elements -->
            <!-- Search form -->
            <form class="input-group w-auto my-auto d-none d-sm-flex ">
                <div class="row">
                    <div class="input-group justify-content-center align-items-center">
                        <div class="form-outline">
                            <input type="search" id="form1" class="form-control" />
                            <label class="form-label" for="form1">Ara</label>
                        </div>
                        <button type="submit" class="btn btn-lg h-100 btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <!-- Center elements -->

            <!-- Right elements -->
            <ul class="navbar-nav flex-row">

                <li class="nav-item me-3 me-lg-1">
                    <a class="nav-link" href="#">
                        <span><i class="fas fa-plus-circle fa-lg"></i></span>
                    </a>
                </li>
                <li class="nav-item dropdown me-3 me-lg-1">
                    <a
                            class="nav-link dropdown-toggle hidden-arrow"
                            href="#"
                            id="navbarDropdownMenuLink"
                            role="button"
                            data-mdb-toggle="dropdown"
                            aria-expanded="false"
                    >
                        <i class="fas fa-comments fa-lg"></i>

                        <span class="badge rounded-pill badge-notification bg-danger">6</span>
                    </a>
                </li>
                <li class="nav-item dropdown me-3 me-lg-1">
                    <a
                            class="nav-link align-items-sm-center  d-sm-flex dropdown-toggle hidden-arrow"
                            href="#"
                            id="navbarDropdownMenuLink"
                            role="button"
                            data-mdb-toggle="dropdown"
                            aria-expanded="false"
                    >
                        <img
                                src="https://mdbcdn.b-cdn.net/img/new/avatars/1.webp"
                                class="rounded-circle"
                                height="22"
                                alt="Black and White Portrait of a Man"
                                loading="lazy"
                        />
                        <strong class="d-none d-sm-block ms-1">John</strong>
                        <i class="fas fa-chevron-circle-down fa-lg ml-1"></i>
                    </a>
                    <ul
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="navbarDropdownMenuLink"
                    >
                        <li>
                            <a class="dropdown-item" href="#">Gönderilerim</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Aboneliklerim</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Profilim</a>
                        </li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <a class="dropdown-item" href="#">Çıkış Yap</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Right elements -->
        </div>
    </nav>
    <!-- Navbar -->
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-left">&copy; My Company <?= date('Y') ?></p>
        <p class="float-right"><?= Yii::powered() ?></p>
    </div>
</footer>
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"
></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
