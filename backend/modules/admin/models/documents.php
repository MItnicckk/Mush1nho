<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "documents".
 *
 * @property int $id
 * @property string $text1
 * @property string $text2
 * @property string $text3
 */
class Documents extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'documents';
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
            'text1' => 'Название документа',
            'text2' => 'Информация о документе',
            'text3' => 'Имя файла',
        ];
    }
}
