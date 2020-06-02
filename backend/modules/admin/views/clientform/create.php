<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Clientform */

$this->title = 'Create Clientform';
$this->params['breadcrumbs'][] = ['label' => 'Clientforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clientform-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
