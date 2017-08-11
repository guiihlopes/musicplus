<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "arte_afim_imagem".
 *
 * @property integer $arte_id
 * @property integer $imagem_id
 *
 * @property ArteAfim $arte
 * @property Imagem $imagem
 */
class ArteAfimImagem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'arte_afim_imagem';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['arte_id', 'imagem_id'], 'required'],
            [['arte_id', 'imagem_id'], 'integer'],
            [['arte_id'], 'exist', 'skipOnError' => true, 'targetClass' => ArteAfim::className(), 'targetAttribute' => ['arte_id' => 'id']],
            [['imagem_id'], 'exist', 'skipOnError' => true, 'targetClass' => Imagem::className(), 'targetAttribute' => ['imagem_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'arte_id' => 'Arte ID',
            'imagem_id' => 'Imagem ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArte()
    {
        return $this->hasOne(ArteAfim::className(), ['id' => 'arte_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImagem()
    {
        return $this->hasOne(Imagem::className(), ['id' => 'imagem_id']);
    }
}
