<?php

namespace app\models;
use app\models\query\StudyingQuery;
use Yii;

/**
 * This is the model class for table "studying".
 *
 * @property int $id
 * @property int $stud_group_id
 * @property int $user_id
 *
 * @property Rating[] $ratings
 * @property ResultOfModule[] $resultOfModules
 * @property Score[] $scores
 * @property StudGroup $studGroup
 * @property User $user
 * @property StudyingStudyCourse[] $studyingStudyCourses
 */
class Studying extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'studying';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stud_group_id', 'user_id'], 'required'],
            [['stud_group_id', 'user_id'], 'integer'],
            [['stud_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => StudGroup::className(), 'targetAttribute' => ['stud_group_id' => 'id']],
          //  [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'stud_group_id' => 'Stud Group ID',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRatings()
    {
        return $this->hasMany(Rating::className(), ['studying_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResultOfModules()
    {
        return $this->hasMany(ResultOfModule::className(), ['studying_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScores()
    {
        return $this->hasMany(Score::className(), ['studying_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudGroup()
    {
        return $this->hasOne(StudGroup::className(), ['id' => 'stud_group_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudyingStudyCourses()
    {
        return $this->hasMany(StudyingStudyCourse::className(), ['studying_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return StudyingQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new StudyingQuery(get_called_class());
    }
}
