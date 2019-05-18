<?php

 namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

 class Upload extends Model
 {
    public $image;
    public $description;
    public $username;

    public function rules()
    {
        return [
            [['description'], 'string'],
            [['image'], 'file', 'extensions' => 'png, jpg'],
        ];
    }


    public function upload()
    {
        if ($this->validate()) {
            $this->image->saveAs($this->getFolder() . $this->image->baseName . '.' . $this->image->extension);
            return true;
        } else {
            return false;
        }
    }

    
    public function saveImagedb()
    {
        if ($this->validate()){
            $post = new Post();
            $post->attributes = $this->attributes;
            $post->username = Yii::$app->user->identity->username;
            return $post->save();
        }
    }

    public function getFolder()
    {
        return Yii::getAlias('@web') . 'uploads/';
    }

    
    public function instaUpload($model)
    {
        $username = Yii::$app->user->identity->username; 
        $password = Yii::$app->user->identity->password; 
        $filename = Yii::getAlias('@web') . 'uploads/' . $model->image;
        $metadata = [
            'caption' => $model->description
        ];
        
        $debug = false;
        $truncatedDebug = false;

        \InstagramAPI\Instagram::$allowDangerousWebUsageAtMyOwnRisk = true;
        $ig = new \InstagramAPI\Instagram($debug, $truncatedDebug);

        try {
            $ig->login($username, $password);
        } catch (\Exception $e) {
            echo 'Something went wrong: '.$e->getMessage()."\n";
        }

        $photo = new \InstagramAPI\Media\Photo\InstagramPhoto($filename);
        $ig->timeline->uploadPhoto($photo->getFile(), $metadata);
    }
}