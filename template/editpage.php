<!--Pages-->
<div class="tab-content">
    <div class="tab-pane active" id="about">
            <h3>Edit Page</h3><br>
    <?php 
        $_SESSION['ID'] = $_GET['id'];
        $mysqli = connect();
        $idthis = $_GET['id'];
        $query = $mysqli->query("SELECT * FROM pages WHERE id=$idthis");
        while($result = $query->fetch_assoc()):
    ?>
        <form method="post" action="admin.php?action=pages&id=<?php echo $idthis; ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" name="title" value="<?= $result['title'] ?>" id="title" aria-describedby="title" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="exampleTextarea">Content</label>
                <textarea class="form-control" id="content" rows="3" name="content"><?= $result['content'] ?></textarea>
            </div>
            <?php if($idthis==1){?>
            <div class="form-group">
                <label for="exampleInputEmail1">Image(Optional)</label>
                <input type="file" class="form-control" name="Filename" id="Filename" aria-describedby="Filename">
            </div><?php } ?>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    <?php 
        endwhile;
        if(isset($_GET['success']))
            echo  $_SESSION['displayText'];
        editPage();
   ?>
        <br><br>
        <a href="admin.php">Return to Pages</a>
    </div>
</div>
