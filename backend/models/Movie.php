<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "movies".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $content
 * @property int $view
 */
class Movie extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'content', 'view'], 'required'],
            [['content'], 'string'],
            [['view'], 'integer'],
            [['name', 'description'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'content' => 'Content',
            'view' => 'View',
        ];
    }
}
