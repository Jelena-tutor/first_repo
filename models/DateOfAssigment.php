<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "date_of_assigment".
 *
 * @property int $id
 * @property int $module_id
 * @property string $term
 *
 * @property Module $module
 */
class DateOfAssigment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'date_of_assigment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['module_id'], 'integer'],
            [['term'], 'safe'],
            [['module_id'], 'exist', 'skipOnError' => true, 'targetClass' => Module::className(), 'targetAttribute' => ['module_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'module_id' => 'Module ID',
            'term' => 'Term',
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
     * {@inheritdoc}
     * @return \app\models\query\DateOfAssigmentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\DateOfAssigmentQuery(get_called_class());
    }
}
