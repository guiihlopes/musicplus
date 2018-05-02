<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "compositor".
 *
 * @property integer $id
 * @property string $nome_completo
 * @property string $data_nascimento
 * @property string $bio
 * @property integer $epoca_id
 * @property integer $pais_nascimento_id
 * @property string $data_falecimento
 * @property integer $pais_falecimento_id
 * @property string $imagem_principal
 *
 * @property Composicao[] $composicaos
 * @property Epoca $epoca
 * @property Pais $paisNascimento
 * @property Pais $paisFalecimento
 * @property CompositorImagem[] $compositorImagems
 * @property Imagem[] $imagems
 * @property CompositorUsuario[] $compositorUsuarios
 * @property Usuario[] $usuarios
 */
class Compositor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'compositor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome_completo', 'data_nascimento', 'bio', 'epoca_id', 'pais_nascimento_id', 'imagem_principal'], 'required'],
            [['data_nascimento', 'data_falecimento'], 'safe'],
            [['bio'], 'string'],
            [['epoca_id', 'pais_nascimento_id', 'pais_falecimento_id'], 'integer'],
            [['nome_completo'], 'string', 'max' => 155],
            [['imagem_principal'], 'string', 'max' => 255],
            [['epoca_id'], 'exist', 'skipOnError' => true, 'targetClass' => Epoca::className(), 'targetAttribute' => ['epoca_id' => 'id']],
            [['pais_nascimento_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pais::className(), 'targetAttribute' => ['pais_nascimento_id' => 'id']],
            [['pais_falecimento_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pais::className(), 'targetAttribute' => ['pais_falecimento_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome_completo' => 'Nome Completo',
            'data_nascimento' => 'Data Nascimento',
            'bio' => 'Bio',
            'epoca_id' => 'Epoca ID',
            'pais_nascimento_id' => 'Pais Nascimento',
            'data_falecimento' => 'Data Falecimento',
            'pais_falecimento_id' => 'Pais Falecimento',
            'imagem_principal' => 'Imagem Principal',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComposicoes()
    {
        return $this->hasMany(Composicao::className(), ['compositor_id' => 'id']);
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
    public function getPaisNascimento()
    {
        return $this->hasOne(Pais::className(), ['id' => 'pais_nascimento_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaisFalecimento()
    {
        return $this->hasOne(Pais::className(), ['id' => 'pais_falecimento_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompositorImagems()
    {
        return $this->hasMany(CompositorImagem::className(), ['compositor_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImagems()
    {
        return $this->hasMany(Imagem::className(), ['id' => 'imagem_id'])->viaTable('compositor_imagem', ['compositor_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompositorUsuarios()
    {
        return $this->hasMany(CompositorUsuario::className(), ['compositor_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['id' => 'usuario_id'])->viaTable('compositor_usuario', ['compositor_id' => 'id']);
    }
}
