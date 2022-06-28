<?php

namespace App\Http\Conversations;
use App\Models\Course;
use BotMan\BotMan\Messages\Conversations\Conversation;
use Validator;
use BotMan\BotMan\Messages\Incoming\Answer;
use App\Models\Enrollment;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use DB;

class OnboardingConversation extends Conversation
{
    public function askName()
      {
         $this->ask('😀 Hello! What is your Name?', function(Answer $answer) {
          $name = $answer->getText();

          $this->say('Nice to meet you '.$name ."! 😁");
          $this->askQuestion();
        });
    }

    public function askQuestion()
    {
      $this->ask('Do you have any queries? 🔎', function(Answer $answer) {
          $bool = $answer->getText();
          if ($bool == 'yes' || $bool == 'sure')
           {
              $this->say('Okay, I would be glad to help 😎!');
            //   $this->say('What is your querry?');
              $this->askQuerry();
            //   return redirect(url("botman-querry"));
           }
           elseif ($bool == 'no') {
              $this->say('Thanks for checking by. 👋!');
           }
           else
           {
              $this->say("write 'yes' or 'no' to ask questions...");
           }
        });

    }
    public function askQuerry()
    {
      $this->ask('What is your querry? 🔮', function(Answer $answer) {
          $querry = $answer->getText();
          if ($querry == "i want to know the teacher name")
          {
            $this->courseName();
          }
          elseif ($querry == "i want to know the course name") {
            $this->teacherName();
          }
          elseif ($querry == "i want to know the number of student") {
            $this->noOfStudents();
          }
          elseif ($querry == "i want to know the number of videos") {
            $this->noOfVideos();
          }
          elseif ($querry == "i want to know the number of reviews") {
            $this->noOfReviews();
          }
          else 
          {
            $this->say("Querry not defined...");
          }
        });

    }

    public function courseName()
      {
         $this->ask('What is Course Name? 🔮', function(Answer $answer) {
          $cname = $answer->getText();
          $tName = DB::table('courses')->where('course_title', $cname)->first();
          $this->say('🧐! The teacher of course "'.$cname .'" is '.  $tName->teacher_name);
          $this->askQuestion();
        });
    }


    public function noOfStudents()
      {
         $this->ask('What is Course Name? 🔮', function(Answer $answer) {
          $cname = $answer->getText();
          $no_student = DB::table('courses')->where('course_title', $cname)->first();
          $this->say('🧐! The students enroll in course "'.$cname .'" are : '.  $no_student->number_of_students);
          $this->askQuestion();
        });
    }

    public function noOfVideos()
      {
         $this->ask('What is Course Name? 🔮', function(Answer $answer) {
          $cname = $answer->getText();
          $cid = DB::table('courses')->where('course_title', $cname)->first();
          $no_videos = Course::find($cid->id)->videos->count();
          $this->say('🧐! The number of videos in course "'.$cname .'" are : '.  $no_videos);
          $this->askQuestion();
        });
    }

    public function noOfReviews()
      {
         $this->ask('What is Course Name? 🔮', function(Answer $answer) {
          $cname = $answer->getText();
          $cid = DB::table('courses')->where('course_title', $cname)->first();
          $no_reviews = Course::find($cid->id)->reviews->count();
          $this->say('🧐! The number of Reviews on course "'.$cname .'" are : '.  $no_reviews);
          $this->askQuestion();
        });
    }

    public function teacherName()
      {
         $this->ask('What is Teacher Name? 🔮', function(Answer $answer) {
          $tname = $answer->getText();
          $cName = DB::table('courses')->where('teacher_name', $tname)->first();
        //   foreach ($cNames as $cName) {
            $this->say('🧐! The courses of teacher "'.$tname .'" is '.  $cName->course_title);
        // } 
        $this->askQuestion();
        });
    }

    public function ansQuerry()
    {
        $botman = resolve('botman');
        $botman->hears('What is the name of the teacher of {courseName}', function($bot, $courseName) {
          $bot->reply('This '.$courseName);

        });
        
    }


    public function run()
    {
        $this->askName();
    }
}