<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "msg".
 *
 * @property integer $id
 * @property string $content
 * @property string $html
 */
class Msg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'msg';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['html'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Content',
            'html'=>'Html'
        ];
    }
}
