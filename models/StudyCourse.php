<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "study_course".
 *
 * @property int $id
 * @property string $name
 *
 * @property Module[] $modules
 * @property StudyCourseModule[] $studyCourseModules
 * @property StudyingStudyCourse[] $studyingStudyCourses
 */
class StudyCourse extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'study_course';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name'], 'required'],
            [['id'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModules()
    {
        return $this->hasMany(Module::className(), [ 'id'=>'module_id'])
            ->viaTable('study_course_module',['study_course_id'=>'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudyCourseModules()
    {
        return $this->hasMany(StudyCourseModule::className(), ['study_course_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudyingStudyCourses()
    {
        return $this->hasMany(StudyingStudyCourse::className(), ['study_course_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\StudyCourseQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\StudyCourseQuery(get_called_class());
    }
}
