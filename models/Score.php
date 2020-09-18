<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "score".
 *
 * @property int $id
 * @property int $task_id
 * @property int $studying_id
 * @property int $points
 *
 * @property Task $task
 * @property Studying $studying
 */
class Score extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'score';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'task_id', 'studying_id', 'points'], 'required'],
            [['id', 'task_id', 'studying_id', 'points'], 'integer'],
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
            'id' => 'id',
            'task_id' => 'id задачи',
            'studying_id' => 'id обучающегося',
            'points' => 'Баллы',
        ];
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
     * @return \app\models\query\ScoreQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\ScoreQuery(get_called_class());
    }
}
