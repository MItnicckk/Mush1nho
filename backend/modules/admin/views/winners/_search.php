<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\WinnersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="winners-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Date') ?>

    <?= $form->field($model, 'Headline') ?>

    <?= $form->field($model, 'Text1') ?>

    <?= $form->field($model, 'Litle') ?>

    <?php // echo $form->field($model, 'L1place') ?>

    <?php // echo $form->field($model, 'L2place') ?>

    <?php // echo $form->field($model, 'L3place') ?>

    <?php // echo $form->field($model, 'Average') ?>

    <?php // echo $form->field($model, 'A1place') ?>

    <?php // echo $form->field($model, 'A2place') ?>

    <?php // echo $form->field($model, 'A3place') ?>

    <?php // echo $form->field($model, 'Big') ?>

    <?php // echo $form->field($model, 'B1place') ?>

    <?php // echo $form->field($model, 'B2place') ?>

    <?php // echo $form->field($model, 'B3place') ?>

    <?php // echo $form->field($model, 'Text2') ?>

    <?php // echo $form->field($model, 'Text3') ?>

    <?php // echo $form->field($model, 'T1place') ?>

    <?php // echo $form->field($model, 'T2place') ?>

    <?php // echo $form->field($model, 'T3place') ?>

    <?php // echo $form->field($model, 'Text4') ?>

    <?php // echo $form->field($model, 'Images') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
