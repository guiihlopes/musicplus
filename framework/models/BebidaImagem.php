<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bebida_imagem".
 *
 * @property int $bebida_id
 * @property int $imagem_id
 *
 * @property Bebida $bebida
 */
class BebidaImagem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bebida_imagem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bebida_id', 'imagem_id'], 'required'],
            [['bebida_id', 'imagem_id'], 'integer'],
            [['bebida_id', 'imagem_id'], 'unique', 'targetAttribute' => ['bebida_id', 'imagem_id']],
            [['bebida_id'], 'exist', 'skipOnError' => true, 'targetClass' => Bebida::className(), 'targetAttribute' => ['bebida_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bebida_id' => 'Bebida',
            'imagem_id' => 'Imagem',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBebida()
    {
        return $this->hasOne(Bebida::className(), ['id' => 'bebida_id']);
    }
}
