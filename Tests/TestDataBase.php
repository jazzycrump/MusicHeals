<?php

require_once '../models/DataBaseController.php';
/*
 * This is a test of the TextDatabase.php.
 * 
 * 
 */

/**
 * Description of TestDataBase
 *
 * @author Brandon Vanhook
 */
class TestDataBase {
    
    /**
     * This is used to check all users inside database for testing.
     * 
     * @author Brandon Vanhook
     */
    
    public static function testFirstname($username){
        $result = Post::testFirstname($username);
        
            if($result){
                return true;
            }else{
                return false;
            }   
       }
    public static function TestData(){
        
    //Runs Test Normal, Egde , Error within the  database.
    echo("Testing normal case for past user 1/n");
    echo((self::testFirstname("Mark", "this user exists!", true)) ? "pass" or "fail");
    
    echo("Testing edge case for current user 1/n");
    echo((self:: testFirstname("Baker", "this user is not in the system!", false)) ? "pass" or "fail");
    
    echo("Testing error case for new user 1/n");
    echo((self:: testFirstname("12", "this is an invalid entry!", false)) ? "pass" or "fail");
    
   //====================================================================================
    echo("Testing normal case for past user 2/n");
    echo((self:: testFirstname("Susan", "this user doesn't exist!", true)) ? "pass" or "fail");
    
    echo("Testing edge case for current user 2/n");
    echo((self:: testFirstname("Jim", "this user is not in the system!", false)) ? "pass" or "fail");
    
    echo("Testing error case for new user 2/n");
    echo((self:: testFirstname("", "no name was entered!", false)) ? "pass" or "fail");
    
  //====================================================================================
    
    echo("Testing normal case for pastuser 3/n");
    echo((self:: testFirstname("Tony", "this user exists twice!", true)) ? "pass" or "fail");
    
    echo("Testing edge case for current user 3/n");
    echo((self:: testFirstname("Alice", "this user is not in the system!", false)) ? "pass" or "fail");
    
    echo("Testing eroor case for  new user 3/n");
    echo((self:: testFirstname("Ike", "Who is this?", false)) ? "pass" or "fail");
    
    
    
 }
}
?>
