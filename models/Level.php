<?php

namespace app\models;


use app\models\query\LevelQuery;
use Yii;

/**
 * This is the model class for table "level".
 *
 * @property int $id
 * @property int $module_id
 * @property string $name
 * @property int $parent_id
 *
 * @property Module $module
 * @property Task[] $tasks
 */
class Level extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'level';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['module_id', 'name', 'parent_id'], 'required'],
            [['module_id', 'parent_id'], 'integer'],
            [['name'], 'string', 'max' => 30],
            [['module_id'], 'exist', 'skipOnError' => true, 'targetClass' => Module::className(), 'targetAttribute' => ['module_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'module_id' => 'Модуль',
            'name' => 'Уровень',
            'parent_id' => 'parent_id',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModule()
    {
        return $this->hasOne(Module::className(), ['id' => 'module_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTasks()
    {
        return $this->hasMany(Task::className(), ['level_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return LevelQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LevelQuery(get_called_class());
    }
}
