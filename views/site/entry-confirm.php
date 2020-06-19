<?php 
use yii\helpers\Html;
?>

<p>You have entered the following information:</p>
<ul>
  <li><label for="">name：</label><?= Html::encode($model-> name)?></li>
  <li><label for="">email：</label><?= Html::encode($model-> email)?></li>
</ul>