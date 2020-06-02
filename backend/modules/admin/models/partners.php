<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "partners".
 *
 * @property int $id
 * @property string $Headline
 * @property string $text
 * @property string $Images
 * @property string $link
 */
class Partners extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'partners';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Headline', 'text', 'link'], 'string'],
            [['Images'], 'string', 'max' => 150],
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
            'text' => 'Текст',
            'Images' => 'Имя изображения',
            'link' => 'Ссылка на сайт организации',
        ];
    }
}
