<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<?php $form = ActiveForm::begin(); ?>
  <?= $form -> field($model,'name'); ?>
  <?= $form -> field($model,'email'); ?>

  <div class="form-group">
   <?= Html::submitButton('button',['class' => 'btn btn-primary']) ?>
  </div>
<?php ActiveForm::end(); ?>