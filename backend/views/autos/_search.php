<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\AutosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="autos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Marka') ?>

    <?= $form->field($model, 'Model') ?>

    <?= $form->field($model, 'GodVipuska') ?>

    <?= $form->field($model, 'Cvet') ?>

    <?php // echo $form->field($model, 'Probeg') ?>

    <?php // echo $form->field($model, 'ObemDvigatelya') ?>

    <?php // echo $form->field($model, 'KolichLS') ?>

    <?php // echo $form->field($model, 'TipDvigatelya') ?>

    <?php // echo $form->field($model, 'TipKPP') ?>

    <?php // echo $form->field($model, 'Cena') ?>

    <?php // echo $form->field($model, 'Nalichie') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
