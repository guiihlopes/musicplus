<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "marco_historico_imagem".
 *
 * @property int $marco_historico_id
 * @property int $imagem_id
 *
 * @property MarcoHistorico $marcoHistorico
 */
class MarcoHistoricoImagem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'marco_historico_imagem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['marco_historico_id', 'imagem_id'], 'required'],
            [['marco_historico_id', 'imagem_id'], 'integer'],
            [['marco_historico_id', 'imagem_id'], 'unique', 'targetAttribute' => ['marco_historico_id', 'imagem_id']],
            [['marco_historico_id'], 'exist', 'skipOnError' => true, 'targetClass' => MarcoHistorico::className(), 'targetAttribute' => ['marco_historico_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'marco_historico_id' => 'Marco histórico',
            'imagem_id' => 'Imagem',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarcoHistorico()
    {
        return $this->hasOne(MarcoHistorico::className(), ['id' => 'marco_historico_id']);
    }
}
