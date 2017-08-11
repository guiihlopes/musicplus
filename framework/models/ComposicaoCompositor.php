<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "composicao_compositor".
 *
 * @property integer $composicao_id
 * @property integer $compositor_id
 *
 * @property Composicao $composicao
 * @property Compositor $compositor
 */
class ComposicaoCompositor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'composicao_compositor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['composicao_id', 'compositor_id'], 'required'],
            [['composicao_id', 'compositor_id'], 'integer'],
            [['composicao_id'], 'exist', 'skipOnError' => true, 'targetClass' => Composicao::className(), 'targetAttribute' => ['composicao_id' => 'id']],
            [['compositor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Compositor::className(), 'targetAttribute' => ['compositor_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'composicao_id' => 'Composicao ID',
            'compositor_id' => 'Compositor ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComposicao()
    {
        return $this->hasOne(Composicao::className(), ['id' => 'composicao_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompositor()
    {
        return $this->hasOne(Compositor::className(), ['id' => 'compositor_id']);
    }
}
