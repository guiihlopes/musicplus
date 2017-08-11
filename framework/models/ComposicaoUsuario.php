<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "composicao_usuario".
 *
 * @property integer $composicao_id
 * @property integer $usuario_id
 *
 * @property Composicao $composicao
 * @property Usuario $usuario
 */
class ComposicaoUsuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'composicao_usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['composicao_id', 'usuario_id'], 'required'],
            [['composicao_id', 'usuario_id'], 'integer'],
            [['composicao_id'], 'exist', 'skipOnError' => true, 'targetClass' => Composicao::className(), 'targetAttribute' => ['composicao_id' => 'id']],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'composicao_id' => 'Composicao ID',
            'usuario_id' => 'Usuario ID',
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
    public function getUsuario()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'usuario_id']);
    }
}
