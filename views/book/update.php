<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
?>

<h3>编辑</h3>

<?php $form=ActiveForm::begin(); ?>
  <?= $form->field($model,'name')?>
  <?= $form->field($model,'author')?>
  <?= $form->field($model,'introduction')?>
  <?= $form->field($model,'price')?>
  <div class="form-group">
    <?= Html::submitButton('提交',['class' => 'btn btn-primary']) ?>
    <?= Html::submitButton('删除',['class' => 'btn btn-danger']) ?>
  </div>
<?php ActiveForm::end(); ?>