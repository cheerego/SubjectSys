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
     * 不同的场景字段验证规则是不一样得到
     * 这个方法的作用就是取消父类的验证规则,
     * 在这个场景中比如说不需要required这个规则
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
        //在weixi的视频中设置了排序和每一页的数目
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_ASC,
                    'name' => SORT_ASC
                ]
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        /**
         * 数字类型sql语句就是=
         */
        $query->andFilterWhere([
            'id' => $this->id,
            'num' => $this->num,
            'phonenum' => $this->phonenum,
            'qqgroup' => $this->qqgroup,
            'current' => $this->current,
            'total' => $this->total,
        ]);
        /**
         * string类型的sql就是like
         */
        $query->andFilterWhere(['like', 'pwd', $this->pwd])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'qq', $this->qq])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
