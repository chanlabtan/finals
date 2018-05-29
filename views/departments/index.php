<?php 

use yii\helpers\Html;


$this->title = "Departments";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create Departments', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
        <th>Department Name</th>
        <th>Description</th>        
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->department_name, ['/departments/view', 'id'=>$model->id]); ?>
        </td>  
        <td><?= $model->description ?></td>       
    </tr>
    <?php endforeach; ?>
</table>
