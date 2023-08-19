<?php

namespace frontend\modules\settings\models;

use Yii;

/**
 * This is the model class for table "movies".
 *
 * @property int $id
 * @property int $categories_category_id
 * @property string $name
 * @property string $description
 * @property string $content
 * @property int $view
 * @property string|null $date_time
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
            [['categories_category_id', 'name', 'description', 'content', 'view'], 'required'],
            [['categories_category_id', 'view'], 'integer'],
            [['content'], 'string'],
            [['date_time'], 'safe'],
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
            'categories_category_id' => 'Categories Category ID',
            'name' => 'Name',
            'description' => 'Description',
            'content' => 'Content',
            'view' => 'View',
            'date_time' => 'Date Time',
        ];
    }
}
