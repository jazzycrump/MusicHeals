<?php

/**
 * This is the questions model where the users will go after gaining access 
 * 
 * 
 * @author Jasmine Crump
 */




class getQuestionAnswers{

    protected $question1;
    protected $question2;
    protected $question3;
    protected $question4;
    protected $question5;
    protected $question6;
    protected $question7;
    protected $question8;
    protected $question9;
    protected $question10;
    protected $yesCount = 0;
    protected $noCount = 0;

//============================================================================
    public function setQuestion1($value) {

            $this->question1 = $value;

    }
 //==========================================================================

    public function getQuestion1() {
        return $this->question1;
    }
//============================================================================
    public function setQuestion2($value) {
        $this->question2 = $value;
    }
 //============================================================================
    public function getQuestion2() {
        return $this->question2;
    }
//=============================================================================
    public function setQuestion3($value) {
        $this->question3 = $value;
    }
//=============================================================================
    public function getQuestion3() {
        return $this->question3;
    }
//============================================================================
    public function setQuestion4($value) {
        $this->question4 = $value;
    }
//============================================================================
    public function getQuestion4() {
        return $this->question4;
    }
//============================================================================
    public function setQuestion5($value) {
        $this->question5 = $value;
    }
//============================================================================    
    public function getQuestion5() {
        return $this->question5;
    }
//============================================================================
    public function setQuestion6($value) {
        $this->question6 = $value;
    }
//============================================================================    
    public function getQuestion6() {
        return $this->question6;
    }
//============================================================================
    public function setQuestion7($value) {
        $this->question7 = $value;
    }
//============================================================================    
    public function getQuestion7() {
        return $this->question7;
    }
//============================================================================
    public function setQuestion8($value) {
        $this->question8 = $value;
    }
//============================================================================    
    public function getQuestion8() {
        return $this->question8;
    }
//============================================================================
    public function setQuestion9($value) {
        $this->question9 = $value;
    }
//============================================================================    
    public function getQuestion9() {
        return $this->question9;
    }
//============================================================================
    public function setQuestion10($value) {
        $this->question10 = $value;
    }
//============================================================================    
    public function getQuestion10() {
        return $this->question10;
    }

    public function countYesNo(){
        if($this->question1 == "yes"){
            $this->yesCount++;
        }
        if($this->question1 == "no") {
            $this->noCount++;
        }
        if($this->question2 == "yes"){
            $this->yesCount++;
        }
        if($this->question2 == "no") {
            $this->noCount++;
        }
        if($this->question3 == "yes"){
            $this->yesCount++;
        }
        if($this->question3 == "no") {
            $this->noCount++;
        }
        if($this->question4 == "yes"){
            $this->yesCount++;
        }
        if($this->question4 == "no") {
            $this->noCount++;
        }
        if($this->question5 == "yes"){
            $this->yesCount++;
        }
        if($this->question5 == "no") {
            $this->noCount++;
        }
        if($this->question6 == "yes"){
            $this->yesCount++;
        }
        if($this->question6 == "no") {
            $this->noCount++;
        }
        if($this->question7 == "yes"){
            $this->yesCount++;
        }
        if($this->question7 == "no") {
            $this->noCount++;
        }
        if($this->question8 == "yes"){
            $this->yesCount++;
        }
        if($this->question8 == "no") {
            $this->noCount++;
        }
        if($this->question9 == "yes"){
            $this->yesCount++;
        }
        if($this->question9 == "no") {
            $this->noCount++;
        }
        if($this->question10 == "yes"){
            $this->yesCount++;
        }
        if($this->question10 == "no") {
            $this->noCount++;
        }


    }
    public function getYes(){
        return $this->yesCount;
    }
    public function getNO(){
        return $this->noCount;
    }

}

/*$view = new getQuestionAnswers();
echo $view->getNO();
echo $view->getYes();*/

?>
