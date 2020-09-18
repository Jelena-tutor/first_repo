<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "solution".
 *
 * @property int $id
 * @property int $task_id
 * @property int $studying_id
 * @property string $solution
 * @property string $time_to_send
 * @property int $created_at
 *
 * @property CheckResult[] $checkResults
 * @property Task $task
 * @property Studying $studying
 */
class Solution extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'solution';
    }
    public function behaviors()
    {
        return[
            TimestampBehavior::className(),

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'task_id', 'studying_id', 'solution', 'time_to_send'], 'required'],
            [['id', 'task_id', 'studying_id', 'created_at'], 'integer'],
            [['time_to_send'], 'safe'],
            [['solution'], 'string', 'max' => 5000],
            [['id'], 'unique'],
            [['task_id'], 'exist', 'skipOnError' => true, 'targetClass' => Task::className(), 'targetAttribute' => ['task_id' => 'id']],
            [['studying_id'], 'exist', 'skipOnError' => true, 'targetClass' => Studying::className(), 'targetAttribute' => ['studying_id' => 'id']],
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
            'studying_id' => 'Studying ID',
            'solution' => 'Solution',
            'time_to_send' => 'Time To Send',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */


    public function getCheckResults()
    {
        return $this->hasMany(CheckResult::className(), ['solution_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTask()
    {
        return $this->hasOne(Task::className(), ['id' => 'task_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudying()
    {
        return $this->hasOne(Studying::className(), ['id' => 'studying_id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\SolutionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\SolutionQuery(get_called_class());
    }
}
