<?php

namespace frontend\controllers;

use Yii;

class SiteController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new \frontend\models\Folio();

        if ($model->load(Yii::$app->request->post())) 
        {
            $model->save();
            \Yii::$app->mailer->compose([
                'html'=>'contact-html', 'text'=> 'contact-text'], [
                    'owner'=> 'Morris',
                    'user'=> $model->name,
                    'subject'=> $model->subject,
                    'message'=> $model->message
                ])
            ->setFrom(\Yii::$app->params['senderEmail'])
            ->setTo($model->email)
            ->setSubject('You have new contact')
            ->send();
        }
        
        return $this->render('index', [
            'model' => $model,
        ]);
    }

    public function actionPortfoliodetails()
    {

        $this ->layout='auth';
        return $this->render('portfoliodetails');
    }
   
}
