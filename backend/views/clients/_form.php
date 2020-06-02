<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Clients */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clients-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Familiya')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Imya')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Otchectvo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Telefon')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
