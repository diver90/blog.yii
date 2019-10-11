    <?php

use yii\db\Migration;

/**
 * Class m191009_085959_delete_test_posts
 */
class m191009_085959_delete_test_posts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->delete('post', ['id' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191009_085959_delete_test_posts cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191009_085959_delete_test_posts cannot be reverted.\n";

        return false;
    }
    */
}
