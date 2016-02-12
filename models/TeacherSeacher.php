<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Teacher;

/**
 * TeacherSeacher represents the model behind the search form about `app\models\Teacher`.
 */
class TeacherSeacher extends Teacher
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'num', 'phonenum', 'qqgroup', 'current', 'total'], 'integer'],
            [['pwd', 'name', 'qq', 'email'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Teacher::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'num' => $this->num,
            'phonenum' => $this->phonenum,
            'qqgroup' => $this->qqgroup,
            'current' => $this->current,
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['like', 'pwd', $this->pwd])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'qq', $this->qq])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
