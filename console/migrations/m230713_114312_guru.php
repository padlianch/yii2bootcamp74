<?php

use yii\db\Migration;

/**
 * Class m230713_114312_guru
 */
class m230713_114312_guru extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%guru}}', [
            'id' => $this->primaryKey(),
            'nip' => $this->string(),
            'nama_guru' => $this->string(),
            'tanggal_lahir' => $this->string(),
            'alamat' => $this->string()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230713_114312_guru cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230713_114312_guru cannot be reverted.\n";

        return false;
    }
    */
}
