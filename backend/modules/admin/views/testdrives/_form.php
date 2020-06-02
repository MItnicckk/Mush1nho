<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Testdrives */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="testdrives-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idAuto')->textInput() ?>

    <?= $form->field($model, 'DataProvedeniya')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
