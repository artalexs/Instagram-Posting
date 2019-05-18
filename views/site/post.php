<?php

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>


        <p class="lead">Вы авторизованы в Instagram, <?=Yii::$app->user->identity->username; ?> !
        </p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>