<?php
use yii\helpers\Html;

/**
 * @var $content
 */

$this->title = $content->title;
$this->params['breadcrumbs'][] = $this->title;
//print_r($content);


?>
<div class="post-view">


    <article class="post">
        <h1><?= Html::encode($this->title) ?></h1>
        <div class="tag">
            <?= Html::encode($content->tag) ?>
        </div>
        <div class="author">
            <?= Html::encode($content->author) ?>
        </div>
        <div class="article-text">
            <?= Html::encode($content->text) ?>
        </div>

    </article>


</div>

