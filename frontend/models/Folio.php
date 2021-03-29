<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "folio".
 *
 * @property int $folioId
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $message
 */
class Folio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'folio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'subject', 'message'], 'required'],
            [['name', 'email', 'subject'], 'string', 'max' => 100],
            [['message'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'folioId' => 'Folio ID',
            'name' => 'Name',
            'email' => 'Email',
            'subject' => 'Subject',
            'message' => 'Message',
        ];
    }
}
