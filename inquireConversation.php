<?php

require_once './vendor/autoload.php';

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;

class inquireConversation extends Conversation {

    protected $name;

    public function askName() {
        $this->ask('Good day! May I know your full name?', function(Answer $answer) {
            // Save result
            $this->name = $answer->getText();
            $this->welcome();
        });
    }

    public function welcome() {

        $question = Question::create('Welcome ' . $this->name . '! What do you want to do?')
                ->addButton(Button::create("I want to inquire.")->value('inquire'))
                ->addButton(Button::create("I just want to try this new feature.")->value('try'));

        $this->ask($question, function(Answer $answer) {
            $continue = strtolower(trim($answer->getText()));

            if ($continue === 'inquire') {
                $this->askCategory();
            } else if ($continue === 'try') {
                $this->askTry();
            }
        });
    }

    public function askTry() {
        $question = Question::create('What do you want me to do?')
                ->addButton(Button::create("Tell a Joke")->value('joke'))
                ->addButton(Button::create("What's the weather?")->value('m'))
                ->addButton(Button::create("Tell me the time.")->value('e'));

        $this->ask($question, function(Answer $answer) {
            $continue = strtolower(trim($answer->getText()));

            if ($continue === 'joke') {
                $a = rand(0, 8);
                if ($a === 0) {
                    $this->say("Why can't astronauts eat popsicles?"
                        . '<br>'
                        . '<br>'
                        . '<br>'
                        . 'In space, no one can hear the ice cream truck 🚀🚫🍧 ');
                    $this->jokes();
                } else if ($a === 1) {
                    $this->say("Joke #2");
                    $this->jokeAgain();
                } else if ($a === 2) {
                    $this->say("Joke #3");
                    $this->jokeAgain();
                } else if ($a === 3) {
                    $this->say("Joke #4");
                    $this->jokeAgain();
                } else if ($a === 4) {
                    $this->say("Joke #5");
                    $this->jokeAgain();
                } else if ($a === 5) {
                    $this->say("Joke #6");
                    $this->jokeAgain();
                } else if ($a === 6) {
                    $this->say("Joke #7");
                    $this->jokeAgain();
                } else if ($a === 7) {
                    $this->say("Joke #8");
                    $this->jokeAgain();
                }
            } else if ($continue === 'm') {
                $this->say('I want to inquire about the medical procedures.');
                $this->askDrop();
            } else if ($continue === 'e') {
                $this->say('I want to inquire about the enrollment procedures.');
                $this->askDrop();
            } else {
                $this->say('Your chosen question is not yet available on any of our services for now.');
                $this->askCategory();
            }
        });
    }
    
    public function jokeAgain() {
        $question = Question::create('Do you want another joke?')
                ->addButton(Button::create("Yes, please!")->value('y'))
                ->addButton(Button::create("No, I want to go back")->value('back'));

        $this->ask($question, function(Answer $answer) {
            $continue = strtolower(trim($answer->getText()));

            if ($continue === 'y') {
                $this->jokes();
            } else if ($continue === 'back') {
                $this->say('I want to inquire about the medical procedures.');
                $this->askMedical();
            } else {
                $this->say('Invalid Choice!');
                $this->jokeAgain();
            }
        });
    }
    
    public function jokes() {
            $continue = 'joke';

            if ($continue === 'joke') {
                $a = rand(0, 8);
                if ($a === 0) {
                    $this->say("Why can't astronauts eat popsicles?"
                        . '<br>'
                        . '<br>'
                        . '<br>'
                        . 'In space, no one can hear the ice cream truck 🚀🚫🍧 ');
                    $this->jokeAgain();
                } else if ($a === 1) {
                    $this->say("Joke #2");
                    $this->jokeAgain();
                } else if ($a === 2) {
                    $this->say("Joke #3");
                    $this->jokeAgain();
                } else if ($a === 3) {
                    $this->say("Joke #4");
                    $this->jokeAgain();
                } else if ($a === 4) {
                    $this->say("Joke #5");
                    $this->jokeAgain();
                } else if ($a === 5) {
                    $this->say("Joke #6");
                    $this->jokeAgain();
                } else if ($a === 6) {
                    $this->say("Joke #7");
                    $this->jokeAgain();
                } else if ($a === 7) {
                    $this->say("Joke #8");
                    $this->jokeAgain();
                }
            } else if ($continue === 'm') {
                $this->say('I want to inquire about the medical procedures.');
                $this->askDrop();
            } else if ($continue === 'e') {
                $this->say('I want to inquire about the enrollment procedures.');
                $this->askDrop();
            } else {
                $this->say('Your chosen question is not yet available on any of our services for now.');
                $this->askCategory();
            }
    }

    public function askCategory() {
        $question = Question::create('What are you going to inquire?')
                ->addButton(Button::create("Admission")->value('a'))
                ->addButton(Button::create("Medical")->value('m'))
                ->addButton(Button::create("Enrollment")->value('e'))
                ->addButton(Button::create("Go Back")->value('back'));

        $this->ask($question, function(Answer $answer) {
            $continue = strtolower(trim($answer->getText()));

            if ($continue === 'a') {
                $this->say('I want to inquire about the admission procedures.');
                $this->askAdmission();
            } else if ($continue === 'm') {
                $this->say('I want to inquire about the medical procedures.');
                $this->askMedical();
            } else if ($continue === 'e') {
                $this->say('I want to inquire about the enrollment procedures.');
                $this->askEnrollment();
            } else if ($continue === 'back') {
                $this->welcome();
            } else {
                $this->say('Your chosen question is not yet available on any of our services for now.');
                $this->askCategory();
            }
        });
    }

    public function askAdmission() {
        $question = Question::create('What do you want to know about the admission?')
                ->addButton(Button::create("Entrance Exam")->value('exam'))
                ->addButton(Button::create("Requirements")->value('req'))
                ->addButton(Button::create("Go Back")->value('back'));
        $this->ask($question, function(Answer $answer) {
            $continue = strtolower(trim($answer->getText()));

            if ($continue === 'exam') {
                $this->Examination();
            } else if ($continue === 'req') {
                $this->Requirements();
            } else if ($continue === 'back') {
                $this->askCategory();
            } else {
                $this->say('Please choose a valid answer.');
                $this->askAdmission();
            }
        });
    }

    public function askMedical() {
        $question = Question::create('What do you want to know about medical procedures?')
                ->addButton(Button::create("Medical Requirements")->value('req'))
                ->addButton(Button::create("Medical Fee")->value('fee'))
                ->addButton(Button::create("Medical Procedures")->value('proc'))
                ->addButton(Button::create("Go Back")->value('back'));
        $this->ask($question, function(Answer $answer) {
            $continue = strtolower(trim($answer->getText()));

            if ($continue === 'req') {
                $this->say('Medical Requirements'
                        . '<br>'
                        . '<br>'
                        . '<br>'
                        . '1. ????????'
                        . '<br>'
                        . '2. ????????'
                        . '<br>'
                        . '3. ????????'
                        . '<br>'
                        . '4. ????????'
                        . '<br>'
                        . '5. ????????');
                $this->askBack();
            } else if ($continue === 'fee') {
                $this->say('Medical Fees'
                        . '<br>'
                        . '<br>'
                        . '1. Fee #1 : Free'
                        . '<br>'
                        . '2. Fee #2 : Php220'
                        . '<br>'
                        . '3. Fee #3 : Php300');
                $this->askBack();
            } else if ($continue === 'proc') {
                $this->say('Medical Procedures'
                        . '<br>'
                        . '<br>'
                        . 'For those students who have a schedule for their physical exam, please do not forget to bring your medical results.'
                        . '<br>'
                        . 'Also, only those scheduled for physical exam that day will be entertained. Students that will be caught using referral forms or information sheets with tampered/photocopied scheduled dates will not be entertained.');
                $this->askBack();
            } else if ($continue === 'back') {
                $this->askCategory();
            } else {
                $this->say('Please choose a valid answer.');
                $this->askMedical();
            }
        });
    }

    public function askEnrollment() {
        $question = Question::create('What do you want to know about enrollment?')
                ->addButton(Button::create("Forms")->value('form'))
                ->addButton(Button::create("Fees")->value('fee'))
                ->addButton(Button::create("Procedures")->value('proc'))
                ->addButton(Button::create("Go Back")->value('back'));
        $this->ask($question, function(Answer $answer) {
            $continue = strtolower(trim($answer->getText()));

            if ($continue === 'form') {
                $this->say('Please check the forms at this link: '
                        . '<br>'
                        . '<br>'
                        . 'APPLICATION FOR ADMISSION FORM'
                        . '<br>'
                        . 'https://cvsu.edu.ph/wp-content/uploads/2019/01/2019-application-form-for-admission.pdf'
                        . '<br>'
                        . '<br>'
                        . 'PRE-REGISTRATION FORM'
                        . '<br>'
                        . 'https://drive.google.com/file/d/1D8yZCXl3Xc7kCTGz61EjVRse_incTN96/view');
            } else if ($continue === 'fee') {
//                $a = rand(0,5);
//                $this->say("{$a}");
            } else if ($continue === 'proc') {
                
            } else if ($continue === 'back') {
                $this->askCategory();
            } else {
                $this->say('Please choose a valid answer.');
                $this->askEnrollment();
            }
        });
    }

    public function askBack() {
        $question = Question::create("That's all for now. What do you want to do next?")
                ->addButton(Button::create("Go Back")->value('back1'))
                ->addButton(Button::create("End Conversation")->value('end'));
        $this->ask($question, function(Answer $answer) {
            $continue = strtolower(trim($answer->getText()));

            if ($continue === 'end') {
                $this->say("Thank you for using CvSU Ask! I'm hoping to chat with you again.");
            } else if ($continue === 'back1') {
                $this->askCategory();
            }
        });
    }

    public function Examination() {
        $question = Question::create('The schedule of entrance exam is already closed.')
                ->addButton(Button::create("Go Back")->value('back'));

        $this->ask($question, function(Answer $answer) {
            $continue = strtolower(trim($answer->getText()));

            if ($continue === 'back') {
//                $this->say('I want to go back');
                $this->askAdmission();
            }
        });
    }

    public function Requirements() {
        $question = Question::create('What is your current standing?')
                ->addButton(Button::create("New Student")->value('new'))
                ->addButton(Button::create("Old Student")->value('old'))
                ->addButton(Button::create("Transferee")->value('trans'))
                ->addButton(Button::create("Go Back")->value('back'));

        $this->ask($question, function(Answer $answer) {
            $continue = strtolower(trim($answer->getText()));

            if ($continue === 'new') {
                $this->say('New Student '
                        . '<br>'
                        . '<br>' . '(Senior High School, Alternative Learning System or ALS passers, Basic Education Curriculum or BEC graduate)'
                        . '<br>'
                        . '<br>'
                        . '1. Accomplished Application Form.'
                        . '<br>'
                        . '2. 2 copies of 1×1 ID Picture.'
                        . '<br>'
                        . '3. Short ordinary white folder.'
                        . '<br>'
                        . '4. Photocopy of High School or Senior High School (G12) Form138 (at least first & second grading period) / Certificate of ALS Rating with recommendation for admission to college.'
                        . '<br>'
                        . '5. Photocopy of Certificate of Good Moral Character.');
                $this->askBack();
            } else if ($continue === 'old') {
                $this->say('REQUIREMENTS FOR OLD STUDENT'
                        . '<br>'
                        . '<br>'
                        . '1. Certificates of Grades.'
                        . '<br>'
                        . '2. 3 copies of  Pre - Registration Form with sign of your Adviser and College Registrar.'
                        . '<br>'
                        . '3. Submit the 1 copy of Pre - Registration Form with sign of Adviser and College Registrar to your respected Admin Registrar Window.');
                $this->askBack();
            } else if ($continue === 'trans') {
                $this->say('FOR INCOMING TRANSFEREES'
                        . '<br>'
                        . '<br>'
                        . '1. Submit the complete requirements for scheduling of interview'
                        . '<br>'
                        . '2. OSAS will issue Notice for Interview and student will undergo college evaluation and interview'
                        . '<br>'
                        . '3. If passed the evaluation/interview, photocopy the interview form and undergo admission exam as scheduled by OSAS . If failed, go back to OSAS.'
                        . '<br>'
                        . '4. Get the exam result and Notice of Student Admission (NOSA) (as instructed when is the release date).'
                        . '<br>'
                        . '5. Undergo medical examination at CvSU Health Services Unit (infirmary).'
                        . '<br>'
                        . '6. follow the enrollment procedure (at Registrar Office).');
                $this->askBack();
            } else if ($continue === 'back') {
                $this->askAdmission();
            }
        });
    }

    public function run() {
        // This will be called immediately
        $this->askName();
    }

}
