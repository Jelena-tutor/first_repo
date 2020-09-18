<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "study_course_module".
 *
 * @property int $study_course_id
 * @property int $module_id
 *
 * @property Module $module
 * @property StudyCourse $studyCourse
 */
class StudyCourseModule extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'study_course_module';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['study_course_id', 'module_id'], 'required'],
            [['study_course_id', 'module_id'], 'integer'],
            [['module_id'], 'exist', 'skipOnError' => true, 'targetClass' => Module::className(), 'targetAttribute' => ['module_id' => 'id']],
            [['study_course_id'], 'exist', 'skipOnError' => true, 'targetClass' => StudyCourse::className(), 'targetAttribute' => ['study_course_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'study_course_id' => 'Study Course ID',
            'module_id' => 'Module ID',
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
    public function getStudyCourse()
    {
        return $this->hasOne(StudyCourse::className(), ['id' => 'study_course_id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\StudyCourseModuleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\StudyCourseModuleQuery(get_called_class());
    }
}
