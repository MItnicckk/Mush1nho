<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Employees */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employees-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Familiya')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Imya')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Otchet')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Dolshnost')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'NomerTel')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'DataUstroistva')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
