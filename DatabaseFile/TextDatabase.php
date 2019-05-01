<?php
/**
* Database class
*
* @author Brandon Vanhook
*/

class TextDatabase {

/**
* Write data in the format $data = array("username: buddy , password: lov123").;
*
* @author Brandon Vanhook
*/

public static function createRecord($data) {

    $my_file = 'data.txt';
    $handle = fopen($my_file, 'w') or die('Cannot open file: '.$my_file);

/**
* Writes data into contents;
*
* @author Brandon Vanhook
*/

    foreach($data as $d){
        fwrite($handle, $d);
    }
    
    sort($data);

    fclose($handle);
}
/**
* Update record with new user into data.txt file
*
* @author Brandon Vanhook
*/

public static function updateNewRecord($data){
    $my_file = 'data.txt';
    $handle = fopen($my_file, 'a') or die('Cannot open file: '.$my_file);

    $new_data = "\n".$data;
    fwrite($handle, $new_data);
    fclose($handle);
}


public static function deleteNewRecord(){

    /**
    * Load all data into an array .;
    *
    * @author Brandon Vanhook
    */
    $contents=TextDatabase::loadNewRecord();
    
    
    /**
    * Deletes a user by username.;
    *
    * @author Brandon Vanhook
    */

    $key = false; 
    foreach ($user as $username => $line){
      if ($username === $line){
       $key = $username;
    }
    }

   /**
    * places data back into the txt file.;
    *
    * @author Brandon Vanhook
    */
    $my_file = 'data.txt';

    
    echo ("user was successfully deleted");
}


public static function loadNewRecord(){
    /**
    * Loads new data file with new entry previously made.
    *
    * @author Brandon Vanhook
    */
    $my_file;
    $handle = fopen($my_file, 'r') or die('Cannot open file: '.$my_file);
    $r=array();
    while(!feof($handle)){

   /**
    * Reads the string of new data file.
    *
    * @author Brandon Vanhook
    */
       $content=fgets($handle);
      array_push ($r, $content);
    }
    fclose($handle);
    return $r;
}
}
?>
