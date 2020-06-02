<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Autos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="autos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Marka')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Model')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'GodVipuska')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cvet')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Probeg')->textInput() ?>

    <?= $form->field($model, 'ObemDvigatelya')->textInput() ?>

    <?= $form->field($model, 'KolichLS')->textInput() ?>

    <?= $form->field($model, 'TipDvigatelya')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'TipKPP')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Cena')->textInput() ?>

    <?= $form->field($model, 'Nalichie')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
