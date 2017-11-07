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
 * @property ComposicaoCompositor[] $composicaoCompositors
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
            [['imagem_principal'], 'image', 'extensions' => 'jpg, png'],
            [['epoca_id'], 'exist', 'skipOnError' => true, 'targetClass' => Epoca::className(), 'targetAttribute' => ['epoca_id' => 'id']],
            [['pais_nascimento_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pais::className(), 'targetAttribute' => ['pais_nascimento_id' => 'id']],
            [['pais_falecimento_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pais::className(), 'targetAttribute' => ['pais_falecimento_id' => 'id']],
        ];
    }

    public function beforeSave($insert)
    {
        if ($insert) {
            // do something
        }
        return parent::beforeSave($insert);
    }
    public function afterSave($insert, $changedAttributes)
    {
        if ($insert) {
            // do something
        }
        return parent::afterSave($insert, $changedAttributes);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome_completo' => 'Nome completo',
            'data_nascimento' => 'Data nascimento',
            'bio' => 'Bio',
            'epoca_id' => 'Epoca',
            'pais_nascimento_id' => 'Pais nascimento',
            'data_falecimento' => 'Data falecimento',
            'pais_falecimento_id' => 'Pais falecimento',
            'imagem_principal' => 'Imagem principal',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComposicaoCompositors()
    {
        return $this->hasMany(ComposicaoCompositor::className(), ['compositor_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComposicaos()
    {
        return $this->hasMany(Composicao::className(), ['id' => 'composicao_id'])->viaTable('composicao_compositor', ['compositor_id' => 'id']);
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
