<?php

namespace app\models;
use app\models\query\ResultOfModuleQuery;
use Yii;

/**
 * This is the model class for table "result_of_module".
 *
 * @property int $id
 * @property int $module_id
 * @property int $studying_id
 * @property int $points_module
 *
 * @property Module $module
 * @property Studying $studying
 */
class ResultOfModule extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'result_of_module';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'module_id', 'studying_id', 'points_module'], 'required'],
            [['id', 'module_id', 'studying_id', 'points_module'], 'integer'],
            [['id'], 'unique'],
            [['module_id'], 'exist', 'skipOnError' => true, 'targetClass' => Module::className(), 'targetAttribute' => ['module_id' => 'id']],
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
            'module_id' => 'Module ID',
            'studying_id' => 'Studying ID',
            'points_module' => 'Points Module',
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
    public function getStudying()
    {
        return $this->hasOne(Studying::className(), ['id' => 'studying_id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\ResultOfModuleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\ResultOfModuleQuery(get_called_class());
    }
}
