<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $image
 * @property string $description
 * @property string $date
 * @property string $username
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['image'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'description' => 'Description',
            'date' => 'Date',
            'username' => 'Username',
        ];
    }

    public function getImage()
    {
        return $this->image = Yii::getAlias('@web') . 'uploads/' . Upload::upload();
    }
}
