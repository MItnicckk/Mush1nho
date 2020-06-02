<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "Clients".
 *
 * @property int $id
 * @property string $Familiya
 * @property string $Imya
 * @property string $Otchectvo
 * @property string $Telefon
 *
 * @property Reserve[] $reserves
 * @property Sales[] $sales
 */
class Clients extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Clients';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Familiya', 'Imya', 'Otchectvo', 'Telefon'], 'required'],
            [['Familiya', 'Imya', 'Otchectvo', 'Telefon'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Familiya' => 'Familiya',
            'Imya' => 'Imya',
            'Otchectvo' => 'Otchectvo',
            'Telefon' => 'Telefon',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReserves()
    {
        return $this->hasMany(Reserve::className(), ['idClienta' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSales()
    {
        return $this->hasMany(Sales::className(), ['idClienta' => 'id']);
    }
}
