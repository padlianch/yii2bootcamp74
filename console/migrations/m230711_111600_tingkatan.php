<?php

use yii\db\Migration;

/**
 * Class m230711_111600_tingkatan
 */
class m230711_111600_tingkatan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tingkatan}}', [
            'id' => $this->primaryKey(),
            'nama_tingkatan' => $this->string()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230711_111600_tingkatan cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230711_111600_tingkatan cannot be reverted.\n";

        return false;
    }
    */
}
