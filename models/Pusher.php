<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pusher".
 *
 * @property integer $id
 * @property integer $student_id
 * @property integer $teacher_id
 */
class Pusher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pusher';
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
}
