<?php

use yii\db\Migration;

/**
 * Class m230713_114448_ruangan
 */
class m230713_114448_ruangan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ruangan}}', [
            'id' => $this->primaryKey(),
            'nama_ruangan' => $this->string(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230713_114448_ruangan cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230713_114448_ruangan cannot be reverted.\n";

        return false;
    }
    */
}
