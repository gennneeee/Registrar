<?php

require_once './vendor/autoload.php';

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;

class registrarConversation extends Conversation {

    protected $name;
    protected $sbjCode;

        public function askName() {
        $this->ask('Hello! What is your Student Number?', function(Answer $answer) {
            // Save result
            $this->name = $answer->getText();
            $this->askName2();
        });
    }
    
        public function askName2(){
                    
            $question = Question::create('Hello (name:' . $this->name.'from db)')
                ->addButton(Button::create("Yes")->value('y'))
                ->addButton(Button::create("No")->value('n'));
            
            $this->ask($question, function(Answer $answer) {
            $continue = strtolower(trim($answer->getText()));

            if ($continue === 'y') {
                $this->askCategory();
            } elseif ($continue === 'n') {
                $this->say('Retype your Student number');
                $this->askName();
            }
        });
    }
    
    public function askCategory() {
        $question = Question::create('do you wish to: ')
                ->addButton(Button::create("Add")->value('add'))
                ->addButton(Button::create("Drop")->value('drop'))
                ->addButton(Button::create("Quit")->value('exit'));
        $this->ask($question, function(Answer $answer) {
            $continue = strtolower(trim($answer->getText()));

            if ($continue === 'add') {
                $this->say('You chose ADD');
                $this->askAdd();
            } elseif ($continue === 'drop') {
                $this->say('You chose DROP');
                $this->askDrop();
            } else {
                $this->say('Nice meeting you, Thankyou for using this feature.');
            }
        });
    }

    public function askAdd() {
            $this->ask('Enter the subject Code', function(Answer $answer) {
            // Save result
            $this->sbjCode = $answer->getText();
            $this->askAdd2();
            });
    }
    
    public function askAdd2(){
        $question = Question::create('Hello is this the subject you wish to add (subject:' . $this->sbjCode.'from db)')
                ->addButton(Button::create("Yes")->value('y'))
                ->addButton(Button::create("No")->value('n'));
            
            $this->ask($question, function(Answer $answer) {
            $continue = strtolower(trim($answer->getText()));

            if ($continue === 'y') {
                $this->askDone();
            } elseif ($continue === 'n') {
                $this->say('You chose DROP');
                $this->askAdd();
            }
        });
    }
    
    public function askDrop() {
            $this->ask('Enter the subject Code', function(Answer $answer) {
            // Save result
            $this->sbjCode = $answer->getText();
            $this->askDrop2();
            });
    }
    
    public function askDrop2(){
                    
            $question = Question::create('Hello is this the subject you wish to add (subject:' . $this->sbjCode.'from db)')
                ->addButton(Button::create("Yes")->value('y'))
                ->addButton(Button::create("No")->value('n'));
            
            $this->ask($question, function(Answer $answer) {
            $continue = strtolower(trim($answer->getText()));

            if ($continue === 'y') {
                $this->askDone();
            } elseif ($continue === 'n') {
                $this->say('You chose DROP');
                $this->askDrop();
            }
        });
    }
    
    public function askDone(){
        $this->say("Result if the subject was dropped/added and if it is full/not");
        $this->say("Fill out the form and have it signed by the person mentioned in the forms and to be submitted to your respective college registrar");
    }

    public function run() {
        // This will be called immediately
        $this->askName();
    }

}
