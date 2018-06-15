<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "compositor_imagem".
 *
 * @property int $compositor_id
 * @property int $imagem_id
 *
 * @property Compositor $compositor
 */
class CompositorImagem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'compositor_imagem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['compositor_id', 'imagem_id'], 'required'],
            [['compositor_id', 'imagem_id'], 'integer'],
            [['compositor_id', 'imagem_id'], 'unique', 'targetAttribute' => ['compositor_id', 'imagem_id']],
            [['compositor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Compositor::className(), 'targetAttribute' => ['compositor_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'compositor_id' => 'Compositor',
            'imagem_id' => 'Imagem',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompositor()
    {
        return $this->hasOne(Compositor::className(), ['id' => 'compositor_id']);
    }
}
