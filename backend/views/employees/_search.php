<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\EmployeesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employees-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Familiya') ?>

    <?= $form->field($model, 'Imya') ?>

    <?= $form->field($model, 'Otchet') ?>

    <?= $form->field($model, 'Dolshnost') ?>

    <?php // echo $form->field($model, 'Address') ?>

    <?php // echo $form->field($model, 'NomerTel') ?>

    <?php // echo $form->field($model, 'DataUstroistva') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
