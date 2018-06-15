<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MarcoHistorico;

/**
 * MarcoHistoricoSearch represents the model behind the search form about `app\models\MarcoHistorico`.
 */
class MarcoHistoricoSearch extends MarcoHistorico
{

    public $pais;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pais_id'], 'integer'],
            [['data', 'descricao', 'pais'], 'safe'],
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
        $query = MarcoHistorico::find();

        $query->joinWith(['pais']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['pais'] = [
            'asc' => ['pais.nome' => SORT_ASC],
            'desc' => ['pais.nome' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'data' => $this->data,
            'pais_id' => $this->pais_id,
        ]);

        $query->andFilterWhere(['like', 'descricao', $this->descricao])
              ->andFilterWhere(['like', 'pais.nome', $this->pais]);

        return $dataProvider;
    }
}
