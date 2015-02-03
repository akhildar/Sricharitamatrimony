<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/cus-plugins/jquery.bxslider/jquery.bxslider.min.js" type="text/javascript"></script>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/cus-plugins/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" type="text/css">



<style>
    .bx-wrapper .bx-viewport {
    box-shadow: none;
    border: none;
    left: -5px;
    background: none;
    transform: translateZ(0px);
}
.bx-wrapper .bx-prev,.bx-wrapper .bx-next {
    background: none;
    
}
#reg-container{
    position: absolute;
    top:170px;
    left: 150px;
}
input.span5{
    width: 206px;
    height:30px;
}
</style>

<ul class="bxslider">
  <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slider/4---Copy.jpg" /></li>
  <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slider/5---Copy.jpg" /></li>
</ul>
<script>
$(document).ready(function(){
  $('.bxslider').bxSlider({
          mode:'fade',
          auto:true
        });
});
</script>
<div class="container" id="reg-container">
    <div class="row">
        <div class="container">
        <div class="col-lg-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Register here 
                </div>
                <div class="panel-body">
                    <fieldset>
                   <?php $this->renderPartial('../sriUsersPrimeData/_form', array('model'=>$model)); ?>
                    </fieldset>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
