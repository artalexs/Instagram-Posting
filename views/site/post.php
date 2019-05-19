<?php


use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

$this->title = 'List of my posts';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>
        <p class="lead">Вы авторизованы в Instagram, <?=Yii::$app->user->identity->username; ?> !
        </p>

        <?php
                
        $dataProvider = new ActiveDataProvider([
            'query' => app\models\Post::find()->where(['username'=>Yii::$app->user->identity->username])->all(),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
        echo GridView::widget([
            'dataProvider' => $dataProvider,
        ]);
        ?>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>