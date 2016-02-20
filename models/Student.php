<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property integer $num
 * @property string $pwd
 * @property string $name
 * @property string $ispusher
 * @property integer $isselect
 * @property integer $qq
 * @property string $phone
 * @property integer $teacher_id
 *
 * @property Pusher $pusher
 * @property Subject $subject
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['num', 'isselect', 'qq', 'teacher_id'], 'integer'],
            [['pwd'], 'string', 'max' => 16],
            [['name', 'ispusher'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 11],
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
            'num' => 'Num',
            'pwd' => 'Pwd',
            'name' => 'Name',
            'ispusher' => 'Ispusher',
            'isselect' => 'Isselect',
            'qq' => 'Qq',
            'phone' => 'Phone',
            'teacher_id' => 'Teacher ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPusher()
    {
        return $this->hasOne(Pusher::className(), ['student_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(Subject::className(), ['student_id' => 'id']);
    }
}
