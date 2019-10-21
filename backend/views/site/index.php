<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Gross Insurance';
?>
<div class="container mydiv">
    <div class="row">
	  <?php foreach($insurances as $i): ?>
      <div class="col-md-4">
        <div class="box rounded">
          <div class="box-header row">
            <div class="col-md-6"><h3><i class="fa fa-car"></i></h3></div>
            <div class="col-md-6 text-right"><span class="percent text-left"><?=$i->percent?>%</span></div>
          </div>
          <div class="box-body">
            <h4><?=$i->name?></h4>
            <p><?=$i->description?></p>
            <?=Html::a('Купить онлайн', ['site/request', 'insurance_id' => $i->id])?>
          </div>
        </div>
      </div>
	  <?php endforeach; ?>

    </div>
  </div>