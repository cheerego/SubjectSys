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
 *
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
            [['num', 'pwd'], 'required'],
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
            'num' => 'Num',
            'pwd' => 'Pwd',
            'name' => 'Name',
            'phonenum' => 'Phonenum',
            'qq' => 'Qq',
            'email' => 'Email',
            'qqgroup' => 'Qqgroup',
            'current' => 'Current',
            'total' => 'Total',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjects()
    {
        return $this->hasMany(Subject::className(), ['teacher_id' => 'id']);
    }
}
