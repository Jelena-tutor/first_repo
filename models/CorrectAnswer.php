<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "correct_answer".
 *
 * @property int $id
 * @property int $task_id
 * @property int $input_1
 * @property int $input_2
 * @property int $input_3
 * @property int $correct_answer
 *
 * @property CheckResult[] $checkResults
 * @property Task $task
 */
class CorrectAnswer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'correct_answer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'task_id', 'input_1', 'input_2', 'correct_answer'], 'required'],
            [['id', 'task_id', 'input_1', 'input_2', 'input_3', 'correct_answer'], 'integer'],
            [['id'], 'unique'],
            [['task_id'], 'exist', 'skipOnError' => true, 'targetClass' => Task::className(), 'targetAttribute' => ['task_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'task_id' => 'Task ID',
            'input_1' => 'Input 1',
            'input_2' => 'Input 2',
            'input_3' => 'Input 3',
            'correct_answer' => 'Correct Answer',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCheckResults()
    {
        return $this->hasMany(CheckResult::className(), ['correct_answer_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTask()
    {
        return $this->hasOne(Task::className(), ['id' => 'task_id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\CorrectAnswerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\CorrectAnswerQuery(get_called_class());
    }
}
