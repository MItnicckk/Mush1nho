<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\about */

$this->params['breadcrumbs'][] = ['label' => 'Об организации страница', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="about-view">

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
            'text1:ntext',
            'text2:ntext',
            'text3:ntext',
            'text4:ntext',
            'text5:ntext',
            'text6:ntext',
            'Name1',
            'InfoName1:ntext',
            'Name2',
            'InfoName2:ntext',
            'contact1',
            'contact2',
            'contact3',
        ],
    ]) ?>

</div>
