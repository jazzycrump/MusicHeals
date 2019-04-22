<?php require_once("C:\Users\Jazz\Documents\NetBeansProjects\Music\Database\QDatabase.php");

class UserModel {
/*
 * This user model class will be used to get the Music Heals
 * user information and process that information to the Music Heals database.
*/

    protected $MHfirst_name;
    protected $MHlast_name;
    protected $MHusername;
    protected $MHpassword;

    public function getMHFirstName() {
        return $this->MHfirst_name;
    }

    public function setMHFirstName($first_name) {
        $this->MHfirst_name = $first_name;
    }

    public function getMHLastName() {
        return $this->MHlast_name;
    }

    public function getMHUsername() {
        return $this->MHusername;
    }

    public function getMHPassword() {
        return $this->MHpassword;
    }

    public function setMHLastName($last_name) {
        $this->MHlast_name = $last_name;
    }

    public function setMHUsername($MHusername) {
        $this->MHusername = $MHusername;
    }

    public function setPassword($MHpassword) {
        $this->MHpassword = $MHpassword;
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

    public static function register($_MHusername, $_MHpassword, $_MHfirst_name, $_MHlast_name) {
        echo ("Marker 2: In the register function");
    }
}