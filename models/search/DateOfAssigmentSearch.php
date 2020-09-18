<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DateOfAssigment;

/**
 * DateOfAssigmentSearch represents the model behind the search form of `app\models\DateOfAssigment`.
 */
class DateOfAssigmentSearch extends DateOfAssigment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'module_id'], 'integer'],
            [['term'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = DateOfAssigment::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'module_id' => $this->module_id,
            'term' => $this->term,
        ]);

        return $dataProvider;
    }
}
