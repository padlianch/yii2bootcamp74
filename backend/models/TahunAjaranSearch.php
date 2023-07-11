<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TahunAjaran;

/**
 * TahunAjaranSearch represents the model behind the search form about `common\models\TahunAjaran`.
 */
class TahunAjaranSearch extends TahunAjaran
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tahun_mulai', 'tahun_selesai'], 'integer'],
            [['status_berjalan'], 'boolean'],
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
        $query = TahunAjaran::find();

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
            'tahun_mulai' => $this->tahun_mulai,
            'tahun_selesai' => $this->tahun_selesai,
            'status_berjalan' => $this->status_berjalan,
        ]);

        return $dataProvider;
    }
}
