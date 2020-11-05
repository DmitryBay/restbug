<?php

use yii\db\Migration;

/**
 * Class m201105_041003_places
 */
class m201105_041003_places extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('place',[
           'id'=>$this->primaryKey(),
           'name'=>$this->string(200)->notNull(),
           'latlng'=>'point not null'
        ]);

        $pnt = "55.040021 82.905507";
        $this->insert('place', [
            'name'=>'name1',
            'latlng'=>new \yii\db\Expression("ST_PointFromText('POINT($pnt)')")
        ]);


        $pnt = "57.040021 82.905507";
        $this->insert('place', [
            'name'=>'name2',
            'latlng'=>new \yii\db\Expression("ST_PointFromText('POINT($pnt)')")
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201105_041003_places cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201105_041003_places cannot be reverted.\n";

        return false;
    }
    */
}
