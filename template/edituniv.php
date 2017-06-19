<div class="tab-content">
    <div class="tab-pane active" id="about">

            <h3>University Tour Video</h3><br>
            <ul class="list-group pull-left">

                <?php 
                $_SESSION['ID'] = 1;
                $mysqli = connect();
                $query = $mysqli->query("SELECT * FROM university WHERE id=1");
                while($result = $query->fetch_assoc()):
            ?>
                <form method="post">
                    <div class="form-group">
                        <label for="exampleTextarea">Embed Code</label>
                        <textarea class="form-control" id="content" rows="3" name="content"><?= $result['text'] ?></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
                <?php 
                endwhile;
                if(isset($_GET['success']))
                    echo  $_SESSION['displayText'];
                editUniv();
           ?>
                <br><br>
                <a href="admin.php">Return to Pages</a>
            </ul>
    </div>
</div>
