<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "composicao_imagem".
 *
 * @property integer $obra_id
 * @property integer $imagem_id
 *
 * @property Imagem $imagem
 * @property Composicao $obra
 */
class ComposicaoImagem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'composicao_imagem';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['obra_id', 'imagem_id'], 'required'],
            [['obra_id', 'imagem_id'], 'integer'],
            [['imagem_id'], 'exist', 'skipOnError' => true, 'targetClass' => Imagem::className(), 'targetAttribute' => ['imagem_id' => 'id']],
            [['obra_id'], 'exist', 'skipOnError' => true, 'targetClass' => Composicao::className(), 'targetAttribute' => ['obra_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'obra_id' => 'Obra ID',
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
    public function getObra()
    {
        return $this->hasOne(Composicao::className(), ['id' => 'obra_id']);
    }
}
