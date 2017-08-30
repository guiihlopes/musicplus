<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $id
 * @property string $nome
 * @property string $sobrenome
 * @property string $email
 * @property string $senha
 * @property string $data_nascimento
 * @property integer $perfil_id
 * @property integer $genero
 * @property integer $status
 *
 * @property ComposicaoUsuario[] $composicaoUsuarios
 * @property Composicao[] $composicaos
 * @property CompositorUsuario[] $compositorUsuarios
 * @property Compositor[] $compositors
 * @property EpocaUsuario[] $epocaUsuarios
 * @property Epoca[] $epocas
 * @property Perfil $perfil
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'senha', 'genero', 'nome', 'sobrenome'], 'required'],
            [['data_nascimento'], 'safe'],
            [['status'], 'default', 'value'=> 1],
            [['perfil_id'], 'default', 'value'=> 2],
            [['perfil_id', 'genero', 'status'], 'integer'],
            [['nome', 'sobrenome', 'senha'], 'string', 'max' => 45],
            [['email'], 'string', 'max' => 155],
            [['email'], 'email'],
            [['email'], 'unique'],
            [['perfil_id'], 'exist', 'skipOnError' => true, 'targetClass' => Perfil::className(), 'targetAttribute' => ['perfil_id' => 'id']],
        ];
    }
    
    public function beforeSave($insert)
    {
        if ($insert) {
            $this->senha = md5($this->senha);
        }
        return parent::beforeSave($insert);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'sobrenome' => 'Sobrenome',
            'email' => 'Email',
            'senha' => 'Senha',
            'data_nascimento' => 'Data Nascimento',
            'perfil_id' => 'Perfil',
            'genero' => 'Genero',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComposicaoUsuarios()
    {
        return $this->hasMany(ComposicaoUsuario::className(), ['usuario_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComposicaos()
    {
        return $this->hasMany(Composicao::className(), ['id' => 'composicao_id'])->viaTable('composicao_usuario', ['usuario_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompositorUsuarios()
    {
        return $this->hasMany(CompositorUsuario::className(), ['usuario_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompositors()
    {
        return $this->hasMany(Compositor::className(), ['id' => 'compositor_id'])->viaTable('compositor_usuario', ['usuario_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEpocaUsuarios()
    {
        return $this->hasMany(EpocaUsuario::className(), ['usuario_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEpocas()
    {
        return $this->hasMany(Epoca::className(), ['id' => 'epoca_id'])->viaTable('epoca_usuario', ['usuario_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerfil()
    {
        return $this->hasOne(Perfil::className(), ['id' => 'perfil_id']);
    }
}
