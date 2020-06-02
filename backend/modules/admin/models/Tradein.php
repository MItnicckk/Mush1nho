<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "tradein".
 *
 * @property int $id
 * @property string $SdavaemieAuto
 * @property int $idProdashiAuto
 *
 * @property Autos $prodashiAuto
 */
class Tradein extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tradein';
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
            'SdavaemieAuto' => 'Сдаваемые авто',
            'idProdashiAuto' => 'Номер продажи авто',
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
