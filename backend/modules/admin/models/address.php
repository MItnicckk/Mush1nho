<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "address".
 *
 * @property int $id
 * @property string $text1
 * @property string $text2
 * @property string $text3
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'address';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text1', 'text2', 'text3'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'text1' => 'Текст',
            'text2' => 'Адрес',
            'text3' => 'Ссылка яндекс карты',
        ];
    }
}
