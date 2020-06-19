<?php 
use yii\helpers\Html;

$this->title = 'Books';
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
?>
<h1><?= Html::encode($model->name)?></h1>
<p>作者：<?= Html::encode($model->author)?></p>
<p>简介：<?= Html::encode($model->introduction)?></p>
<p>售价：¥<?= Html::encode($model->price)?></p>