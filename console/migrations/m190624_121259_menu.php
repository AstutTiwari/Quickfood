<?php

use yii\db\Migration;

/**
 * Class m190624_121259_menu
 */
class m190624_121259_menu extends Migration
{
    /**
     * {@inheritdoc}
     */
    // public function safeUp()
    // {

    // }

    /**
     * {@inheritdoc}
     */
    // public function safeDown()
    // {
    //     echo "m190624_121259_menu cannot be reverted.\n";

    //     return false;
    // }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%menu}}',[
            'id'=>$this->primaryKey(),
            'name'=>$this->string(20)->notNull(),
            'parent_id'=>$this->integer()->notNull(),
            'status'=>$this->smallInteger()->unsigned(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ], $tableOptions);
        $this->createIndex(
            'idx_menu_parent_id',
            'menu',
            'parent_id'
        );
        $this->addForeignKey(
            'fk_menu_parent_id',
            'menu',
            'parent_id',
            'menu',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropForeignKey(
            'fk_menu_parent_id',
            'menu'
        );
        $this->dropIndex(
            'idx_menu_parent_id',
            'menu'
        );
        $this->dropTable('menu');
       // echo "m190624_121259_menu cannot be reverted.\n";

        return false;
    }
    
}
