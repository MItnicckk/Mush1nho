<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\winners */

$this->title = 'Создать запись';
$this->params['breadcrumbs'][] = ['label' => 'Победители страница', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="winners-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
