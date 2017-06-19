<!--Pages-->
<div class="tab-content">
    <div class="tab-pane active" id="about">
            <h3>Edit Share Icons</h3><br>
    <?php 
        $_SESSION['ID'] = $_GET['id'];
        $mysqli = connect();
        $idthis = $_GET['id'];
        $query = $mysqli->query("SELECT * FROM share WHERE id=$idthis");
        while($result = $query->fetch_assoc()):
    ?>
        <form method="post" action="admin.php?action=share&id=<?php echo $idthis; ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" name="title" value="<?= $result['title'] ?>" id="title" aria-describedby="title" placeholder="Enter Title">
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
        endwhile;
        if(isset($_GET['success']))
            echo  $_SESSION['displayText'];
        editShare();
   ?>
        <br><br>
        <a href="admin.php">Return to Pages</a><span> | </span>
        <a href="admin.php?action=delete&id=<?php echo $idthis; ?>&link=share">Delete</a>
    </div>
</div>
