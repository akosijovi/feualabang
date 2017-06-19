<!--                Navigation Left Menu-->
<ul class="nav nav-tabs">
    <a href="#a" data-toggle="tab">
        <li class="cool"><span class="">Pages</span></li>
    </a>
    <a href="#b" data-toggle="tab">
        <li class="cool"><span class="">Slider</span></li>
    </a>
    <a href="#c" data-toggle="tab">
        <li class="cool"><span class="">Academics</span></li>
    </a>
    <a href="?action=university">
        <li class="cool"><span class="">University</span></li>
    </a>
    <a href="?action=maps">
        <li class="cool"><span class="">Maps</span></li>
    </a>
    <a href="#f" data-toggle="tab">
        <li class="cool"><span class="">Share Icon</span></li>
    </a>
    <a href="#g" data-toggle="tab">
        <li class="cool"><span class="">Users</span></li>
    </a>
</ul>

<!--                Tabbed Content-->
<div class="tab-content">

    <div class="tab-pane <?php displayActive('pages',$_SESSION['displayActive']); ?>" id="a">
        <h3>Pages</h3><br>
        <ul class="list-group pull-left">

            <li class="list-group-item">
                <div class="textLeft"><b>Title</b></div>
                <div class="textRight"><b>Last Edit</b></div>
            </li>

            <?php
                $mysqli = connect();
                $query = $mysqli->query("SELECT * FROM pages");
                while($result = $query->fetch_assoc()):
            ?>
                <a href="?action=pages&id=<?= $result['id'] ?>">
                    <li class="cool list-group-item">
                        <div class="textLeft">
                            <?= $result['title'] ?>
                        </div>
                        <div class="textRight">
                            <?= $result['date'] ?>
                        </div>
                    </li>
                </a>
                <?php 
                endwhile;
            ?>
        </ul>
    </div>

    <div class="tab-pane <?php displayActive('slider',$_SESSION['displayActive']); ?>" id="b">

        <h3>Slider</h3><br>
        <ul class="list-group pull-left">

            <li class="list-group-item">
                <div class="textLeft"><b>Title</b></div>
                <div class="textRight"><b>Active</b></div>
            </li>

            <?php
                $mysqli = connect();
                $query = $mysqli->query("SELECT * FROM slider");
                while($result = $query->fetch_assoc()):
            ?>
                <a href="?action=slider&id=<?= $result['id'] ?>">
                    <li class="cool list-group-item">
                        <div class="textLeft">
                            <?= $result['title'] ?>
                        </div>
                        <div class="textRight">
                            <?= $result['active'] ?>
                        </div>
                    </li>
                </a>
                <?php 
                endwhile;
                ?>
            <a href="admin.php?action=addslider">Add Slide</a>
        </ul>

    </div>

    <div class="tab-pane <?php displayActive('academics',$_SESSION['displayActive']); ?>" id="c">

        <h3>Academics</h3><br>
        <ul class="list-group pull-left">

            <li class="list-group-item">
                <div class="textLeft"><b>Title</b></div>
                <div class="textRight"><b>Active</b></div>
            </li>

            <?php
                $mysqli = connect();
                $query = $mysqli->query("SELECT * FROM academics");
                while($result = $query->fetch_assoc()):
            ?>
                <a href="?action=academics&id=<?= $result['id'] ?>">
                    <li class="cool list-group-item">
                        <div class="textLeft">
                            <?= $result['title'] ?>
                        </div>
                        <div class="textRight">
                            <?= $result['active'] ?>
                        </div>
                    </li>
                </a>
                <?php 
                endwhile;
            ?>
            <a href="admin.php?action=addacad">Add Slide</a>
        </ul>

    </div>


    <div class="tab-pane <?php displayActive('share',$_SESSION['displayActive']); ?>" id="f">

        <h3>Share</h3><br>
        <ul class="list-group pull-left">

            <li class="list-group-item">
                <div class="textLeft"><b>Title</b></div>
                <div class="textRight"><b>Link</b></div>
            </li>

            <?php
                $mysqli = connect();
                $query = $mysqli->query("SELECT * FROM share");
                while($result = $query->fetch_assoc()):
            ?>
                <a href="?action=share&id=<?= $result['id'] ?>">
                    <li class="cool list-group-item">
                        <div class="textLeft">
                            <?= $result['title'] ?>
                        </div>
                        <div class="textRight">
                            <?= $result['redirect'] ?>
                        </div>
                    </li>
                </a>
                <?php 
                endwhile;
            ?>
            <a href="admin.php?action=addshares">Add Slide</a>
        </ul>
    </div>

    <div class="tab-pane <?php displayActive('users',$_SESSION['displayActive']); ?>" id="g">

        <h3>Users</h3><br>
        <ul class="list-group pull-left">

            <li class="list-group-item">
                <div class="textLeft"><b>Username</b></div>
                <div class="textRight"><b>Active</b></div>
            </li>

            <?php
                $mysqli = connect();
                $query = $mysqli->query("SELECT * FROM users");
                while($result = $query->fetch_assoc()):
            ?>
                <a href="?action=users&id=<?= $result['id'] ?>">
                    <li class="cool list-group-item">
                        <div class="textLeft">
                            <?= $result['username'] ?>
                        </div>
                        <div class="textRight">
                            <?= $result['active'] ?>
                        </div>
                    </li>
                </a>
                <?php 
                endwhile;
            ?>
            <a href="admin.php?action=addusers">Add Slide</a>
        </ul>
    </div>



</div>
