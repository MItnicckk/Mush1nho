<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\winners */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="winners-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Headline')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Text1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Litle')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'L1place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'L2place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'L3place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Average')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'A1place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'A2place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'A3place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Big')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'B1place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'B2place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'B3place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Text2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Text3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'T1place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'T2place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'T3place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Text4')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Images')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
