<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "compositor_usuario".
 *
 * @property integer $compositor_id
 * @property integer $usuario_id
 *
 * @property Compositor $compositor
 * @property Usuario $usuario
 */
class CompositorUsuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'compositor_usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['compositor_id', 'usuario_id'], 'required'],
            [['compositor_id', 'usuario_id'], 'integer'],
            [['compositor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Compositor::className(), 'targetAttribute' => ['compositor_id' => 'id']],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'compositor_id' => 'Compositor ID',
            'usuario_id' => 'Usuario ID',
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
    public function getUsuario()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'usuario_id']);
    }
}
