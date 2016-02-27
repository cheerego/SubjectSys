<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "relative".
 *
 * @property integer $id
 * @property integer $student_id
 * @property integer $teacher_id
 *
 * @property Student $student
 * @property Teacher $teacher
 */
class Relative extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'relative';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'teacher_id'], 'required'],
            [['student_id', 'teacher_id'], 'integer'],
            [['student_id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_id' => 'Student ID',
            'teacher_id' => 'Teacher ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'student_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teacher::className(), ['id' => 'teacher_id']);
    }
}
