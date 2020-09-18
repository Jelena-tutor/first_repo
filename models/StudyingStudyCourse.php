<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "studying_study_course".
 *
 * @property int $studying_id
 * @property int $study_course_id
 *
 * @property StudyCourse $studyCourse
 * @property Studying $studying
 */
class StudyingStudyCourse extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'studying_study_course';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['studying_id', 'study_course_id'], 'integer'],
            [['study_course_id'], 'exist', 'skipOnError' => true, 'targetClass' => StudyCourse::className(), 'targetAttribute' => ['study_course_id' => 'id']],
            [['studying_id'], 'exist', 'skipOnError' => true, 'targetClass' => Studying::className(), 'targetAttribute' => ['studying_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'studying_id' => 'Studying ID',
            'study_course_id' => 'Study Course ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudyCourse()
    {
        return $this->hasOne(StudyCourse::className(), ['id' => 'study_course_id']);
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
     * @return \app\models\query\StudyCourseModuleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\StudyCourseModuleQuery(get_called_class());
    }
}
