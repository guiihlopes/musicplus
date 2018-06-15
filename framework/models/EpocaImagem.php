<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "epoca_imagem".
 *
 * @property int $epoca_id
 * @property int $imagem_id
 *
 * @property Epoca $epoca
 */
class EpocaImagem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'epoca_imagem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['epoca_id', 'imagem_id'], 'required'],
            [['epoca_id', 'imagem_id'], 'integer'],
            [['epoca_id', 'imagem_id'], 'unique', 'targetAttribute' => ['epoca_id', 'imagem_id']],
            [['epoca_id'], 'exist', 'skipOnError' => true, 'targetClass' => Epoca::className(), 'targetAttribute' => ['epoca_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
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
}
