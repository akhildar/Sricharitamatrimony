<?php
/* @var $this SriUsersPrimeDataController */
/* @var $model SriUsersPrimeData */
/* @var $form TbActiveForm */
?>
<?php Yii::app()->bootstrap->register(); ?>
<div class="form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'layout' => TbHtml::FORM_LAYOUT_INLINE,
        'id' => 'sri-users-prime-data-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => true,
        'action' => Yii::app()->createUrl('sriUsersPrimeData/create')
    ));
    ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>


    <div class="row">
        <div class="col-md-5">
            <?php echo $form->textFieldControlGroup($model, 'first_name', array('span' => 5, 'maxlength' => 200)); ?>
        </div>
        <div class="col-md-1">

        </div>
        <div class="col-md-5">
            <?php echo $form->textFieldControlGroup($model, 'Last_name', array('span' => 5, 'maxlength' => 200)); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <?php echo $form->textFieldControlGroup($model, 'email', array('span' => 5, 'maxlength' => 200)); ?>
        </div>
        <div class="col-md-1">

        </div>
        <div class="col-md-5">
            <?php echo $form->passwordFieldControlGroup($model, 'password', array('span' => 5, 'maxlength' => 200)); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <div class="control-group">
                <?php
                echo $form->labelEx($model, 'date_of_birth',array('lable'=>'*'));
                //echo $form->textFieldControlGroup($model,'date_of_birth',array('span'=>5)); 
                ?>
                
                <div class="controls">
                    <?php
                    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                        'name' => 'SriUsersPrimeData[date_of_birth]',
                        'id' => CHtml::getIdByName(get_class($model) . '[date_of_birth]'),
                        'attribute' => 'date_of_birth',
                        'value' => $model->date_of_birth,
                        // additional javascript options for the date picker plugin
                        'options' => array(
                            'showAnim' => 'fold',
                            'mode' => 'focus'
                        ),
                        'htmlOptions' => array(
                            'style' => 'height:30px;',
                            'class' => 'date span5',
                        ),
                    ));
                    ?>
                </div>
            </div>
            <?php echo $form->error($model, 'date_of_birth', array('style' => 'color:#B94A48;')); ?>
        </div>
        <div class="col-md-1">

        </div>
        <div class="col-md-5">
            <?php echo $form->textFieldControlGroup($model, 'religion', array('span' => 5, 'maxlength' => 100)); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <?php echo $form->textFieldControlGroup($model, 'mother_tongue', array('span' => 5, 'maxlength' => 100)); ?>
        </div>
        <div class="col-md-1">

        </div>
        <div class="col-md-5">
            <?php echo $form->textFieldControlGroup($model, 'mobile_no', array('span' => 5)); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <?php echo $form->radioButtonListControlGroup($model, 'gender', array('Male' => 'Male', 'Female' => 'Female')); ?>
        </div>
        <div class="col-md-1">

        </div>
        <div class="col-md-5">
            <?php
            echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array(
                'color' => TbHtml::BUTTON_COLOR_SUCCESS,
                'size' => TbHtml::BUTTON_SIZE_DEFAULT,
            ));
            ?>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->