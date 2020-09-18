<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "check_result".
 *
 * @property int $id
 * @property int $solution_id
 * @property int $correct_answer_id
 * @property int $answer
 * @property string $result
 * @property int $score
 *
 * @property CorrectAnswer $correctAnswer
 * @property Solution $solution
 */
class CheckResult extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'check_result';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['solution_id', 'correct_answer_id', 'answer', 'score'], 'integer'],
            [['result'], 'string', 'max' => 30],
            [['correct_answer_id'], 'exist', 'skipOnError' => true, 'targetClass' => CorrectAnswer::className(), 'targetAttribute' => ['correct_answer_id' => 'id']],
            [['solution_id'], 'exist', 'skipOnError' => true, 'targetClass' => Solution::className(), 'targetAttribute' => ['solution_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'solution_id' => 'Solution ID',
            'correct_answer_id' => 'Correct Answer ID',
            'answer' => 'Answer',
            'result' => 'Result',
            'score' => 'Score',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCorrectAnswer()
    {
        return $this->hasOne(CorrectAnswer::className(), ['id' => 'correct_answer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSolution()
    {
        return $this->hasOne(Solution::className(), ['id' => 'solution_id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\CheckResultQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\CheckResultQuery(get_called_class());
    }
}
