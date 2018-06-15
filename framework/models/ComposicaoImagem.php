<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "composicao_imagem".
 *
 * @property int $obra_id
 * @property int $imagem_id
 *
 * @property Composicao $obra
 */
class ComposicaoImagem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'composicao_imagem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['obra_id', 'imagem_id'], 'required'],
            [['obra_id', 'imagem_id'], 'integer'],
            [['obra_id', 'imagem_id'], 'unique', 'targetAttribute' => ['obra_id', 'imagem_id']],
            [['obra_id'], 'exist', 'skipOnError' => true, 'targetClass' => Composicao::className(), 'targetAttribute' => ['obra_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'obra_id' => 'Composição',
            'imagem_id' => 'Imagem',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObra()
    {
        return $this->hasOne(Composicao::className(), ['id' => 'obra_id']);
    }
}
