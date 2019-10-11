<?php

/**
 * @var $model
 * @var $editForm
 */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Add post';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="post-edit">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to register:</p>


    <?php
    $form = ActiveForm::begin([
        'id' => 'post',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <?= $form->field($editForm, 'title')->textInput() ?>

    <?= $form->field($editForm, 'text')->textarea() ?>

    <?= $form->field($editForm, 'tag')->textInput() ?>


    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Save Post', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
