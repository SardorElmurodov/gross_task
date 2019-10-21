<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Requests';
?>
<div class="insurance-type-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'request_id',
            'instype.name',
            'amount',
        ],
    ]); ?>


</div>
