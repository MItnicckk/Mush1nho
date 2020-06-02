<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Reserve */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reserve-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idClienta')->textInput() ?>

    <?= $form->field($model, 'idAuto')->textInput() ?>

    <?= $form->field($model, 'DataReserva')->textInput() ?>

    <?= $form->field($model, 'DaraOkonchReserva')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
