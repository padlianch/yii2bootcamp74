<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kelas".
 *
 * @property int $id
 * @property int|null $id_tahun_ajaran
 * @property int|null $id_wali_kelas
 * @property int|null $id_ruangan
 * @property int|null $id_tingkat_kelas
 * @property string|null $nama_kelas
 */
class Kelas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kelas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tahun_ajaran', 'id_wali_kelas', 'id_ruangan', 'id_tingkat_kelas'], 'default', 'value' => null],
            [['id_tahun_ajaran', 'id_wali_kelas', 'id_ruangan', 'id_tingkat_kelas'], 'integer'],
            [['nama_kelas'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_tahun_ajaran' => 'Id Tahun Ajaran',
            'id_wali_kelas' => 'Id Wali Kelas',
            'id_ruangan' => 'Id Ruangan',
            'id_tingkat_kelas' => 'Id Tingkat Kelas',
            'nama_kelas' => 'Nama Kelas',
        ];
    }

    public function getThnAjaran()
    {
        return $this->hasOne(TahunAjaran::class, ['id' => 'id_tahun_ajaran']);
    }

    public function getTingkatan()
    {
        return $this->hasOne(Tingkatan::class, ['id' => 'id_tingkat_kelas']);
    }

    public function getWaliKelas()
    {
        return $this->hasOne(Guru::class, ['id' => 'id_wali_kelas']);
    }

    public function getKelasSiswa()
    {
        return $this->hasMany(KelasSiswa::class, ['id_kelas' => 'id_wali_kelas']);
    }
}
