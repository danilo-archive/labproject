
<?php
    require_once('login.php');
    require_once('db.php');
 // define variables and set to empty values
//    function submit_login_details(){
//    if ($_SERVER["REQUEST_METHOD"] == "POST") {
//        $email = $_POST["email"] ?? '';
//        $pass = $_POST["pass"] ?? '';
//        if ($email == '') {
//                return "login.php";
//        }
//        elseif ($pass=='') {
//                return "login.php";
//        }
//        elseif (verify_details($email, $pass) == true) {
//            return "staff.html";
//        }
//    }
//    }

    function verify_details(){
        if(is_post_request()) {
            $email = $_POST["email"] ?? '';
            $pass = $_POST["pass"] ?? '';
            if($email == "msws@live.no" && $pass == "1234") {
                $nextpage = 'staff.php';
            }
            else {
                $nextpage = 'login.php';
            }
        }
        else{
            $nextpage = 'login.php';
        }
    }


function Login()
{
//    if(empty($_POST['email']))
//    {
//        return false;
//    }
//    if(empty($_POST['pass']))
//    {
//        return false;
//
//    }
//
////    $email = trim($_POST['email']);
////    $pass = trim($_POST['pass']);
//
//    if(!$this->CheckLoginInDetails($email,$pass))
//    {
//        return false;
//    }
//
//    session_start();
//
//    $_SESSION[$this->GetLoginSessionVar()] = $email;
//
//    return true;

    $msg = '';

    if (isset($_POST['email']) && !empty($_POST['pass'])) {

        if ($_POST['email'] == 'admin' &&
            $_POST['pass'] == '1234') {
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = 'admin';

            RedirectToURL('staff.php');
        }
        else {
            $msg = 'Wrong username or password';
        }
    }

}


function CheckLoginDetails($username,$password)

{
//    if(!$this->DBLogin())
//    {
//        $this->HandleError("Database login failed!");
//        return false;
//    }
//    $username = $this->SanitizeForSQL($username);
//    $pwdmd5 = md5($password);
//    $qry = "Select name, email from $this->tablename ".
//    " where username='$username' and password='$pwdmd5' ".
//    " and confirmcode='y'";
//
//    $result = mysql_query($qry,$this->connection);
//    if(!$result || mysql_num_rows($result) <= 0)
//    {
//        $this->HandleError("Error logging in. ".
//                           "The username or password does not match");
//        return false;
//    }
//    return true;
    if($username == 'admin') {
        if($password == '1234') {
            return true;
        }
        else {
            return false;
        }
    }
    else {
        return false;
    }
}
function GetLoginSessionVar()
{
    $retvar = md5($this->rand_key);
    $retvar = 'usr_'.substr($retvar,0,10);
    return $retvar;
}
function GetSelfScript()
{
    return htmlentities($_SERVER['PHP_SELF']);
}


function RedirectToURL($url)
{
    header("Location: {$url}");
    exit;
    }
//    function CheckLogin()
//    {
//        if(!isset($_SESSION)){ session_start(); }
//
//        $sessionvar = $this->GetLoginSessionVar();
//
//        if(empty($_SESSION[$sessionvar]))
//        {
//            return false;
//        }
//        return true;
//    }
//?>
