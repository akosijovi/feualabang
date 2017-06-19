<!--Pages-->
<div class="tab-content">
    <div class="tab-pane active" id="about">
            <h3>Edit Slide</h3><br>
    <?php 
        $_SESSION['ID'] = $_GET['id'];
        $mysqli = connect();
        $idthis = $_GET['id'];
        $query = $mysqli->query("SELECT * FROM slider WHERE id=$idthis");
        while($result = $query->fetch_assoc()):
    ?>
        <form method="post" action="admin.php?action=slider&id=<?php echo $idthis; ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" name="title" value="<?= $result['title'] ?>" id="title" aria-describedby="title" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="exampleTextarea">Text</label>
                <textarea class="form-control" id="text" rows="3" name="text"><?= $result['text'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Image(Optional)</label>
                <input type="file" class="form-control" name="Filename" id="Filename" aria-describedby="Filename">
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Active</label>
                <input type="number" min="0" max="1" class="form-control" name="active" value="<?= $result['active'] ?>" id="active" aria-describedby="active" placeholder="Is Active?">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    <?php 
        endwhile;
        if(isset($_GET['success']))
            echo  $_SESSION['displayText'];
        editSlide();
   ?>
        <br><br>
        <a href="admin.php">Return to Pages</a><span> | </span>
        <a href="admin.php?action=delete&id=<?php echo $idthis; ?>&link=slider">Delete</a>
    </div>
</div>
