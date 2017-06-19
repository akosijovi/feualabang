<!--Pages-->
<div class="tab-content">
    <div class="tab-pane active" id="about">
            <h3>Edit Users</h3><br>
    <?php 
        $_SESSION['ID'] = $_GET['id'];
        $mysqli = connect();
        $idthis = $_GET['id'];
        $query = $mysqli->query("SELECT * FROM users WHERE id=$idthis");
        while($result = $query->fetch_assoc()):
    ?>
        <form method="post" action="admin.php?action=users&id=<?php echo $idthis; ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" name="username" value="<?= $result['username'] ?>" id="username" aria-describedby="username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="exampleTextarea">Password</label>
                <input type="password"  class="form-control" id="password" value="<?= $result['password'] ?>" name="password" placeholder="Enter password">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Active</label>
                <input type="number" min="0" max="1" class="form-control" value="<?= $result['active'] ?>" name="active" id="active" aria-describedby="active" placeholder="Is Active?">
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    <?php 
        endwhile;
        if(isset($_GET['success']))
            echo  $_SESSION['displayText'];
        editUser();
   ?>
        <br><br>
        <a href="admin.php">Return to Pages</a>
<!--
        <span> | </span>
        <a href="admin.php?action=delete&id=<?php echo $idthis; ?>&link=users">Delete</a>
-->
    </div>
</div>
