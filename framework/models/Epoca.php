<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "epoca".
 *
 * @property integer $id
 * @property string $descricao
 *
 * @property Compositor[] $compositors
 * @property EpocaImagem[] $epocaImagems
 * @property Imagem[] $imagems
 * @property EpocaUsuario[] $epocaUsuarios
 * @property Usuario[] $usuarios
 */
class Epoca extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'epoca';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descricao'], 'required'],
            [['descricao'], 'string', 'max' => 155],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descricao' => 'Descricao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompositors()
    {
        return $this->hasMany(Compositor::className(), ['epoca_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEpocaImagems()
    {
        return $this->hasMany(EpocaImagem::className(), ['epoca_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImagems()
    {
        return $this->hasMany(Imagem::className(), ['id' => 'imagem_id'])->viaTable('epoca_imagem', ['epoca_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEpocaUsuarios()
    {
        return $this->hasMany(EpocaUsuario::className(), ['epoca_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['id' => 'usuario_id'])->viaTable('epoca_usuario', ['epoca_id' => 'id']);
    }
}
