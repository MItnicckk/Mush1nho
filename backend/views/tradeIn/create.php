<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\TradeIn */

$this->title = 'Create Trade In';
$this->params['breadcrumbs'][] = ['label' => 'Trade Ins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trade-in-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
