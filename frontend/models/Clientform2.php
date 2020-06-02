<?php
namespace app\models;
use yii\base\Model;

use Yii;

/**
 * This is the model class for table "Clientform2".
 *
 * @property int $id
 * @property string $name
 * @property string $mail
 * @property string $phone
 */
class Clientform2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Clientform2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['name', 'mail', 'phone'], 'required'],
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
            'name' => 'Name',
            'mail' => 'Mail',
            'phone' => 'Phone',
            'massage' => 'massage',
        ];
    }
}
