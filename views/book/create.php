<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
?>

<h3>新增图书</h3>

<?php $form=ActiveForm::begin(); ?>
  <?= $form->field($model,'name')?>
  <?= $form->field($model,'author')?>
  <?= $form->field($model,'introduction')?>
  <?= $form->field($model,'price')?>
  <div class="form-group">
    <?= Html::submitButton('button',['class' => 'btn btn-primary']) ?>
  </div>
<?php ActiveForm::end(); ?>



