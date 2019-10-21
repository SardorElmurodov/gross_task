<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\InsuranceTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Insurance Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="insurance-type-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Insurance Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'description:ntext',
            'percent',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
