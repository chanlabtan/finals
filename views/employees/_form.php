<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Departments;
use app\models\Designations;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

?>

<div class="employees-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'emp_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput() ?>

    <?= $form->field($model, 'manager_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'departments_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'designations_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <div class="alert alert-warning">
    <?= $form->errorSummary($model);?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
