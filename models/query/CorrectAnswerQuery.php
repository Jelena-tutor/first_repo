<?php

namespace app\models\query;

/**
 * This is the ActiveQuery class for [[\app\models\CorrectAnswer]].
 *
 * @see \app\models\CorrectAnswer
 */
class CorrectAnswerQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \app\models\CorrectAnswer[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\CorrectAnswer|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
