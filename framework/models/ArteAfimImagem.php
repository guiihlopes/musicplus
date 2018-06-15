<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "arte_afim_imagem".
 *
 * @property int $arte_id
 * @property int $imagem_id
 *
 * @property ArteAfim $arte
 */
class ArteAfimImagem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'arte_afim_imagem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['arte_id', 'imagem_id'], 'required'],
            [['arte_id', 'imagem_id'], 'integer'],
            [['arte_id', 'imagem_id'], 'unique', 'targetAttribute' => ['arte_id', 'imagem_id']],
            [['arte_id'], 'exist', 'skipOnError' => true, 'targetClass' => ArteAfim::className(), 'targetAttribute' => ['arte_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'arte_id' => 'Arte',
            'imagem_id' => 'Imagem',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArte()
    {
        return $this->hasOne(ArteAfim::className(), ['id' => 'arte_id']);
    }
}
