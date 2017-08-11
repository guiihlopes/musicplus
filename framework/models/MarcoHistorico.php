<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "marco_historico".
 *
 * @property integer $id
 * @property string $data
 * @property string $descricao
 * @property integer $pais_id
 *
 * @property Pais $pais
 * @property MarcoHistoricoImagem[] $marcoHistoricoImagems
 * @property Imagem[] $imagems
 */
class MarcoHistorico extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'marco_historico';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data', 'descricao', 'pais_id'], 'required'],
            [['data'], 'safe'],
            [['descricao'], 'string'],
            [['pais_id'], 'integer'],
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
            'data' => 'Data',
            'descricao' => 'Descricao',
            'pais_id' => 'Pais ID',
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
    public function getMarcoHistoricoImagems()
    {
        return $this->hasMany(MarcoHistoricoImagem::className(), ['marco_historico_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImagems()
    {
        return $this->hasMany(Imagem::className(), ['id' => 'imagem_id'])->viaTable('marco_historico_imagem', ['marco_historico_id' => 'id']);
    }
}
