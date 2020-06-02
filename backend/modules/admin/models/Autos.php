<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "autos".
 *
 * @property int $id
 * @property string $Marka
 * @property string $Model
 * @property string $GodVipuska
 * @property string $Cvet
 * @property int $Probeg
 * @property double $ObemDvigatelya
 * @property int $KolichLS
 * @property string $TipDvigatelya
 * @property string $TipKPP
 * @property int $Cena
 * @property string $Nalichie
 *
 * @property Reserve[] $reserves
 * @property Sales[] $sales
 * @property TestDrives[] $testDrives
 * @property TradeIn[] $tradeIns
 */
class Autos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'autos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Marka', 'Model', 'GodVipuska', 'Cvet', 'Probeg', 'ObemDvigatelya', 'KolichLS', 'TipDvigatelya', 'TipKPP', 'Cena', 'Nalichie'], 'required'],
            [['Marka', 'Model', 'Cvet', 'TipDvigatelya', 'TipKPP', 'Nalichie'], 'string'],
            [['GodVipuska'], 'safe'],
            [['Probeg', 'KolichLS', 'Cena'], 'integer'],
            [['ObemDvigatelya'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Marka' => 'Марка',
            'Model' => 'Модель',
            'GodVipuska' => 'Год выпуска',
            'Cvet' => 'Цвет',
            'Probeg' => 'Пробег',
            'ObemDvigatelya' => 'Объем двигателя',
            'KolichLS' => 'Кол ЛС',
            'TipDvigatelya' => 'Тип двигателя',
            'TipKPP' => 'Тип КПП',
            'Cena' => 'Цена',
            'Nalichie' => 'Наличие',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReserves()
    {
        return $this->hasMany(Reserve::className(), ['idAuto' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSales()
    {
        return $this->hasMany(Sales::className(), ['idAuto' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTestDrives()
    {
        return $this->hasMany(TestDrives::className(), ['idAuto' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTradeIns()
    {
        return $this->hasMany(TradeIn::className(), ['idProdashiAuto' => 'id']);
    }
}
