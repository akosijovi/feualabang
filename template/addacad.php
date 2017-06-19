<!--Pages-->
<div class="tab-content">
    <div class="tab-pane active" id="about">
        <h3>Add Academics</h3><br>
        <form method="post" action="admin.php?action=addacad" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" name="title"  id="title" aria-describedby="title" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="exampleTextarea">Text</label>
                <textarea class="form-control" id="text" rows="3" name="text"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Image(Optional)</label>
                <input type="file" class="form-control" name="Filename" id="Filename" aria-describedby="Filename">
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
       addAcade();
   ?>
        <br><br>
        <a href="admin.php">Return to Pages</a>
    </div>
</div>
