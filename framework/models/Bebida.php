<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bebida".
 *
 * @property integer $id
 * @property string $nome
 * @property string $data
 * @property double $teor_alcoolico
 * @property string $amadurecimento
 * @property string $descricao
 * @property string $safra
 * @property string $tipo
 * @property string $uva
 * @property integer $pais_id
 *
 * @property Pais $pais
 * @property BebidaImagem[] $bebidaImagems
 * @property Imagem[] $imagems
 */
class Bebida extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bebida';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'data', 'teor_alcoolico', 'descricao', 'pais_id'], 'required'],
            [['data'], 'safe'],
            [['teor_alcoolico'], 'number'],
            [['descricao'], 'string'],
            [['pais_id'], 'integer'],
            [['nome'], 'string', 'max' => 100],
            [['amadurecimento', 'safra', 'tipo', 'uva'], 'string', 'max' => 155],
            [['pais_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pais::className(), 'targetAttribute' => ['pais_id' => 'id']],
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
            'data' => 'Data',
            'teor_alcoolico' => 'Teor Alcoólico',
            'amadurecimento' => 'Amadurecimento',
            'descricao' => 'Descrição',
            'safra' => 'Safra',
            'tipo' => 'Tipo',
            'uva' => 'Uva',
            'pais_id' => 'Pais',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPais()
    {
        return $this->hasOne(Pais::className(), ['id' => 'pais_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBebidaImagems()
    {
        return $this->hasMany(BebidaImagem::className(), ['bebida_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImagems()
    {
        return $this->hasMany(Imagem::className(), ['id' => 'imagem_id'])->viaTable('bebida_imagem', ['bebida_id' => 'id']);
    }
}
