<?php require_once("C:\Users\Jazz\Documents\NetBeansProjects\Music\Database\QDatabase.php");

class MHQuestionModel {
/*
 * This user model class will be used to get the Music Heals
 * user information and process that information to the Music Heals database.
*/

    protected $question1;
    protected $question2;
    protected $question3;
    protected $question4;


    public function getQuestion1() {
        return $this->question1;
    }

    public function setQuestion1($question_1) {
        $this->question1 = $question_1;
    }

    public function getQuestion2() {
        return $this->question2;
    }
    public function setQuestion2($question_2) {
        $this->question2 = $question_2;
    }

    public function getQuestion3() {
        return $this->question3;
    }
    
        public function setQuestion3($question_3) {
        $this->question3 = $question_3;
    }
     
    public function getQuestion4() {
        return $this->question4;
    }
       public function setQuestion4($question_4) {
        $this->question4 = $question_4;
    }

    public static function isQuestionAnswered() {
        if (isset($_SESSION['question1']) && !empty($_SESSION['question1'])) {
            return true;
        }
        return false;
    }
}