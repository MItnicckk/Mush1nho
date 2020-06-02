<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\about;

/**
 * AutorSearch represents the model behind the search form of `app\modules\admin\models\about`.
 */
class AutorSearch extends about
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['text1', 'text2', 'text3', 'text4', 'text5', 'text6', 'Name1', 'InfoName1', 'Name2', 'InfoName2', 'contact1', 'contact2', 'contact3'], 'safe'],
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
        $query = about::find();

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
        ]);

        $query->andFilterWhere(['like', 'text1', $this->text1])
            ->andFilterWhere(['like', 'text2', $this->text2])
            ->andFilterWhere(['like', 'text3', $this->text3])
            ->andFilterWhere(['like', 'text4', $this->text4])
            ->andFilterWhere(['like', 'text5', $this->text5])
            ->andFilterWhere(['like', 'text6', $this->text6])
            ->andFilterWhere(['like', 'Name1', $this->Name1])
            ->andFilterWhere(['like', 'InfoName1', $this->InfoName1])
            ->andFilterWhere(['like', 'Name2', $this->Name2])
            ->andFilterWhere(['like', 'InfoName2', $this->InfoName2])
            ->andFilterWhere(['like', 'contact1', $this->contact1])
            ->andFilterWhere(['like', 'contact2', $this->contact2])
            ->andFilterWhere(['like', 'contact3', $this->contact3]);

        return $dataProvider;
    }
}
