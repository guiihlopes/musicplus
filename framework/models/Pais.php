<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pais".
 *
 * @property integer $id
 * @property string $nome
 *
 * @property Bebida[] $bebidas
 * @property Composicao[] $composicaos
 * @property Compositor[] $compositors
 * @property Compositor[] $compositors0
 * @property MarcoHistorico[] $marcoHistoricos
 */
class Pais extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pais';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 155],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBebidas()
    {
        return $this->hasMany(Bebida::className(), ['pais_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComposicaos()
    {
        return $this->hasMany(Composicao::className(), ['pais_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompositors()
    {
        return $this->hasMany(Compositor::className(), ['pais_nascimento_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompositors0()
    {
        return $this->hasMany(Compositor::className(), ['pais_falescimento_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarcoHistoricos()
    {
        return $this->hasMany(MarcoHistorico::className(), ['pais_id' => 'id']);
    }
}
