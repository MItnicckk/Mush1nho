<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Employees;

/**
 * EmployeesSearch represents the model behind the search form of `app\modules\admin\models\Employees`.
 */
class EmployeesSearch extends Employees
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['Familiya', 'Imya', 'Otchet', 'Dolshnost', 'Address', 'NomerTel', 'DataUstroistva'], 'safe'],
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
        $query = Employees::find();

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
            'DataUstroistva' => $this->DataUstroistva,
        ]);

        $query->andFilterWhere(['like', 'Familiya', $this->Familiya])
            ->andFilterWhere(['like', 'Imya', $this->Imya])
            ->andFilterWhere(['like', 'Otchet', $this->Otchet])
            ->andFilterWhere(['like', 'Dolshnost', $this->Dolshnost])
            ->andFilterWhere(['like', 'Address', $this->Address])
            ->andFilterWhere(['like', 'NomerTel', $this->NomerTel]);

        return $dataProvider;
    }
}
