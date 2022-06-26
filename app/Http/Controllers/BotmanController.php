<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use App\Models\User;
use BotMan\BotMan\Messages\Incoming\Answer;
use Illuminate\Support\Facades\Auth;
use App\Http\Conversations\OnboardingConversation;

class BotmanController extends Controller
{
    
    public function handle()
    {


         $botman = app('botman');
         $botman->hears('{message}', function($botman, $message) {
         if ($message == 'hi' || $message == 'hello' || $message == 'hey')
          {

            $this->startConversation($botman);

          }
          else
          {
            $botman->reply("write 'hi' or 'hello' or 'hey' to ask questions...");
          }
       });


       $botman->listen();

    }

    public function handleQuerry()
    {
            $botman = app('botman');
            $botman->hears('What is the name of the teacher of {courseName}', function($bot, $courseName) {
            $bot->reply('This '.$courseName);
       });

       $botman->listen();

    }

      /**
       * Place your BotMan logic here.
      */

      public function askName($botman)
      {
         $botman = app('botman');
          $botman->ask('Hello! What is your Name?', function($botman,Answer $answer) {
          $name = $answer->getText();
        //   $sname = Auth::user()->name;

          $this->say('Nice to meet you '.$name .". Do You Have Any querries!");
          $this->say($name ." ! Do You Have Any querries!");
          $this->askQuestion($botman);
        });         
      }


      public function startConversation(BotMan $bot)
    {
        $bot->startConversation(new OnboardingConversation());
    }

      public function askQuestion($botman)
      {
        $botman->ask('Do you have any queries?', function(Answer $answer) {
            $bool = $answer->getText();
            if ($bool == 'yes' || $bool == 'sure')
             {
                $this->say('ok good');
             }
             elseif ($bool == 'no') {
                $this->say('Thanks for checking by. ');
             }
             else
             {
                $this->say("write 'yes' or 'no' or 'hey' to ask questions...");
             }
          });

      }
}
