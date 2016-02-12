<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $html
 * @property integer $student_id
 * @property integer $teacher_id
 * @property string $update_time
 *
 * @property Student $student
 * @property Teacher $teacher
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content', 'html'], 'string'],
            [['student_id', 'teacher_id'], 'integer'],
            [['update_time'], 'safe'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'html' => 'Html',
            'student_id' => 'Student ID',
            'teacher_id' => 'Teacher ID',
            'update_time' => 'Update Time',
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
