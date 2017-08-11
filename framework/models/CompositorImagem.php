<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "compositor_imagem".
 *
 * @property integer $compositor_id
 * @property integer $imagem_id
 *
 * @property Compositor $compositor
 * @property Imagem $imagem
 */
class CompositorImagem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'compositor_imagem';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['compositor_id', 'imagem_id'], 'required'],
            [['compositor_id', 'imagem_id'], 'integer'],
            [['compositor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Compositor::className(), 'targetAttribute' => ['compositor_id' => 'id']],
            [['imagem_id'], 'exist', 'skipOnError' => true, 'targetClass' => Imagem::className(), 'targetAttribute' => ['imagem_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'compositor_id' => 'Compositor ID',
            'imagem_id' => 'Imagem ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompositor()
    {
        return $this->hasOne(Compositor::className(), ['id' => 'compositor_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImagem()
    {
        return $this->hasOne(Imagem::className(), ['id' => 'imagem_id']);
    }
}
