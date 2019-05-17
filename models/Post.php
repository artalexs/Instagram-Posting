<?php

namespace app\models;

use Yii;


/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $image
 * @property string $description
 * @property string $date
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
            [['date'], 'safe'],
            [['image'], 'string', 'max' => 255],
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
        ];
    }
}
