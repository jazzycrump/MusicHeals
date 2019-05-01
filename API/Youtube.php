<?php session_start();

require_once('../Models/QuestionModel2.php');
/** 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$model = new getQuestionAnswers();

if(!empty($_POST['question1a'])) {
    $model->setQuestion1($_POST['question1a']);

}
else{
    $model->setQuestion1($_POST['question1b']);
}
if(!empty($_POST['question2a'])) {
    $model->setQuestion2($_POST['question2a']);

}
else{
    $model->setQuestion2($_POST['question2b']);
}
if(!empty($_POST['question1a'])) {
    $model->setQuestion3($_POST['question3a']);

}
else{
    $model->setQuestion3($_POST['question3b']);
}
if(!empty($_POST['question4a'])) {
    $model->setQuestion4($_POST['question4a']);

}
else{
    $model->setQuestion4($_POST['question4b']);
}
if(!empty($_POST['question5a'])) {
    $model->setQuestion5($_POST['question5a']);

}
else{
    $model->setQuestion5($_POST['question5b']);
}
if(!empty($_POST['question6a'])) {
    $model->setQuestion6($_POST['question6a']);

}
else{
    $model->setQuestion6($_POST['question6b']);
}
if(!empty($_POST['question7a'])) {
    $model->setQuestion7($_POST['question7a']);

}
else{
    $model->setQuestion7($_POST['question7b']);
}
if(!empty($_POST['question8a'])) {
    $model->setQuestion8($_POST['question8a']);

}
else{
    $model->setQuestion8($_POST['question8b']);
}
if(!empty($_POST['question9a'])) {
    $model->setQuestion9($_POST['question9a']);

}
else{
    $model->setQuestion9($_POST['question9b']);
}
if(!empty($_POST['question10a'])) {
    $model->setQuestion10($_POST['question10a']);

}
else{
    $model->setQuestion10($_POST['question10b']);
}


$model->countYesNo();

$yes = $model->getYes();
$no = $model->getNO();

if($yes == 10 && $no == 0){
    $content = @file_get_contents("https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=50&playlistId=PLlZQf_lasi5IWSFVEuBtX3IZ-CR_oCMdn&key=AIzaSyCPZ7ufjnPxmZWK1iJfqhL6idRJvV7F6_c");
    $result  = json_decode($content,true);

}
elseif($yes == 5 && $no == 5){
    $sleep = @file_get_contents("https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=50&playlistId=PLlZQf_lasi5If_0ViTamEekt9vEXKBJfu&key=AIzaSyCPZ7ufjnPxmZWK1iJfqhL6idRJvV7F6_c");
    $result  = json_decode($sleep,true);

}
elseif($yes == 0 && $no == 10){
    $stress = @file_get_contents("https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=50&playlistId=PLlZQf_lasi5IVdt1csHrbhhEVC&key=AIzaSyCPZ7ufjnPxmZWK1iJfqhL6idRJvV7F6_c");
    $result  = json_decode($stress,true);

}

$item =  $result['items'][0]['snippet']['title'];

echo $item;

echo "\r\n";