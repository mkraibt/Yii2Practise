<?php

namespace app\models;

use Yii;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "blogs".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $body
 * @property string|null $image
 * @property int|null $category
 * @property int|null $status
 * @property string $slug
 * @property int $created_by
 * @property string|null $created_at
 * @property int $updated_at
 */
class Blogs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blogs';
    }

    public function behaviors()
    {
        return [
            [
                'class' =>  SluggableBehavior::className(),
                'attribute' => 'title',
                'ensureUnique' => true
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['body'], 'string'],
            [['category', 'status', 'created_by', 'updated_at'], 'integer'],
            [['slug', 'created_by', 'body', 'title','status','image'], 'required'],
            [['created_at','updated_at'], 'safe'],
            [['title', 'slug'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions'=>'jpg,png,gif','maxFiles'=>3]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'body' => 'Body',
            'image' => 'Image',
            'category' => 'Category',
            'status' => 'Status',
            'slug' => 'Slug',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id'=> 'created_by']);
    }
}
