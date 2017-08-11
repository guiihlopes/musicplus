<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CompositorUsuario;

/**
 * CompositorUsuarioSearch represents the model behind the search form about `app\models\CompositorUsuario`.
 */
class CompositorUsuarioSearch extends CompositorUsuario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['compositor_id', 'usuario_id'], 'integer'],
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
        $query = CompositorUsuario::find();

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
            'compositor_id' => $this->compositor_id,
            'usuario_id' => $this->usuario_id,
        ]);

        return $dataProvider;
    }
}
