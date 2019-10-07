<?php
use yii\helpers\Html;

/**
 * @var $content
 */

$this->title = $content->title;
$this->params['breadcrumbs'][] = $this->title;
print_r($content);
?>
<div class="post-view">
    <h1><?= Html::encode($this->title) ?></h1>


</div>

