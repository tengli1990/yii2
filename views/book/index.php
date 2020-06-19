<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$dataProvider->pagination->defaultPageSize = 10;
?>

<?= Html::a("新增图书", ['create'], ['class' => 'btn btn-success']) ?>

<div class="table" style="margin-top:10px;">
  <?= GridView::widget([
    'dataProvider' => $dataProvider,
    // 'filterModel' => $searchModel,
    'columns' => [
      ['class' => 'yii\grid\SerialColumn'],
      'name',
      'author',
      'introduction',
      'price',
      ['class' => 'yii\grid\ActionColumn'],
    ],
  ]); ?>
</div>