<?php 
    require_once("C:\Users\Jazz\Documents\NetBeansProjects\Music\Database\UserDatabase.php");

class MHUserModel {
/*
 * This user model class will be used to get the Music Heals
 * user information and process that information to the Music Heals database.
*/

    protected $first_name;
    protected $last_name;
    protected $username;
    protected $password;

    public function getFirstName() {
        return $this->first_name;
    }

    public function setFirstName($first_name) {
        $this->first_name = $first_name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setLastName($last_name) {
        $this->last_name = $last_name;
    }

    public function setUsername($username) {
        $this->username = $MHusername;
    }

    public function setPassword($password) {
        $this->password = $password;
    }


    public static function login($_username, $_password) {
        $userRecord = TextDatabase::findUserByNameAndPassword($_username, $_password);
        if (!$userRecord) {
            return false;
        } else {
            $user = new User();
            $user->setUsername($userRecord['username']);
            $user->setFirstName($userRecord['first_name']);
            $user->setLastName($userRecord['last_name']);
            $user->setPassword($userRecord['password']);
            static::setSessionUser($user);
            return $user;
        }
    }

    public static function isUserLoggedIn() {
        if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
            return true;
        }
        return false;
    }

    public static function setSessionUser($user) {
        $_SESSION['user'] = serialize($user);
    }

    public static function getSessionUser() {
        return unserialize($_SESSION['user']);
    }

    public static function register($_username, $_password, $_first_name, $_last_name) {
        echo ("Marker 2: In the register function");
    }
}