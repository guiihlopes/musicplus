<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Composicao;

/**
 * ComposicaoSearch represents the model behind the search form about `app\models\Composicao`.
 */
class ComposicaoSearch extends Composicao
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pais_id', 'genero_id', 'tonalidade_id'], 'integer'],
            [['titulo_completo', 'texto_informativo', 'data_composicao', 'partitura_url'], 'safe'],
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
        $query = Composicao::find();

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
            'data_composicao' => $this->data_composicao,
            'pais_id' => $this->pais_id,
            'genero_id' => $this->genero_id,
            'tonalidade_id' => $this->tonalidade_id,
        ]);

        $query->andFilterWhere(['like', 'titulo_completo', $this->titulo_completo])
            ->andFilterWhere(['like', 'texto_informativo', $this->texto_informativo])
            ->andFilterWhere(['like', 'partitura_url', $this->partitura_url]);

        return $dataProvider;
    }
}
