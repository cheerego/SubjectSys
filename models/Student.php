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
 * @property integer $isselect
 * @property integer $ispusher
 * @property integer $qq
 * @property integer $phone
 *
 * @property Subject[] $subjects
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
            [['num', 'isselect', 'qq', 'phone','ispusher'], 'integer'],
            [['pwd'], 'string', 'max' => 16],
            [['name'], 'string', 'max' => 255],
            [['num'], 'unique'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'num' => '学号',
            'pwd' => '密码',
            'name' => '姓名',
            'isselect' => 'Isselect',
            'qq' => 'QQ',
            'phone' => '电话',
            'ispusher'=>'Ispusher'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjects()
    {
        return $this->hasMany(Subject::className(), ['student_id' => 'id']);
    }
}
