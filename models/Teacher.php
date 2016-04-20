<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property integer $id
 * @property integer $num
 * @property string $pwd
 * @property string $name
 * @property integer $phonenum
 * @property string $qq
 * @property string $email
 * @property integer $qqgroup
 * @property integer $current
 * @property integer $total
 * @property Pusher[] $pushers
 * @property Subject[] $subjects
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['num', 'pwd','current', 'total'], 'required'],
            [['num', 'phonenum', 'qqgroup', 'current', 'total'], 'integer'],
            [['pwd', 'name', 'qq', 'email'], 'string', 'max' => 255],
            [['num'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'num' => '老师编号',
            'pwd' => '密码',
            'name' => '姓名',
            'phonenum' => '手机号',
            'qq' => 'QQ',
            'email' => 'Email',
            'qqgroup' => 'QQ群',
            'current' => '当前收录人数',
            'total' => '总收录人数',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPushers()
    {
        return $this->hasMany(Pusher::className(), ['teacher_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjects()
    {
        return $this->hasMany(Subject::className(), ['teacher_id' => 'id']);
    }
}
