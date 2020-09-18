<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profession".
 *
 * @property int $id
 * @property string $profession
 *
 * @property Course[] $courses
 */
class Profession extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profession';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['profession'], 'required'],
            [['profession'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'profession' => 'Направление(специальность)',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourses()
    {
        return $this->hasMany(Course::className(), ['profession_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\ProfessionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\ProfessionQuery(get_called_class());
    }
}
