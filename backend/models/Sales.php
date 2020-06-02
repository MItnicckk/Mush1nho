<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "Sales".
 *
 * @property int $Id
 * @property int $idClienta
 * @property int $idSotrudnika
 * @property int $idAuto
 *
 * @property Clients $clienta
 * @property Autos $auto
 * @property Employees $sotrudnika
 */
class Sales extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Sales';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idClienta', 'idSotrudnika', 'idAuto'], 'required'],
            [['idClienta', 'idSotrudnika', 'idAuto'], 'integer'],
            [['idClienta'], 'exist', 'skipOnError' => true, 'targetClass' => Clients::className(), 'targetAttribute' => ['idClienta' => 'id']],
            [['idAuto'], 'exist', 'skipOnError' => true, 'targetClass' => Autos::className(), 'targetAttribute' => ['idAuto' => 'id']],
            [['idSotrudnika'], 'exist', 'skipOnError' => true, 'targetClass' => Employees::className(), 'targetAttribute' => ['idSotrudnika' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'idClienta' => 'Id Clienta',
            'idSotrudnika' => 'Id Sotrudnika',
            'idAuto' => 'Id Auto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClienta()
    {
        return $this->hasOne(Clients::className(), ['id' => 'idClienta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuto()
    {
        return $this->hasOne(Autos::className(), ['id' => 'idAuto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSotrudnika()
    {
        return $this->hasOne(Employees::className(), ['id' => 'idSotrudnika']);
    }
}
