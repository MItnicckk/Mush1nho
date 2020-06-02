<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Reserve;

/**
 * ReserveSearch represents the model behind the search form of `app\modules\admin\models\Reserve`.
 */
class ReserveSearch extends Reserve
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idClienta', 'idAuto'], 'integer'],
            [['DataReserva', 'DaraOkonchReserva'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Reserve::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'idClienta' => $this->idClienta,
            'idAuto' => $this->idAuto,
            'DataReserva' => $this->DataReserva,
            'DaraOkonchReserva' => $this->DaraOkonchReserva,
        ]);

        return $dataProvider;
    }
}
