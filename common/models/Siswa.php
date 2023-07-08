<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "siswa".
 *
 * @property int $id
 * @property string|null $nis
 * @property string|null $nama_siswa
 * @property string|null $tanggal_lahir
 * @property string|null $alamat
 */
class Siswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'siswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal_lahir'], 'safe'],
            [['alamat'], 'string'],
            [['nis', 'nama_siswa'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nis' => 'Nis',
            'nama_siswa' => 'Nama Siswa',
            'tanggal_lahir' => 'Tanggal Lahir',
            'alamat' => 'Alamat',
        ];
    }
}
