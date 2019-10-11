<?php
/**
 * Created by PhpStorm.
 * User: MZavalniuk
 * Date: 07.10.2019
 * Time: 14:07
 */

namespace app\controllers;

use app\models\EditPostForm;
use Yii;
use app\models\Post;
use yii\data\Pagination;
use yii\web\Controller;

class PostController extends Controller
{
    /**
     * return single post
     * @return string
     *
     */
    public function actionView()
    {

        $postId = Yii::$app->request->get('postId');
        //print_r($postId);
        $content = Post::findOne($postId);

        return $this->render('view', compact(
                'content',
                'postId'
            )
        );
    }

    /**
     * @return string
     */
    public function actionBlog()
    {
        $query = Post::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $content = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('blog', compact(
            'content',
            'pagination'
            )
        );

    }

    public function actionAddPost ()
    {
        $model = new Post();

        $editForm = new EditPostForm();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'postId' => $model->id]);
        } else {
            return $this->render('addpost', compact('model', 'editForm'));
        }

    }
}