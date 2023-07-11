<?php

use yii\db\Migration;

/**
 * Class m230711_103258_kelas
 */
class m230711_103258_kelas extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%kelas}}', [
            'id' => $this->primaryKey(),
            'id_tahun_ajaran' => $this->integer(),
            'id_wali_kelas' => $this->integer(),
            'id_ruangan' => $this->integer(),
            'id_tingkat_kelas' => $this->integer(),
            'nama_kelas' => $this->string()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230711_103258_kelas cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230711_103258_kelas cannot be reverted.\n";

        return false;
    }
    */
}
