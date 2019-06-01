<?php

use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>
        <?php if(Yii::$app->user->isGuest): ?>
            <p><?= Html::a('Login', ['site/login'], ['class' => 'btn btn-lg btn-success']) ?>
            or
            <?= Html::a('Signup', ['site/signup'], ['class' => 'btn btn-lg btn-success']) ?></p>
        <?php else:?>
            <p><?= Html::a('Create a post', ['site/image'], ['class' => 'btn btn-lg btn-success']) ?></p>
        <?php endif?>
    </div>

</div>
