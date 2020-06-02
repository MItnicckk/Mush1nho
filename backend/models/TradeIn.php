<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "TradeIn".
 *
 * @property int $id
 * @property string $SdavaemieAuto
 * @property int $idProdashiAuto
 *
 * @property Autos $prodashiAuto
 */
class TradeIn extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'TradeIn';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SdavaemieAuto', 'idProdashiAuto'], 'required'],
            [['SdavaemieAuto'], 'string'],
            [['idProdashiAuto'], 'integer'],
            [['idProdashiAuto'], 'exist', 'skipOnError' => true, 'targetClass' => Autos::className(), 'targetAttribute' => ['idProdashiAuto' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'SdavaemieAuto' => 'Sdavaemie Auto',
            'idProdashiAuto' => 'Id Prodashi Auto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdashiAuto()
    {
        return $this->hasOne(Autos::className(), ['id' => 'idProdashiAuto']);
    }
}
