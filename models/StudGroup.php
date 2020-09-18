<?php

namespace app\models;
use Yii;
use app\models\query\StudGroupQuery;

/**
 * This is the model class for table "stud_group".
 *
 * @property int $id
 * @property int $course_id
 * @property int $number_group
 *
 * @property Course $course
 * @property Studying[] $studyings
 */
class StudGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stud_group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['course_id', 'number_group'], 'required'],
            [['course_id', 'number_group'], 'integer'],
            [['course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Course::className(), 'targetAttribute' => ['course_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'course_id' => 'Course ID',
            'number_group' => 'Number Group',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourse()
    {
        return $this->hasOne(Course::className(), ['id' => 'course_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudyings()
    {
        return $this->hasMany(Studying::className(), ['stud_group_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\StudGroupQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\StudGroupQuery(get_called_class());
    }
}
