<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "Clientform".
 *
 * @property int $id
 * @property string $name
 * @property string $mail
 * @property string $phone
 * @property string $massage
 *
 * @property Sales[] $sales
 * @property Reserve[] $reserves
 */
class Clientform extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Clientform';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'mail', 'phone', 'massage'], 'required'],
            [['massage'], 'string'],
            [['name', 'mail', 'phone'], 'string', 'max' => 99],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'mail' => 'Почта',
            'phone' => 'Телефон',
            'massage' => 'Сообщение',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSales()
    {
        return $this->hasMany(Sales::className(), ['idClienta' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReserves()
    {
        return $this->hasMany(Reserve::className(), ['idClienta' => 'id']);
    }
}
