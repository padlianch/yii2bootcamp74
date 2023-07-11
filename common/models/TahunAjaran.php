<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tahun_ajaran".
 *
 * @property int $id
 * @property int|null $tahun_mulai
 * @property int|null $tahun_selesai
 * @property bool|null $status_berjalan
 */
class TahunAjaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tahun_ajaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tahun_mulai', 'tahun_selesai'], 'default', 'value' => null],
            [['tahun_mulai', 'tahun_selesai'], 'integer'],
            [['status_berjalan'], 'boolean'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tahun_mulai' => 'Tahun Mulai',
            'tahun_selesai' => 'Tahun Selesai',
            'status_berjalan' => 'Status Berjalan',
        ];
    }
}
