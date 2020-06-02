<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ELFinder;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\news */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Headline')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Images')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Description')->widget(CKEditor::className(), [
  'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
                    ]); ?>


    <?= $form->field($model, 'Date')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
