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

    public $paisNascimento;
    public $epoca;
    /**
     * @inheritdoc
    */
    public function rules()
    {
        return [
            [['id', 'epoca_id', 'pais_nascimento_id', 'pais_falecimento_id'], 'integer'],
            [['nome_completo', 'epoca', 'paisNascimento', 'data_nascimento', 'bio', 'data_falecimento', 'imagem_principal'], 'safe'],
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
        
        $query->joinWith(['paisNascimento', 'epoca']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['paisNascimento'] = [
            'asc' => ['pais.nome' => SORT_ASC],
            'desc' => ['pais.nome' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['epoca'] = [
            'asc' => ['epoca.descricao' => SORT_ASC],
            'desc' => ['epoca.descricao' => SORT_DESC],
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
            'data_nascimento' => $this->data_nascimento,
            'epoca_id' => $this->epoca_id,
            'pais_nascimento_id' => $this->pais_nascimento_id,
            'data_falecimento' => $this->data_falecimento,
            'pais_falecimento_id' => $this->pais_falecimento_id,
        ]);

        $query->andFilterWhere(['like', 'nome_completo', $this->nome_completo])
            ->andFilterWhere(['like', 'bio', $this->bio])
            ->andFilterWhere(['like', 'imagem_principal', $this->imagem_principal])
            ->andFilterWhere(['like', 'epoca.descricao', $this->epoca])
            ->andFilterWhere(['like', 'pais.nome', $this->paisNascimento]);

        return $dataProvider;
    }
}
