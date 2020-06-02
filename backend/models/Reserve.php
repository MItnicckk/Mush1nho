<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "Reserve".
 *
 * @property int $id
 * @property int $idClienta
 * @property int $idAuto
 * @property string $DataReserva
 * @property string $DaraOkonchReserva
 *
 * @property Clients $clienta
 * @property Autos $auto
 */
class Reserve extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Reserve';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idClienta', 'idAuto', 'DataReserva', 'DaraOkonchReserva'], 'required'],
            [['idClienta', 'idAuto'], 'integer'],
            [['DataReserva', 'DaraOkonchReserva'], 'safe'],
            [['idClienta'], 'exist', 'skipOnError' => true, 'targetClass' => Clients::className(), 'targetAttribute' => ['idClienta' => 'id']],
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
            'idClienta' => 'Id Clienta',
            'idAuto' => 'Id Auto',
            'DataReserva' => 'Data Reserva',
            'DaraOkonchReserva' => 'Dara Okonch Reserva',
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
}
