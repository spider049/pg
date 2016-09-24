<?php

namespace backend\modules\docsis\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Workorder;

/**
 * WorkorderSearch represents the model behind the search form about `common\models\Workorder`.
 */
class WorkorderSearch extends Workorder
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'workorder_status_id', 'typeinstall_id', 'user_id'], 'integer'],
            [['circuit_id', 'customers_name', 'address', 'tel', 'gps', 'catv_no', 'fixedline_plus', 'due_date', 'remarks'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Workorder::find();

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
            'workorder_status_id' => $this->workorder_status_id,
            'typeinstall_id' => $this->typeinstall_id,
            'user_id' => $this->user_id,
            'due_date' => $this->due_date,
        ]);

        $query->andFilterWhere(['like', 'circuit_id', $this->circuit_id])
            ->andFilterWhere(['like', 'customers_name', $this->customers_name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'gps', $this->gps])
            ->andFilterWhere(['like', 'catv_no', $this->catv_no])
            ->andFilterWhere(['like', 'fixedline_plus', $this->fixedline_plus])
            ->andFilterWhere(['like', 'remarks', $this->remarks]);

        return $dataProvider;
    }
}
