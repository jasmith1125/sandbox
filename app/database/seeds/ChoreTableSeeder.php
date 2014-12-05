<?php

class ChoreTableSeeder extends Seeder {

	public function run() {

		# Clear the tables to a blank slate
		DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints so that all rows can be deleted, even if there's an associated FK
		DB::statement('TRUNCATE chores');

		
		$chores = array(

			array(
				'description' => 'Complete homework assignments',
				'completed' => false
			),

			array(
				'description' => 'Feed and water pets',
				'completed' => false
			),

			array(
				'description' => 'Walk the dog',
				'completed' => false
			),

			array(
				'description' => 'Make my bed',
				'completed' => false
			),

			array(
				'description' => 'Put away all toys and books',
				'completed' => false
			),

			array(
				'description' => 'Set the table for dinner',
				'completed' => false
			),
		);

		DB::table('chores')->insert($chores);
	}
}
