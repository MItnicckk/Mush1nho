<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $text1
 * @property string $text2
 * @property string $text3
 * @property string $text4
 * @property string $text5
 * @property string $text6
 * @property string $Name1
 * @property string $InfoName1
 * @property string $Name2
 * @property string $InfoName2
 * @property string $contact1
 * @property string $contact2
 * @property string $contact3
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text1', 'text2', 'text3', 'text4', 'text5', 'text6', 'InfoName1', 'InfoName2'], 'string'],
            [['Name1'], 'string', 'max' => 250],
            [['Name2', 'contact1', 'contact2', 'contact3'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'text1' => 'Текст 1',
            'text2' => 'Текст 2',
            'text3' => 'Текст 3',
            'text4' => 'Текст 4',
            'text5' => 'Текст 5',
            'text6' => 'Текст 6',
            'Name1' => 'ФИО сотрудника',
            'InfoName1' => 'Информация о сотруднике',
            'Name2' => 'ФИО сотрудника',
            'InfoName2' => 'Информация о сотруднике',
            'contact1' => 'Телефон 1',
            'contact2' => 'Телефон 2',
            'contact3' => 'Почта',
        ];
    }
}
