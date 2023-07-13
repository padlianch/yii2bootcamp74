<?php

use yii\db\Migration;

/**
 * Class m230713_114526_siswa_kelas
 */
class m230713_114526_siswa_kelas extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('{{%siswa}}', [
            'id' => $this->primaryKey(),
            'nis' => $this->string(),
            'nama_siswa' => $this->string(),
            'tanggal_lahir' => $this->string(),
            'alamat' => $this->string()
        ]);

        $this->createTable('{{%kelas_siswa}}', [
            'id_kelas' => $this->integer(),
            'id_siswa' => $this->integer(),
        ]);
        $this->addPrimaryKey('kelas_siswa_pk', 'kelas_siswa', ['id_kelas', 'id_siswa']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230713_114526_siswa_kelas cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230713_114526_siswa_kelas cannot be reverted.\n";

        return false;
    }
    */
}
