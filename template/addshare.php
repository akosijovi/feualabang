<!--Pages-->
<div class="tab-content">
    <div class="tab-pane active" id="about">
        <h3>Add Share Icons</h3><br>
        <form method="post" action="admin.php?action=addshares" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" name="title"  id="title" aria-describedby="title" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="exampleTextarea">Link</label>
                <input type="text"  class="form-control" id="redirect"  name="redirect" placeholder="Enter Link">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Image(Optional)</label>
                <input type="file" class="form-control" name="Filename" id="Filename" aria-describedby="Filename">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    <?php 
        if(isset($_GET['success']))
            echo  $_SESSION['displayText'];
       addShare();
   ?>
        <br><br>
        <a href="admin.php">Return to Pages</a>
    </div>
</div>
