<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tingkatan".
 *
 * @property int $id
 * @property string|null $nama_tingkatan
 */
class Tingkatan extends \yii\db\ActiveRecord
{
    // public $jlh_kelas;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tingkatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_tingkatan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_tingkatan' => 'Nama Tingkatan',
        ];
    }

    public function getKelas()
    {
        return $this->hasMany(Kelas::class, ['id_tingkat_kelas' => 'id']);
    }

    public function getJlhKelas()
    {
        return $this->hasMany(Kelas::class, ['id_tingkat_kelas' => 'id'])->count();
        // return $this->getKelas()->count();
    }
}
