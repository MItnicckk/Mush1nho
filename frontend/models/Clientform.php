<?php
namespace app\models;
use yii\base\Model;

use Yii;

/**
 * This is the model class for table "Clientform".
 *
 * @property int $id
 * @property string $name
 * @property string $mail
 * @property string $phone
 */
class Clientform extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clientform';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['name', 'mail', 'phone'], 'required'],
            [['name', 'mail', 'phone', 'massage'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Ваше имя',
            'mail' => 'Почта',
            'phone' => 'Телефон',
            'massage' => 'Сообщение',
        ];
    }
}
