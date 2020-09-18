<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CheckResult;

/**
 * CheckResultSearch represents the model behind the search form of `app\models\CheckResult`.
 */
class CheckResultSearch extends CheckResult
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'solution_id', 'correct_answer_id', 'answer', 'score'], 'integer'],
            [['result'], 'safe'],
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
        $query = CheckResult::find();

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
            'solution_id' => $this->solution_id,
            'correct_answer_id' => $this->correct_answer_id,
            'answer' => $this->answer,
            'score' => $this->score,
        ]);

        $query->andFilterWhere(['like', 'result', $this->result]);

        return $dataProvider;
    }
}