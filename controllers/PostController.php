<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use app\models\User;
use app\models\LoginForm;
use app\models\SignupForm;
use app\controllers\SiteController;

class PostController extends Controller
{
    public function actionPost()
        {                
            \InstagramAPI\Instagram::$allowDangerousWebUsageAtMyOwnRisk = true;
            $username = '';
            $password = '';
            $debug = false;
            $truncatedDebug = false;
            
            $ig = new \InstagramAPI\Instagram($debug, $truncatedDebug);
    
            try {
                $ig->login($username, $password);
            } catch (\Exception $e) {
                echo 'Something went wrong: '.$e->getMessage()."\n";
                exit(0);
            }
    
            $this->render('post', [
                'model'=>$ig
                ]);
        }

}
