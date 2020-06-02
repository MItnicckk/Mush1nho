<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\TradeIn */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trade-in-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'SdavaemieAuto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'idProdashiAuto')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
