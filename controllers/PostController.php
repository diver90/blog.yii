<?php
/**
 * Created by PhpStorm.
 * User: MZavalniuk
 * Date: 07.10.2019
 * Time: 14:07
 */

namespace app\controllers;

use Yii;
use app\models\Post;
use yii\web\Controller;

class PostController extends Controller
{
    public function actionView()
    {

        $postId = Yii::$app->request->get('postId');
        //print_r($postId);
        $content = Post::findOne($postId);

        return $this->render('view', [
            'content' => $content,
            'postId' => $postId
        ]);
    }
}