<?php

class QDatabase {
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    public static function loadQuestions() {
$file = fopen("questions.txt","r") or die("Unable to open file");
while(! feof($file)) {
  echo fgets($file). "<br />";
  }
fclose($file);
    }
}
