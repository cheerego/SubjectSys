<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ChooseteacherForm extends Model
{
    public $id;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
//            // name, email, subject and body are required
//            [['name', 'email', 'subject', 'body'], 'required'],
//            // email has to be a valid email address
//            ['email', 'email'],
//            // verifyCode needs to be entered correctly
//            ['verifyCode', 'captcha'],
            ['id','required']
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'id'=>'ID',
            'verifyCode' => 'Verification Code',
        ];
    }


}
