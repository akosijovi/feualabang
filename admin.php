<?php
session_start();
require_once('config.php');
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";

$username = isset( $_SESSION['username'] ) ? $_SESSION['username'] : "";

if ( $action != "login" && $action != "logout" && !$username ) {
  login();
  exit;
}

switch ($action){
    case 'login':
        login();
        break;
    case 'logout':
        logout();
        break;
    case 'pages':
        pages();
        break;
    case 'slider':
        slider();
        break;
    case 'addslider':
        addslider();
        break;
    case 'academics':
        academics();
        break;
    case 'addacad':
        addAcad();
        break;
    case 'university':
        university();
        break;
    case 'maps':
        maps();
        break;
    case 'share':
        share();
        break;
    case 'addshares':
        addshares();
        break;
    case 'users':
        users();
        break;
    case 'addusers':
        addusers();
        break;
    case 'delete':
        delete();
        break;
    default:
        def();
        
}

function login(){
    $link = connect();
    
	if (isset($_POST['Submitbutton'])) {
        if(isset($_POST['Username']) && !empty($_POST['Password']) AND isset($_POST['Username']) && !empty($_POST['Password'])){
            $username = $_POST['Username'];
            $password = $_POST['Password'];
            $search = mysqli_query($link,"SELECT username, password, active FROM users WHERE username='".$username."' AND password='".$password."' AND active='1'"); 
            $match  = $search->num_rows;
            
        }

        if($match > 0){
 
            // Login successful: Create a session and redirect to the admin homepage
            $_SESSION['username'] = $username;
            header( "Location: admin.php" );

        } 
        
        else {
            // Login failed: display an error message to the user
            displayLogin('
                <div class="alert alert-danger" role="alert">
                  Incorrect username or password. Please try again.
                </div>
            ');
        }
        
    }
	


	else{
		displayLogin('
            <div class="alert alert-info" role="alert">
              Please enter your username and password.
            </div>
        ');
    }
}

function logout(){
  unset( $_SESSION['username'] );
  header( "Location: admin.php" );
}

function listPages(){
//    THIS WILL APPEAR WHEN YOU FINISH LOGGING IN TO EDIT PAGES
    $_SESSION['displayAdmin'] = "default";
    
    include('./template/index.php');
    
}

function def(){
//    THIS WILL APPEAR WHEN YOU FINISH LOGGING IN TO EDIT PAGES
    $_SESSION['displayAdmin'] = "default";
    unset ($_SESSION['displayActive']);
    include('./template/index.php');
    
}

function slider(){
//    THIS WILL APPEAR WHEN YOU FINISH LOGGING IN TO EDIT slider
    $_SESSION['displayAdmin'] = "slider";
    include('./template/index.php');
    
}

function addslider(){
//    THIS WILL APPEAR WHEN YOU FINISH LOGGING IN TO EDIT slider
    $_SESSION['displayAdmin'] = "addSlide";
    include('./template/index.php');
    
}

function academics(){
//    THIS WILL APPEAR WHEN YOU FINISH LOGGING IN TO EDIT slider
    $_SESSION['displayAdmin'] = "acad";
    include('./template/index.php');
    
}

function addacad(){
//    THIS WILL APPEAR WHEN YOU FINISH LOGGING IN TO EDIT slider
    $_SESSION['displayAdmin'] = "addAcad";
    include('./template/index.php');
    
}

function university(){
//    THIS WILL APPEAR WHEN YOU FINISH LOGGING IN TO EDIT slider
    $_SESSION['displayAdmin'] = "university";
    include('./template/index.php');
    
}

function maps(){
//    THIS WILL APPEAR WHEN YOU FINISH LOGGING IN TO EDIT slider
    $_SESSION['displayAdmin'] = "maps";
    include('./template/index.php');
    
}

function users(){
//    THIS WILL APPEAR WHEN YOU FINISH LOGGING IN TO EDIT slider
    $_SESSION['displayAdmin'] = "user";
    include('./template/index.php');
    
}

function addusers(){
//    THIS WILL APPEAR WHEN YOU FINISH LOGGING IN TO EDIT slider
    $_SESSION['displayAdmin'] = "adduser";
    include('./template/index.php');
    
}

function share(){
//    THIS WILL APPEAR WHEN YOU FINISH LOGGING IN TO EDIT slider
    $_SESSION['displayAdmin'] = "share";
    include('./template/index.php');
    
}

function addshares(){
//    THIS WILL APPEAR WHEN YOU FINISH LOGGING IN TO EDIT slider
    $_SESSION['displayAdmin'] = "addshares";
    include('./template/index.php');
    
}

function pages(){
//    THIS WILL APPEAR WHEN YOU ARE EDITING PAGES
    $_SESSION['displayAdmin'] = "pages";
    $_SESSION['displayActive'] = 'pages';
    include('./template/index.php');
}


?>
