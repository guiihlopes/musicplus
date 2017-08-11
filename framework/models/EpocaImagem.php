<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "epoca_imagem".
 *
 * @property integer $epoca_id
 * @property integer $imagem_id
 *
 * @property Epoca $epoca
 * @property Imagem $imagem
 */
class EpocaImagem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'epoca_imagem';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['epoca_id', 'imagem_id'], 'required'],
            [['epoca_id', 'imagem_id'], 'integer'],
            [['epoca_id'], 'exist', 'skipOnError' => true, 'targetClass' => Epoca::className(), 'targetAttribute' => ['epoca_id' => 'id']],
            [['imagem_id'], 'exist', 'skipOnError' => true, 'targetClass' => Imagem::className(), 'targetAttribute' => ['imagem_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'epoca_id' => 'Epoca ID',
            'imagem_id' => 'Imagem ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEpoca()
    {
        return $this->hasOne(Epoca::className(), ['id' => 'epoca_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImagem()
    {
        return $this->hasOne(Imagem::className(), ['id' => 'imagem_id']);
    }
}
