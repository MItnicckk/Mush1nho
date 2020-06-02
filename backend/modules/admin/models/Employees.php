<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "Employees".
 *
 * @property int $id
 * @property string $Familiya
 * @property string $Imya
 * @property string $Otchet
 * @property string $Dolshnost
 * @property string $Address
 * @property string $NomerTel
 * @property string $DataUstroistva
 *
 * @property Sales[] $sales
 */
class Employees extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Employees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Familiya', 'Imya', 'Otchet', 'Dolshnost', 'Address', 'NomerTel', 'DataUstroistva'], 'required'],
            [['Familiya', 'Imya', 'Otchet', 'Dolshnost', 'Address', 'NomerTel'], 'string'],
            [['DataUstroistva'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Familiya' => 'Фамилия',
            'Imya' => 'Имя',
            'Otchet' => 'Отчет',
            'Dolshnost' => 'Должность',
            'Address' => 'Адрес',
            'NomerTel' => 'Номер телефона',
            'DataUstroistva' => 'Дата устройства',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSales()
    {
        return $this->hasMany(Sales::className(), ['idSotrudnika' => 'id']);
    }
}
