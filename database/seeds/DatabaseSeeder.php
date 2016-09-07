<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // $this->call(QuestionTableSeeder::class);
    		$this->call(User_AccountsTableSeeder::class);
    }
}

class QuestionsTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('questions')->insert([
			array('task'=>'3','options'=>'eer','answer_No'=>'ade','answer_Yes'=>'ader','hint'=>'hek','order'=>'1','type'=>'0'),
			array('task'=>'4','options'=>'feer','answer_No'=>'ade','answer_Yes'=>'ader','hint'=>'hek','order'=>'1','type'=>'0'),
			array('task'=>'5','options'=>'eder','answer_No'=>'ade','answer_Yes'=>'ader','hint'=>'hek','order'=>'1','type'=>'0'),
			array('task'=>'6','options'=>'efer','answer_No'=>'ade','answer_Yes'=>'ader','hint'=>'hek','order'=>'1','type'=>'0'),
			array('task'=>'7','options'=>'eeer','answer_No'=>'ade','answer_Yes'=>'ader','hint'=>'hek','order'=>'1','type'=>'0'),
			array('task'=>'8','options'=>'eeer','answer_No'=>'ade','answer_Yes'=>'ader','hint'=>'hek','order'=>'1','type'=>'0'),
			array('task'=>'9','options'=>'erer','answer_No'=>'ade','answer_Yes'=>'ader','hint'=>'hek','order'=>'1','type'=>'0'),
			array('task'=>'10','options'=>'eger','answer_No'=>'ade','answer_Yes'=>'ader','hint'=>'hek','order'=>'1','type'=>'0'),
			array('task'=>'11','options'=>'eher','answer_No'=>'ade','answer_Yes'=>'ader','hint'=>'hek','order'=>'1','type'=>'0'),
			array('task'=>'12','options'=>'eejr','answer_No'=>'ade','answer_Yes'=>'ader','hint'=>'hek','order'=>'1','type'=>'0'),
			array('task'=>'13','options'=>'eekr','answer_No'=>'ade','answer_Yes'=>'ader','hint'=>'hek','order'=>'1','type'=>'0'),
			array('task'=>'14','options'=>'eser','answer_No'=>'ade','answer_Yes'=>'ader','hint'=>'hek','order'=>'1','type'=>'0'),
			array('task'=>'15','options'=>'eeer','answer_No'=>'ade','answer_Yes'=>'ader','hint'=>'hek','order'=>'1','type'=>'0'),
			array('task'=>'16','options'=>'eeerr','answer_No'=>'ade','answer_Yes'=>'ader','hint'=>'hek','order'=>'1','type'=>'0')
			]);
	}
}
class User_AccountsTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('user__accounts')->insert([
			array('username'=>'Nguyen A','email'=>'anh121@gmail.com','phone'=>'0988888888','password'=>'123456'),
			array('username'=>'Nguyen B','email'=>'anh122@gmail.com','phone'=>'0988777777','password'=>'123456'),
			array('username'=>'Nguyen C','email'=>'anh123@gmail.com','phone'=>'0988666666','password'=>'123456'),
			array('username'=>'Nguyen D','email'=>'anh124@gmail.com','phone'=>'0988555555','password'=>'123456'),
			array('username'=>'Nguyen E','email'=>'anh125@gmail.com','phone'=>'0988444444','password'=>'123456'),
			array('username'=>'Nguyen F','email'=>'anh126@gmail.com','phone'=>'0988333333','password'=>'123456'),
			array('username'=>'Nguyen G','email'=>'anh127@gmail.com','phone'=>'0988222222','password'=>'123456'),
			array('username'=>'Nguyen H','email'=>'anh128@gmail.com','phone'=>'0988111111','password'=>'123456'),
			array('username'=>'Nguyen I','email'=>'anh129@gmail.com','phone'=>'0988000000','password'=>'123456'),
			array('username'=>'Nguyen K','email'=>'anh1210@gmail.com','phone'=>'0988999999','password'=>'123456')
			]);
	}
}
