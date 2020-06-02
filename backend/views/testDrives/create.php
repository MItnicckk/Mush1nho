<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\TestDrives */

$this->title = 'Create Test Drives';
$this->params['breadcrumbs'][] = ['label' => 'Test Drives', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-drives-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
