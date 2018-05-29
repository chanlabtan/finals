<?php 

use yii\helpers\Html;


$this->title = "Designations";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create Designations', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
        <th>Designation</th>
        <th>Description</th>       
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->designation, ['/designations/view', 'id'=>$model->id]); ?>
        </td>  
        <td><?= $model->description ?></td>        
    </tr>
    <?php endforeach; ?>
</table>
