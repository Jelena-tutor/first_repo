<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rating".
 *
 * @property int $id
 * @property int $studying_id
 * @property int $place
 *
 * @property Studying $studying
 */
class Rating extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rating';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['studying_id', 'place'], 'integer'],
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
            'studying_id' => 'Studying ID',
            'place' => 'Place',
        ];
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
     * @return \app\models\query\RatingQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\RatingQuery(get_called_class());
    }
}
