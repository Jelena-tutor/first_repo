<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property int $id
 * @property int $level_id
 * @property int $teacher_id
 * @property string $name
 * @property string $text
 * @property string $ability_to_skip
 * @property int $points
 * @property string $notice
 *
 * @property Level $level
 * @property Teacher $teacher
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['level_id', 'teacher_id', 'name', 'text', 'ability_to_skip', 'points'], 'required'],
            [['level_id', 'teacher_id', 'points'], 'integer'],
            [['name'], 'string', 'max' => 30],
            [['text'], 'string', 'max' => 300],
            [['ability_to_skip'], 'string', 'max' => 3],
            [['notice'], 'string', 'max' => 400],
            [['level_id'], 'exist', 'skipOnError' => true, 'targetClass' => Level::className(), 'targetAttribute' => ['level_id' => 'id']],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::className(), 'targetAttribute' => ['teacher_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'level_id' => 'Уровень',
            'teacher_id' => 'Преподаватель',
            'name' => 'Название',
            'text' => 'Содержание задачи',
            'ability_to_skip' => 'Обязательность',
            'points' => 'Баллы',
            'notice' => 'Примечание',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLevel()
    {
        return $this->hasOne(Level::className(), ['id' => 'level_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teacher::className(), ['id' => 'teacher_id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\TaskQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\TaskQuery(get_called_class());
    }
}
