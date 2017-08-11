<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "marco_historico_imagem".
 *
 * @property integer $marco_historico_id
 * @property integer $imagem_id
 *
 * @property Imagem $imagem
 * @property MarcoHistorico $marcoHistorico
 */
class MarcoHistoricoImagem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'marco_historico_imagem';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['marco_historico_id', 'imagem_id'], 'required'],
            [['marco_historico_id', 'imagem_id'], 'integer'],
            [['imagem_id'], 'exist', 'skipOnError' => true, 'targetClass' => Imagem::className(), 'targetAttribute' => ['imagem_id' => 'id']],
            [['marco_historico_id'], 'exist', 'skipOnError' => true, 'targetClass' => MarcoHistorico::className(), 'targetAttribute' => ['marco_historico_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'marco_historico_id' => 'Marco Historico ID',
            'imagem_id' => 'Imagem ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImagem()
    {
        return $this->hasOne(Imagem::className(), ['id' => 'imagem_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarcoHistorico()
    {
        return $this->hasOne(MarcoHistorico::className(), ['id' => 'marco_historico_id']);
    }
}
