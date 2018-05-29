<?php 

use yii\helpers\Html;


$this->title = "Employees";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create Employees', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Address</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->first_name, ['/employees/view', 'id'=>$model->id]); ?>
        </td>  
        <td><?= $model->first_name ?></td>
        <td><?= $model->last_name ?></td>
        <td><?= $model->email ?></td>
        <td><?= $model->address ?></td>
    </tr>
    
    <?php endforeach; ?>
</table>
