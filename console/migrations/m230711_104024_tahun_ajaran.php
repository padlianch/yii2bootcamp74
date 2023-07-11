<?php

use yii\db\Migration;

/**
 * Class m230711_104024_tahun_ajaran
 */
class m230711_104024_tahun_ajaran extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tahun_ajaran}}', [
            'id' => $this->primaryKey(),
            'tahun_mulai' => $this->integer(),
            'tahun_selesai' => $this->integer(),
            'status_berjalan' => $this->boolean()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230711_104024_tahun_ajaran cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230711_104024_tahun_ajaran cannot be reverted.\n";

        return false;
    }
    */
}
