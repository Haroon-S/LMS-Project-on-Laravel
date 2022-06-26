<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use App\Models\User;
use BotMan\BotMan\Messages\Incoming\Answer;
use Illuminate\Support\Facades\Auth;

class BotmanController extends Controller
{
    public function handle()
    {


         $botman = app('botman');
         $botman->hears('{message}', function($botman, $message) {
         if ($message == 'hi' || $message == 'hello' || $message == 'hey')
          {
            if (Auth::check()) {
                $sname = Auth::user()->name;
                $botman->reply('Hello ' .$sname);
                $botman->reply('Do you have any queries? ');
            }
            else {
                $this->askName($botman);
            }

          }
          else
          {
            $botman->reply("write 'hi' or 'hello' or 'hey' to ask questions...");
          }
       });


       $botman->listen();

    }

      /**
       * Place your BotMan logic here.
      */

      public function askName($botman)
      {
          $botman->ask('Hello! What is your Name?', function(Answer $answer) {
          $name = $answer->getText();
        //   $sname = Auth::user()->name;

          $this->say('Nice to meet you '.$name .". Do You Have Any querries!");
          $this->say($name ." ! Do You Have Any querries!");

        });


        // $botman->hears('{message2}', function($botman2, $message2) {
        //     if ($message2 == 'yes' || $message2 == 'no' || $message2 == 'sure')
        //      {
        //        $this->question($botman2);
        //      }
        //      else
        //      {
        //        $botman2->reply("write 'yes' or 'no' or 'sure' to ask answer...");
        //      }
        //   });
          
      }

      public function askQuestion($botman)
      {

    //     $botman->ask('What is your Querry?', function(Answer $answer) {
    //     $name = $answer->getText();

    //     $this->say('Nice to meet you '.$name);
    //  });

         

      }
}
