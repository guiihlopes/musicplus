<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Compositor;

/**
 * CompositorSearch represents the model behind the search form about `app\models\Compositor`.
 */
class CompositorSearch extends Compositor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'epoca_id', 'pais_nascimento_id', 'pais_falescimento_id'], 'integer'],
            [['nome_completo', 'data_nascimento', 'bio', 'data_falescimento', 'imagem_principal'], 'safe'],
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
        $query = Compositor::find();

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
            'data_nascimento' => $this->data_nascimento,
            'epoca_id' => $this->epoca_id,
            'pais_nascimento_id' => $this->pais_nascimento_id,
            'data_falescimento' => $this->data_falescimento,
            'pais_falescimento_id' => $this->pais_falescimento_id,
        ]);

        $query->andFilterWhere(['like', 'nome_completo', $this->nome_completo])
            ->andFilterWhere(['like', 'bio', $this->bio])
            ->andFilterWhere(['like', 'imagem_principal', $this->imagem_principal]);

        return $dataProvider;
    }
}
