<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bebida_imagem".
 *
 * @property integer $bebida_id
 * @property integer $imagem_id
 *
 * @property Bebida $bebida
 * @property Imagem $imagem
 */
class BebidaImagem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bebida_imagem';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bebida_id', 'imagem_id'], 'required'],
            [['bebida_id', 'imagem_id'], 'integer'],
            [['bebida_id'], 'exist', 'skipOnError' => true, 'targetClass' => Bebida::className(), 'targetAttribute' => ['bebida_id' => 'id']],
            [['imagem_id'], 'exist', 'skipOnError' => true, 'targetClass' => Imagem::className(), 'targetAttribute' => ['imagem_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bebida_id' => 'Bebida ID',
            'imagem_id' => 'Imagem ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBebida()
    {
        return $this->hasOne(Bebida::className(), ['id' => 'bebida_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImagem()
    {
        return $this->hasOne(Imagem::className(), ['id' => 'imagem_id']);
    }
}
