<!--Pages-->
<div class="tab-content">
    <div class="tab-pane active" id="about">
        <h3>Add Academics</h3><br>
        <form method="post" action="admin.php?action=addusers" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" name="username"  id="username" aria-describedby="username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" class="form-control" name="password"  id="password" aria-describedby="password" placeholder="Enter Password">
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Active</label>
                <input type="number" min="0" max="1" class="form-control" name="active" id="active" aria-describedby="active" placeholder="Is Active?">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    <?php 
        if(isset($_GET['success']))
            echo  $_SESSION['displayText'];
       addUser();
   ?>
        <br><br>
        <a href="admin.php">Return to Pages</a>
    </div>
</div>
