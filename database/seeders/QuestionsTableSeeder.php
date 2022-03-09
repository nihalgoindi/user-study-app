<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question1 = new Question;
        $question1->image_path = "/home/nihalg/user-study-app/questions/Q1.png";
        $question1->save();

        $question2 = new Question;
        $question2->image_path = "/home/nihalg/user-study-app/questions/Q2.png";
        $question2->save();

        $question3 = new Question;
        $question3->image_path = "/home/nihalg/user-study-app/questions/Q3.png";
        $question3->save();

        $question4 = new Question;
        $question4->image_path = "/home/nihalg/user-study-app/questions/Q4.png";
        $question4->save();

        $question5 = new Question;
        $question5->image_path = "/home/nihalg/user-study-app/questions/Q5.png";
        $question5->save();

        $question6 = new Question;
        $question6->image_path = "/home/nihalg/user-study-app/questions/Q6.png";
        $question6->save();

        $question7 = new Question;
        $question7->image_path = "/home/nihalg/user-study-app/questions/Q7.png";
        $question7->save();

        $question8 = new Question;
        $question8->image_path = "/home/nihalg/user-study-app/questions/Q8.png";
        $question8->save();

        $question9 = new Question;
        $question9->image_path = "/home/nihalg/user-study-app/questions/Q9.png";
        $question9->save();

        $question10 = new Question;
        $question10->image_path = "/home/nihalg/user-study-app/questions/Q10.png";
        $question10->save();
    }
}
