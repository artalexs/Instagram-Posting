<?php
use app\models\LoginForm;

$this->title = 'My Yii Application';
// \InstagramAPI\Instagram::$allowDangerousWebUsageAtMyOwnRisk = true;
// $username = $model->username;
// $password = $model->password;
// $debug = false;
// $truncatedDebug = false;

// $ig = new \InstagramAPI\Instagram($debug, $truncatedDebug);
// $ig->login($username, $password);
// $userId = $ig->people->getUserIdForName($username);
// ?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>


        <p class="lead">Вы авторизованы в Instagram, <?=Yii::$app->user->identity->username; ?> !
        </p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>