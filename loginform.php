<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="./template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: lightgrey;
        }
        
        .card-1 {
            background-color: white;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
        }
        
        .card-1:hover {
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
        }

    </style>
</head>

<body>
    <!-- Page Content -->
    <div class="container" style="margin-top:25vh;">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 text-center card-1" style="padding:25px; border-radius:6px;">
                <form method="POST">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" id="Username" name="Username" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="Password" name="Password" placeholder="Password">
                    </div>
                    <?php echo $_SESSION['login-text']; ?>
                    <button type="submit" name="Submitbutton" class="btn btn-primary">Login</button>

                </form>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="./template/vendor/jquery/jquery.min.js"></script>
    <script src="./template/vendor/tether/tether.min.js"></script>
    <script src="./template/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
