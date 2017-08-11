<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EpocaImagem;

/**
 * EpocaImagemSearch represents the model behind the search form about `app\models\EpocaImagem`.
 */
class EpocaImagemSearch extends EpocaImagem
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['epoca_id', 'imagem_id'], 'integer'],
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
        $query = EpocaImagem::find();

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
            'epoca_id' => $this->epoca_id,
            'imagem_id' => $this->imagem_id,
        ]);

        return $dataProvider;
    }
}
