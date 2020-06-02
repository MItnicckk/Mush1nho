<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\winners */

$this->params['breadcrumbs'][] = ['label' => 'Победители страница', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="winners-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'Date',
            'Headline:ntext',
            'Text1:ntext',
            'Litle:ntext',
            'L1place',
            'L2place',
            'L3place',
            'Average:ntext',
            'A1place',
            'A2place',
            'A3place',
            'Big:ntext',
            'B1place',
            'B2place',
            'B3place',
            'Text2:ntext',
            'Text3:ntext',
            'T1place',
            'T2place',
            'T3place',
            'Text4:ntext',
            'Images',
        ],
    ]) ?>

</div>
