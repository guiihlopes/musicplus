<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MarcoHistoricoImagem;

/**
 * MarcoHistoricoImagemSearch represents the model behind the search form about `app\models\MarcoHistoricoImagem`.
 */
class MarcoHistoricoImagemSearch extends MarcoHistoricoImagem
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['marco_historico_id', 'imagem_id'], 'integer'],
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
        $query = MarcoHistoricoImagem::find();

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
            'marco_historico_id' => $this->marco_historico_id,
            'imagem_id' => $this->imagem_id,
        ]);

        return $dataProvider;
    }
}
