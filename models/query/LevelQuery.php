<?php

namespace app\models\query;

/**
 * This is the ActiveQuery class for [[Level]].
 *
 * @see Level
 */
class LevelQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return app\models\Level[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Level|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
