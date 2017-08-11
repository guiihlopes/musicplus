<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "epoca_usuario".
 *
 * @property integer $epoca_id
 * @property integer $usuario_id
 *
 * @property Epoca $epoca
 * @property Usuario $usuario
 */
class EpocaUsuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'epoca_usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['epoca_id', 'usuario_id'], 'required'],
            [['epoca_id', 'usuario_id'], 'integer'],
            [['epoca_id'], 'exist', 'skipOnError' => true, 'targetClass' => Epoca::className(), 'targetAttribute' => ['epoca_id' => 'id']],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'epoca_id' => 'Epoca ID',
            'usuario_id' => 'Usuario ID',
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
    public function getUsuario()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'usuario_id']);
    }
}
