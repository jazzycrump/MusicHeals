<?php

require_once('../Model/QuestionModel2.php');

    /*
     * This youtube API is used to count the numbers of yes's and no's that were used in the questionaire.
     * It also calls the googleapi to display the playlist that was given to the user.
    */
class apiController
{

    public function getPlaylist()
    {
        $model = new getQuestionAnswers();


        if (!empty($_POST['question1a'])) {
            $model->setQuestion1($_POST['question1a']);

        }
        if (!empty($_POST['question1b'])){
            $model->setQuestion1($_POST['question1b']);
        }
        if (!empty($_POST['question2a'])) {
            $model->setQuestion2($_POST['question2a']);

        }
        if (!empty($_POST['question2b'])){
            $model->setQuestion2($_POST['question2b']);
        }
        if (!empty($_POST['question3a'])) {
            $model->setQuestion3($_POST['question3a']);

        }
        if (!empty($_POST['question3b'])){
            $model->setQuestion3($_POST['question3b']);
        }
        if (!empty($_POST['question4a'])) {
            $model->setQuestion4($_POST['question4a']);

        }
        if (!empty($_POST['question4b'])){
            $model->setQuestion4($_POST['question4b']);
        }
        if (!empty($_POST['question5a'])) {
            $model->setQuestion5($_POST['question5a']);

        }
        if (!empty($_POST['question5b'])){
            $model->setQuestion5($_POST['question5b']);
        }
        if (!empty($_POST['question6a'])) {
            $model->setQuestion6($_POST['question6a']);

        }
        if (!empty($_POST['question6b'])){
            $model->setQuestion6($_POST['question6b']);
        }
        if (!empty($_POST['question7a'])) {
            $model->setQuestion7($_POST['question7a']);

        }
        if (!empty($_POST['question7b'])){
            $model->setQuestion7($_POST['question7b']);
        }
        if (!empty($_POST['question8a'])) {
            $model->setQuestion8($_POST['question8a']);

        }
        if (!empty($_POST['question8b'])){
            $model->setQuestion8($_POST['question8b']);
        }
        if (!empty($_POST['question9a'])) {
            $model->setQuestion9($_POST['question9a']);

        }
        if (!empty($_POST['question9b'])){
            $model->setQuestion9($_POST['question9b']);
        }
        if (!empty($_POST['question10a'])) {
            $model->setQuestion10($_POST['question10a']);

        }
        if (!empty($_POST['question10b'])){
            $model->setQuestion10($_POST['question10b']);
        }

        $model->countYesNo();

        $yes = $model->getYes();
        $no = $model->getNO();
    /**
     * This method is used to count the number of answers and display the playlist that is appropriate for the number of counts.
     * @author Jasmine Crump
     */
        if ($yes == 10 && $no == 0) {
            $smooth = @file_get_contents("https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=50&playlistId=PLlZQf_lasi5IWSFVEuBtX3IZ-CR_oCMdn&key=AIzaSyCPZ7ufjnPxmZWK1iJfqhL6idRJvV7F6_c");
            $result = json_decode($smooth, true);

        } else if ($yes == 5 && $no < 10) {
            $sleep = @file_get_contents("https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=50&playlistId=PLlZQf_lasi5If_0ViTamEekt9vEXKBJfu&key=AIzaSyCPZ7ufjnPxmZWK1iJfqhL6idRJvV7F6_c");
            $result = json_decode($sleep, true);

        } else if ($yes == 0 && $no == 10) {
            $stress = @file_get_contents("https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=50&playlistId=PLlZQf_lasi5IVdt1csHrbhhEVC&key=AIzaSyCPZ7ufjnPxmZWK1iJfqhL6idRJvV7F6_c");
            $result = json_decode($stress, true);

        }

        $item = $result['items'][0]['snippet']['title'];

        echo $item;



        echo "\r\n";



    }
}