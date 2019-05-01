<form action = "../API/Youtube.php" method='post'>
<?php

//class QDatabase {
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    function loadQuestions() {
        $count = 1;

        $file = fopen("/Users/Jazz/Documents/Music/Data/questions","r") or die("Unable to open file");
        while(! feof($file)) {
            echo $count.") ". fgets($file). "<br/>";
            $attrName = "question".strval($count)."a";
            $attrName2 = "question".strval($count)."b";
            $clssName = "radio".strval($count);
            echo "<input type='checkbox' id='$attrName' value= 'yes' name='$attrName' class='$clssName'>Yes</input></tr>"."<br/>";
            echo "<input type='checkbox' id='$attrName2' value='no' name='$attrName2' class='$clssName'>No</input></tr>"."<br/>";
            echo "<br/>";
            $count++;

        }
        fclose($file);

    }

    loadQuestions();
//}

?>
<input type='submit'>Get Results</input>
</form>
