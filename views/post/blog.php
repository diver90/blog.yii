<?php
 use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;
/**
 * @var $content
 * @var $pagination
 */

$this->title = 'Blog by alone Bloger from Republic of Zimbabwe';
$this->params['breadcrumbs'][] = $this->title;

?>

<h1><?= Html::encode($this->title) ?></h1>

<?php foreach ($content as $post): ?>

    <div class="post-short">
        <article class="post">
            <h2><?= Html::encode($post->title) ?></h2>
            <div class="tag">
                <?= Html::encode($post->tag) ?>
            </div>
            <div class="author">
                <?= Html::encode($post->author) ?>
            </div>
            <div class="article-text">
                <?= Html::encode($post->text) ?>
            </div>
        </article>
    <a class="btn btn-lg btn-success" href="<?= Url::toRoute(['post/view', 'postId' => $post->id]);?>">View Full</a>
    </div>
<?php endforeach; ?>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
