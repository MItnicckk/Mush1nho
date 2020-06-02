<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property string $Headline
 * @property string $Text
 * @property string $Images
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Headline', 'Text'], 'string'],
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
            'Text' => 'Текст',
            'Images' => 'Имя изображения',
        ];
    }
}
