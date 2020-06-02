<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Autos;

/**
 * AutosSearch represents the model behind the search form of `app\modules\admin\models\Autos`.
 */
class AutosSearch extends Autos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Probeg', 'KolichLS', 'Cena'], 'integer'],
            [['Marka', 'Model', 'GodVipuska', 'Cvet', 'TipDvigatelya', 'TipKPP', 'Nalichie'], 'safe'],
            [['ObemDvigatelya'], 'number'],
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
        $query = Autos::find();

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
            'GodVipuska' => $this->GodVipuska,
            'Probeg' => $this->Probeg,
            'ObemDvigatelya' => $this->ObemDvigatelya,
            'KolichLS' => $this->KolichLS,
            'Cena' => $this->Cena,
        ]);

        $query->andFilterWhere(['like', 'Marka', $this->Marka])
            ->andFilterWhere(['like', 'Model', $this->Model])
            ->andFilterWhere(['like', 'Cvet', $this->Cvet])
            ->andFilterWhere(['like', 'TipDvigatelya', $this->TipDvigatelya])
            ->andFilterWhere(['like', 'TipKPP', $this->TipKPP])
            ->andFilterWhere(['like', 'Nalichie', $this->Nalichie]);

        return $dataProvider;
    }
}
