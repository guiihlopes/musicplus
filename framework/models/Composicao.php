<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "composicao".
 *
 * @property integer $id
 * @property string $titulo_completo
 * @property string $texto_informativo
 * @property string $data_composicao
 * @property integer $pais_id
 * @property integer $genero_id
 * @property integer $tonalidade_id
 * @property string $partitura_url
 * @property string $composicao_url
 * @property integer $compositor_id
 *
 * @property Compositor $compositor
 * @property Genero $genero
 * @property Pais $pais
 * @property Tonalidade $tonalidade
 * @property ComposicaoImagem[] $composicaoImagems
 * @property Imagem[] $imagems
 * @property ComposicaoUsuario[] $composicaoUsuarios
 * @property Usuario[] $usuarios
 */
class Composicao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'composicao';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo_completo', 'texto_informativo', 'data_composicao', 'pais_id', 'genero_id', 'tonalidade_id', 'composicao_url', 'compositor_id'], 'required'],
            [['texto_informativo', 'composicao_url'], 'string'],
            [['data_composicao'], 'safe'],
            [['pais_id', 'genero_id', 'tonalidade_id', 'compositor_id'], 'integer'],
            [['titulo_completo'], 'string', 'max' => 155],
            [['partitura_url'], 'string', 'max' => 255],
            [['compositor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Compositor::className(), 'targetAttribute' => ['compositor_id' => 'id']],
            [['genero_id'], 'exist', 'skipOnError' => true, 'targetClass' => Genero::className(), 'targetAttribute' => ['genero_id' => 'id']],
            [['pais_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pais::className(), 'targetAttribute' => ['pais_id' => 'id']],
            [['tonalidade_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tonalidade::className(), 'targetAttribute' => ['tonalidade_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo_completo' => 'Titulo Completo',
            'texto_informativo' => 'Texto Informativo',
            'data_composicao' => 'Data Composicao',
            'pais_id' => 'Pais',
            'genero_id' => 'Genero',
            'tonalidade_id' => 'Tonalidade',
            'partitura_url' => 'Partitura Url',
            'composicao_url' => 'Composicao Url',
            'compositor_id' => 'Compositor',
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
    public function getGenero()
    {
        return $this->hasOne(Genero::className(), ['id' => 'genero_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPais()
    {
        return $this->hasOne(Pais::className(), ['id' => 'pais_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTonalidade()
    {
        return $this->hasOne(Tonalidade::className(), ['id' => 'tonalidade_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComposicaoImagems()
    {
        return $this->hasMany(ComposicaoImagem::className(), ['obra_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImagems()
    {
        return $this->hasMany(Imagem::className(), ['id' => 'imagem_id'])->viaTable('composicao_imagem', ['obra_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComposicaoUsuarios()
    {
        return $this->hasMany(ComposicaoUsuario::className(), ['composicao_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['id' => 'usuario_id'])->viaTable('composicao_usuario', ['composicao_id' => 'id']);
    }
}
