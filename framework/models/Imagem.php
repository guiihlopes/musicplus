<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "imagem".
 *
 * @property integer $id
 * @property string $descricao
 * @property string $url
 *
 * @property ArteAfimImagem[] $arteAfimImagems
 * @property ArteAfim[] $artes
 * @property BebidaImagem[] $bebidaImagems
 * @property Bebida[] $bebidas
 * @property ComposicaoImagem[] $composicaoImagems
 * @property Composicao[] $obras
 * @property CompositorImagem[] $compositorImagems
 * @property Compositor[] $compositors
 * @property EpocaImagem[] $epocaImagems
 * @property Epoca[] $epocas
 * @property MarcoHistoricoImagem[] $marcoHistoricoImagems
 * @property MarcoHistorico[] $marcoHistoricos
 */
class Imagem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'imagem';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descricao', 'url'], 'required'],
            [['descricao'], 'string', 'max' => 155],
            [['url'], 'string', 'max' => 255],
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
            'url' => 'Imagem',
        ];
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArteAfimImagems()
    {
        return $this->hasMany(ArteAfimImagem::className(), ['imagem_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArtes()
    {
        return $this->hasMany(ArteAfim::className(), ['id' => 'arte_id'])->viaTable('arte_afim_imagem', ['imagem_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBebidaImagems()
    {
        return $this->hasMany(BebidaImagem::className(), ['imagem_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBebidas()
    {
        return $this->hasMany(Bebida::className(), ['id' => 'bebida_id'])->viaTable('bebida_imagem', ['imagem_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComposicaoImagems()
    {
        return $this->hasMany(ComposicaoImagem::className(), ['imagem_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObras()
    {
        return $this->hasMany(Composicao::className(), ['id' => 'obra_id'])->viaTable('composicao_imagem', ['imagem_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompositorImagems()
    {
        return $this->hasMany(CompositorImagem::className(), ['imagem_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompositors()
    {
        return $this->hasMany(Compositor::className(), ['id' => 'compositor_id'])->viaTable('compositor_imagem', ['imagem_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEpocaImagems()
    {
        return $this->hasMany(EpocaImagem::className(), ['imagem_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEpocas()
    {
        return $this->hasMany(Epoca::className(), ['id' => 'epoca_id'])->viaTable('epoca_imagem', ['imagem_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarcoHistoricoImagems()
    {
        return $this->hasMany(MarcoHistoricoImagem::className(), ['imagem_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarcoHistoricos()
    {
        return $this->hasMany(MarcoHistorico::className(), ['id' => 'marco_historico_id'])->viaTable('marco_historico_imagem', ['imagem_id' => 'id']);
    }
}
