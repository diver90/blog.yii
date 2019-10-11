<?php
/**
 * Created by PhpStorm.
 * User: MZavalniuk
 * Date: 09.10.2019
 * Time: 16:32
 */

namespace app\models;

use Yii;
use yii\base\Model;

class EditPostForm extends Model
{
    public $title;
    public $text;
    public $tag;
    public $author;

    public function rules()
    {
        return [
            [['title', 'text'], 'required', 'message' => 'Required'],
            ['title', 'string', 'min' => 5, 'max' => 255],
            ['text', 'string', 'min' => 120]
        ];
    }

    public function attributeLabels()
    {
        return [
            'title' => 'Enter post title:',
            'text' => 'Enter your text here:',
            'tag' => 'Tag your post:'
        ];
    }

}