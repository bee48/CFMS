<?php

use yii\db\Migration;
use yii\db\mysql\Schema;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m210111_031026_create_user_table extends Migration
{
	public function safeUp()
	{
		$tableOptions = null;
		if ($this->db->driverName === 'mysql') {
			$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		}

		$this->createTable('{{%user}}', [
			'id' => $this->primaryKey(),
			'username' => $this->string()->notNull()->unique(),
			'auth_key' => $this->string(32)->notNull(),
			'password_hash' => $this->string()->notNull(),
			'password_reset_token' => $this->string()->unique(),
			'verification_token' => $this->string()->defaultValue(null),
			'email' => $this->string()->notNull()->unique(),

			'status' => $this->smallInteger()->notNull()->defaultValue(10),
			'created_at' => Schema::TYPE_DATETIME.' DEFAULT CURRENT_TIMESTAMP',
			'updated_at' => Schema::TYPE_DATETIME.' DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
		], $tableOptions);

		$this->batchInsert('{{%user}}',['username', 'auth_key','password_hash','email'],[
			['admin','1234567890',Yii::$app->security->generatePasswordHash('admin'),'chanakalk1@gmail.com']
		]);
	}

	public function safeDown()
	{
		$this->dropTable('{{%user}}');
	}
}
