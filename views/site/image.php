<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Upload */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Create post';
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    // $username = app\models\User::find()->select(['username'])->asArray()->one(); ?>
    
    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'description')->textInput() ?>

    <!-- <?= $form->field($model, 'date')->widget(\yii\jui\DatePicker::className(), [
        'dateFormat' => 'yyyy-MM-dd чч:мм:сс'
    ]) ?> -->

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>