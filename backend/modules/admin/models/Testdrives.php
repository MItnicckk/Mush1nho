<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "testdrives".
 *
 * @property int $id
 * @property int $idAuto
 * @property string $DataProvedeniya
 *
 * @property Autos $auto
 */
class Testdrives extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testdrives';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idAuto', 'DataProvedeniya'], 'required'],
            [['idAuto'], 'integer'],
            [['DataProvedeniya'], 'safe'],
            [['idAuto'], 'exist', 'skipOnError' => true, 'targetClass' => Autos::className(), 'targetAttribute' => ['idAuto' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idAuto' => 'Id Auto',
            'DataProvedeniya' => 'Data Provedeniya',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuto()
    {
        return $this->hasOne(Autos::className(), ['id' => 'idAuto']);
    }
}
