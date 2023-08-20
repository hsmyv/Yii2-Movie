<?php

namespace frontend\models;

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
 */
class Movie extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $file;
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
            [['categories_category_id', 'name', 'description', 'content',], 'required'],
            [['categories_category_id'], 'integer'],
            [['content'], 'string'],
            [['file'], 'file'],
            // [['view'], 'integer'],
            [['name', 'description', 'logo'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'categories_category_id' => 'Category Name',
            'name' => 'Name',
            'description' => 'Description',
            'content' => 'Content',
            'file'  => 'logo',
            // 'view' => 'View',
        ];
    }


    public function getCategoriesCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'categories_category_id']);
    }
}
