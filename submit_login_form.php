<?php
    require_once('login.php');
    require_once('db.php');
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
?>
