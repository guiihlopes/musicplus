<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "arte_afim".
 *
 * @property integer $id
 * @property string $data
 * @property string $descricao
 * @property string $autor
 *
 * @property ArteAfimImagem[] $arteAfimImagems
 * @property Imagem[] $imagems
 */
class ArteAfim extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'arte_afim';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data', 'descricao', 'autor'], 'required'],
            [['data'], 'safe'],
            [['descricao'], 'string'],
            [['autor'], 'string', 'max' => 155],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'data' => 'Data',
            'descricao' => 'Descricao',
            'autor' => 'Autor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArteAfimImagens()
    {
        return $this->hasMany(ArteAfimImagem::className(), ['arte_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImagens()
    {
        return $this->hasMany(Imagem::className(), ['id' => 'imagem_id'])->viaTable('arte_afim_imagem', ['arte_id' => 'id']);
    }
}
