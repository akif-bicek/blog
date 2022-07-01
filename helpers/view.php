<?php
use yii\helpers\Url;

function route($controller, $action)
{
    return Url::to([$controller . '/' . $action]);
}

function isAuth()
{
    return !Yii::$app->user->isGuest;
}