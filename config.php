<?php


function connect(){
    //hidden because github.. :)
	return mysqli_connect("localhost","username","password","database-table");
}

//Use this for date in pages
//

function displayLogin($message){
    $_SESSION['login-text'] = $message;
	include 'loginform.php';
}


function editPage(){
    if($_SERVER['REQUEST_METHOD']=='POST'){
    	$id = $_GET['id'];
    	$title = $_POST['title'];
    	$content = $_POST['content'];
        $date = date("Y-m-d");
        $mysqli = connect();
        $mysqli->query("UPDATE pages SET title='$title',content ='$content',date='$date' WHERE id=$id") or die($mysqli->error);
        
        $_SESSION['displayText'] = '<br>
            <div class="alert alert-success" role="alert">
              Changes saved.
            </div>';
        
        if(!empty($_FILES['Filename']['name'])){
            $target = "images/upload/";
            $target = $target . basename(  $_FILES['Filename']['name']  );

            //Writes the information to the database
            $mysqli->query("UPDATE pages SET image='$target' WHERE id=$id") ;

            //Writes the Filename to the server
            if(move_uploaded_file($_FILES['Filename']['tmp_name'], $target)) {
            //Tells you if its all ok
            echo "The file ". basename( $_FILES['Filename']['name']). " has been uploaded, and your information has been added to the directory";
            } else {
            //Gives and error if its not
            echo "Sorry, there was a problem uploading your file.";
            }
        }
        
        echo '<script>
			        var timer = setTimeout(function() {
			            window.location="./admin.php?action=pages&id='.$_SESSION['ID'].'&success"
			        }, 100);
			</script>';
        
    }
}

function addSlide(){
    if($_SERVER['REQUEST_METHOD']=='POST'){
    	$title = $_POST['title'];
    	$content = $_POST['text'];
        $active = $_POST['active'];
        $date = date("Y-m-d");
        $mysqli = connect();
        
        $_SESSION['displayText'] = '<br>
            <div class="alert alert-success" role="alert">
              Changes saved.
            </div>';
        
        if(!empty($_FILES['Filename']['name'])){
            $target = "images/upload/";
            $target = $target . basename(  $_FILES['Filename']['name']  );

            //Writes the information to the database
            $mysqli->query("INSERT INTO slider (title,text,active,image) VALUES ('$title','$content','$active','$target')") ;

            //Writes the Filename to the server
            if(move_uploaded_file($_FILES['Filename']['tmp_name'], $target)) {
            //Tells you if its all ok
            echo "The file ". basename( $_FILES['Filename']['name']). " has been uploaded, and your information has been added to the directory";
            } else {
            //Gives and error if its not
            echo "Sorry, there was a problem uploading your file.";
            }
        }
        
        echo '<script>
			        var timer = setTimeout(function() {
			            window.location="./admin.php?action=addslider&id='.$_SESSION['ID'].'&success"
			        }, 100);
			</script>';
        
    }
}

function editSlide(){
    if($_SERVER['REQUEST_METHOD']=='POST'){
    	$id = $_GET['id'];
    	$title = $_POST['title'];
    	$content = $_POST['text'];
        $active = $_POST['active'];
        $date = date("Y-m-d");
        $mysqli = connect();
        $mysqli->query("UPDATE slider SET title='$title',text ='$content',active='$active' WHERE id=$id") or die($mysqli->error);
        
        $_SESSION['displayText'] = '<br>
            <div class="alert alert-success" role="alert">
              Changes saved.
            </div>';
        
        if(!empty($_FILES['Filename']['name'])){
            $target = "images/upload/";
            $target = $target . basename(  $_FILES['Filename']['name']  );

            //Writes the information to the database
            $mysqli->query("UPDATE slider SET image='$target' WHERE id=$id") ;

            //Writes the Filename to the server
            if(move_uploaded_file($_FILES['Filename']['tmp_name'], $target)) {
            //Tells you if its all ok
            echo "The file ". basename( $_FILES['Filename']['name']). " has been uploaded, and your information has been added to the directory";
            } else {
            //Gives and error if its not
            echo "Sorry, there was a problem uploading your file.";
            }
        }
        
        echo '<script>
			        var timer = setTimeout(function() {
			            window.location="./admin.php?action=slider&id='.$_SESSION['ID'].'&success"
			        }, 100);
			</script>';
        
    }
}

function addAcade(){
    if($_SERVER['REQUEST_METHOD']=='POST'){
    	$title = $_POST['title'];
    	$content = $_POST['text'];
        $active = $_POST['active'];
        $date = date("Y-m-d");
        $mysqli = connect();
        
        $_SESSION['displayText'] = '<br>
            <div class="alert alert-success" role="alert">
              Changes saved.
            </div>';
        
        if(!empty($_FILES['Filename']['name'])){
            $target = "images/upload/";
            $target = $target . basename(  $_FILES['Filename']['name']  );

            //Writes the information to the database
            $mysqli->query("INSERT INTO academics (title,content,active,image) VALUES ('$title','$content','$active','$target')") ;

            //Writes the Filename to the server
            if(move_uploaded_file($_FILES['Filename']['tmp_name'], $target)) {
            //Tells you if its all ok
            echo "The file ". basename( $_FILES['Filename']['name']). " has been uploaded, and your information has been added to the directory";
            } else {
            //Gives and error if its not
            echo "Sorry, there was a problem uploading your file.";
            }
        }
        
        echo '<script>
			        var timer = setTimeout(function() {
			            window.location="./admin.php?action=addacad&id='.$_SESSION['ID'].'&success"
			        }, 100);
			</script>';
        
    }
}

function editAcad(){
    if($_SERVER['REQUEST_METHOD']=='POST'){
    	$id = $_GET['id'];
    	$title = $_POST['title'];
    	$content = $_POST['text'];
        $active = $_POST['active'];
        $date = date("Y-m-d");
        $mysqli = connect();
        $mysqli->query("UPDATE academics SET title='$title',content ='$content',active='$active' WHERE id=$id") or die($mysqli->error);
        
        $_SESSION['displayText'] = '<br>
            <div class="alert alert-success" role="alert">
              Changes saved.
            </div>';
        
        if(!empty($_FILES['Filename']['name'])){
            $target = "images/upload/";
            $target = $target . basename(  $_FILES['Filename']['name']  );

            //Writes the information to the database
            $mysqli->query("UPDATE academics SET image='$target' WHERE id=$id") ;

            //Writes the Filename to the server
            if(move_uploaded_file($_FILES['Filename']['tmp_name'], $target)) {
            //Tells you if its all ok
            echo "The file ". basename( $_FILES['Filename']['name']). " has been uploaded, and your information has been added to the directory";
            } else {
            //Gives and error if its not
            echo "Sorry, there was a problem uploading your file.";
            }
        }
        
        echo '<script>
			        var timer = setTimeout(function() {
			            window.location="./admin.php?action=academics&id='.$_SESSION['ID'].'&success"
			        }, 100);
			</script>';
        
    }
}

function addShare(){
    if($_SERVER['REQUEST_METHOD']=='POST'){
    	$title = $_POST['title'];
    	$content = $_POST['redirect'];
        $active = $_POST['active'];
        $date = date("Y-m-d");
        $mysqli = connect();
        
        $_SESSION['displayText'] = '<br>
            <div class="alert alert-success" role="alert">
              Changes saved.
            </div>';
        
        if(!empty($_FILES['Filename']['name'])){
            $target = "images/upload/";
            $target = $target . basename(  $_FILES['Filename']['name']  );

            //Writes the information to the database
            $mysqli->query("INSERT INTO share (title,redirect,image) VALUES ('$title','$content','$target')") ;

            //Writes the Filename to the server
            if(move_uploaded_file($_FILES['Filename']['tmp_name'], $target)) {
            //Tells you if its all ok
            echo "The file ". basename( $_FILES['Filename']['name']). " has been uploaded, and your information has been added to the directory";
            } else {
            //Gives and error if its not
            echo "Sorry, there was a problem uploading your file.";
            }
        }
        
        echo '<script>
			        var timer = setTimeout(function() {
			            window.location="./admin.php?action=addshares&id='.$_SESSION['ID'].'&success"
			        }, 100);
			</script>';
        
    }
}

function editShare(){
    if($_SERVER['REQUEST_METHOD']=='POST'){
    	$id = $_GET['id'];
    	$title = $_POST['title'];
    	$content = $_POST['redirect'];
        $active = $_POST['active'];
        $date = date("Y-m-d");
        $mysqli = connect();
        $mysqli->query("UPDATE share SET title='$title',redirect ='$content' WHERE id=$id") or die($mysqli->error);
        
        $_SESSION['displayText'] = '<br>
            <div class="alert alert-success" role="alert">
              Changes saved.
            </div>';
        
        if(!empty($_FILES['Filename']['name'])){
            $target = "images/upload/";
            $target = $target . basename(  $_FILES['Filename']['name']  );

            //Writes the information to the database
            $mysqli->query("UPDATE share SET image='$target' WHERE id=$id") ;

            //Writes the Filename to the server
            if(move_uploaded_file($_FILES['Filename']['tmp_name'], $target)) {
            //Tells you if its all ok
            echo "The file ". basename( $_FILES['Filename']['name']). " has been uploaded, and your information has been added to the directory";
            } else {
            //Gives and error if its not
            echo "Sorry, there was a problem uploading your file.";
            }
        }
        
        echo '<script>
			        var timer = setTimeout(function() {
			            window.location="./admin.php?action=share&id='.$_SESSION['ID'].'&success"
			        }, 100);
			</script>';
        
    }
}

function editUniv(){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $_SESSION['displayActive'] = 'university';
    	$title = $_POST['text'];
        $mysqli = connect();
        $mysqli->query("UPDATE university SET text='$title' WHERE id=1") or die($mysqli->error);
        $_SESSION['displayText'] = '<br>
            <div class="alert alert-success" role="alert">
              Changes saved.
            </div>';
        echo 'this';
        echo '<script>
			        var timer = setTimeout(function() {
			            window.location="./admin.php?action=university&id='.$_SESSION['ID'].'&success"
			        }, 100);
			</script>';
    }
}

function addUser(){
    if($_SERVER['REQUEST_METHOD']=='POST'){
    	$title = $_POST['username'];
    	$content = $_POST['password'];
        $active = $_POST['active'];
        $mysqli = connect();
        $mysqli->query("INSERT INTO users (username,password,active) VALUES ('$title','$content','$active')") ;
        $_SESSION['displayText'] = '<br>
            <div class="alert alert-success" role="alert">
              Changes saved.
            </div>';
        
        echo '<script>
			        var timer = setTimeout(function() {
			            window.location="./admin.php?action=addusers&id='.$_SESSION['ID'].'&success"
			        }, 100);
			</script>';
        
    }
}

function editUser(){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $_SESSION['displayActive'] = 'users';
        
    	$id = $_GET['id'];
    	$password = $_POST['password'];
    	$active = $_POST['active'];
        $mysqli = connect();
        $mysqli->query("UPDATE users SET password='$password',active='$active' WHERE id=$id") or die($mysqli->error);
        $_SESSION['displayText'] = '<br>
            <div class="alert alert-success" role="alert">
              Changes saved.
            </div>';
        echo 'this';
        echo '<script>
			        var timer = setTimeout(function() {
			            window.location="./admin.php?action=users&id='.$_SESSION['ID'].'&success"
			        }, 100);
			</script>';
    }
}

function delete(){
    $id = $_GET['id'];
    $fromthis = $_GET['link'];
    $mysqli = connect();
    $mysqli->query("DELETE FROM $fromthis WHERE id=$id") or die($mysqli->error);
    $_SESSION['displayText'] = '<br>
            <div class="alert alert-success" role="alert">
              Delete successful.
            </div>';
    
    echo '<script>
			        var timer = setTimeout(function() {
			            window.location="./admin.php?action=addshares&success"
			        }, 100);
			</script>';
}

function displayActive($active, $default){
    if($active==$default)
        echo 'active';
}


function sendMail(){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $errorMSG = "";
        if (empty($_POST["name"])) {
            $errorMSG = "Name is required ";
            $pass = 0;
        } else {
            $name = $_POST["name"];
            $pass = 1;
        }
        // EMAIL
        if (empty($_POST["email"])) {
            $errorMSG .= "Email is required ";
            $pass = 0;
        } else {
            $email = $_POST["email"];
            $pass = 1;
        }
        // MESSAGE
        if (empty($_POST["subject"])) {
            $errorMSG .= "Message is required ";
            $pass = 0;
        } else {
            $Subject = $_POST["subject"];
            $pass = 1;
        }
        // MESSAGE
        if (empty($_POST["message"])) {
            $errorMSG .= "Message is required ";
            $pass = 0;
        } else {
            $message = $_POST["message"];
            $pass = 1;
        }

        if($pass){
            $EmailMe = "jftorrevillas@gmail.com";
            // prepare email body text
            $Body = "";
            $Body .= "Name: ";
            $Body .= $name;
            $Body .= "\n";
            $Body .= "Email: ";
            $Body .= $email;
            $Body .= "\n";
            $Body .= "Message: ";
            $Body .= $message;
            $Body .= "\n";

            $success = mail($EmailMe, $Subject, $Body, "From:".$email);
            // redirect to success page
            if ($success && $errorMSG == ""){
               echo "<script>alert('Message was sent successfully.');</script>";
            }else{
                if($errorMSG == ""){
                    echo "Server died. Try again... :(";
                    echo "<script>alert('Something went wrong. Try again!');</script>";
                } else {
                   echo "<script>alert('Something went wrong. Try again!');</script>";
                }
            }
        }
        else {
           echo "<script>alert('Not all fields were answered. Try again!');</script>";
        }

    }
}

//Hide all errors
error_reporting(0);
?>
