<?php include('header.php'); 

if($_SESSION['displayAdmin'] == "login"){
    
}

elseif($_SESSION['displayAdmin'] == "default"){
    include('template-admin.php');
}

elseif($_SESSION['displayAdmin'] == "pages"){
    include('editpage.php');
}

elseif($_SESSION['displayAdmin'] == "slider"){
    include('editslide.php');
}

elseif($_SESSION['displayAdmin'] == "addSlide"){
    include('addslide.php');
}
elseif($_SESSION['displayAdmin'] == "acad"){
    include('editacad.php');
}

elseif($_SESSION['displayAdmin'] == "addAcad"){
    include('addacad.php');
}
elseif($_SESSION['displayAdmin'] == "share"){
    include('editshare.php');
}

elseif($_SESSION['displayAdmin'] == "addshares"){
    include('addshare.php');
}
elseif($_SESSION['displayAdmin'] == "user"){
    include('edituser.php');
}

elseif($_SESSION['displayAdmin'] == "adduser"){
    include('adduser.php');
}

elseif($_SESSION['displayAdmin'] == "university"){
    include('edituniv.php');
}

elseif($_SESSION['displayAdmin'] == "maps"){
    include('editmaps.php');
}

include('footer.php'); ?>