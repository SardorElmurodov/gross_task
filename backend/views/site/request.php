<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Gross Insurance';

$this->registerJs("
  $('#submit').click(function(){
    var cost_amount = parseInt($('.current-cost').text()) * 2 / 4;

    $.ajax({
      type: 'POST',
      url: '" . Url::to(['site/request-save', 'insurance_id' => $insurance_id]) . "',  
      data: {'cost_amount': cost_amount}, 
      dataType: 'json',
      success: function(col) { console.log(12345); },
    });
  });
  
");
//if(isset($_POST['ad_id'])) var_dump(Yii::app()->request->getPost('ad_id'));

?>
  <div class="container mydiv">
    <div class="row">
      <div class="col-md-7">
        <div class="box rounded p5">
          <h4 class="title">Калькулятор полиса автострахования - AVTO VIP</h4>
          <form>
            <div class="form-group">
              <label for="avtomodel">Выберите модель автомобиля</label>
              <select class="form-control" id="avtomodel" name="avtomodel">
                <option>Nexia-3</option>
                <option>Lacetti</option>
                <option>Damas</option>
                <option>Matiz</option>
                <option>Cobalt</option>
              </select>
            </div>
            <div class="row p-15 mt-4 mb-4">
              <div class="del1"></div>
              <div class="dotdiv text-center"><span class="dot"></span></div>
              <div class="del1"></div>
            </div>
            <div class="form-group row mt-3">
              <div class="col-md-6">
                <label for="comp">Выберите комплектацию автомобиля</label>
                <select class="form-control" id="comp" name="comp">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="comp">Выберите год выпуска автомобиля</label>
                <select class="form-control" id="comp" name="comp">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
            </div>
            <div class="row p-15 mt-4 mb-4">
              <div class="del1"></div>
              <div class="dotdiv text-center"><span class="dot"></span></div>
              <div class="del1"></div>
            </div>
            <div class="mt-3">
              <label>Укажите рыночную стоимость автомобиля</label>
              <div class="row">
                <div class="col-md-6"><p class="text-primary min"></p></div>
                <div class="col-md-6"><p class="text-primary max text-right"></p></div>
                <div class="current-cost"></div>
              </div>
              <div id="cost-slide"></div>
            </div>
            <div class="row p-15 mt-4 mb-4">
              <div class="del1"></div>
              <div class="dotdiv text-center"><span class="dot"></span></div>
              <div class="del1"></div>
            </div>
            <div class="custom-control custom-checkbox my-1 mr-sm-2 mt-3">
              <input type="checkbox" class="custom-control-input" id="agree">
              <label class="custom-control-label" for="agree">Согласен с условиями <a href="#">публичной оферты</a> и <a href="#">правилами страхования</a></label>
            </div>
            <div class="mt-5"><button id="submit" type="button" class="btn btn-primary w-100">Оформить онлайн</button></div>
          </form>
		  
		  
        </div>
      </div>

      <div class="col-md-5">
        <div class="box rounded text-center">
          <h5>Стоимость полиса</h5>
          <h4 id="policy_cost_uz"></h4>
          <h4 id="policy_cost_usd"></h4>
        </div>
      </div>
    </div>
  </div>