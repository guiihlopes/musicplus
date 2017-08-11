<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tonalidade".
 *
 * @property integer $id
 * @property string $nome
 * @property string $cor
 *
 * @property Composicao[] $composicaos
 */
class Tonalidade extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tonalidade';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'cor'], 'required'],
            [['nome'], 'string', 'max' => 155],
            [['cor'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'cor' => 'Cor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComposicaos()
    {
        return $this->hasMany(Composicao::className(), ['tonalidade_id' => 'id']);
    }
}
