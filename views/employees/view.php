<?php
use yii\widgets\DetailView;
use yii\helpers\Html;

$this->title = "Employees: $model->first_name";
$this->params['breadcrumbs'][] = ['label'=>'Employees', 'url'=>['/employees/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title; ?></h1>
<p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this employees?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'departments_id',
        'designations_id',
        'emp_code',
        'first_name',
        'last_name',
        'email',
        'manager_id',
        'address'
    ]
]);