<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $Headline
 * @property string $Images
 * @property string $Description
 * @property string $Date
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Description'], 'string'],
            [['Headline'], 'string', 'max' => 100],
            [['Images'], 'string', 'max' => 255],
            [['Date'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'Headline' => 'Заголовок',
            'Images' => 'Имя изображения',
            'Description' => 'Основная информация',
            'Date' => 'Дата',
        ];
    }
}
