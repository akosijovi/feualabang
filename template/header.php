<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Page</title>

    <!-- Bootstrap core CSS -->
    <link href="./template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
        body {
            padding-top: 54px;
        }
        
        @media (min-width: 992px) {
            body {
                padding-top: 56px;
            }
        }
        /* Temporary navbar container fix */
        
        .navbar-toggler {
            z-index: 1;
        }
        
        @media (max-width: 576px) {
            nav>.container {
                width: 100%;
            }
        }
        
        body {
            background-color: #ddd;
        }
        
        h3 {
            margin-top: 0;
        }
        
        .badge {
            background-color: #777;
        }
        
        .tabs-left {
            margin-top: 3rem;
        }
        
        .nav-tabs {
            float: left;
            border-bottom: 0;
            display: block;
        }
        
        .nav-tabs li {
            float: none;
            margin: 0 25px 25px;
            width: 225px;
            padding: 20px;
        }
        
        .nav-tabs .glyphicon {
            color: #fff;
        }
        
        .nav-tabs .active .glyphicon {
            color: #333;
        }
        
        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:hover,
        .nav-tabs>li.active>a:focus {
            border: 0;
        }
        
        .tab-content {
            margin-left: 45px;
        }
        
        .tab-content .tab-pane {
            display: none;
            background-color: #fff;
            padding: 1.6rem;
            overflow-y: auto;
        }
        
        .tab-content .active {
            display: block;
        }
        
        .list-group {
            width: 100%;
        }
        
        .list-group .list-group-item {
            height: 50px;
            margin: 5px 0;
        }
        
        .list-group .list-group-item h4,
        .list-group .list-group-item span {
            line-height: 11px;
        }
        
        a span:hover {
            text-decoration: none;
        }
        
        .col-lg-12 .tabs-left li {
            color: black;
            background-color: white;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
        }
        
        .col-lg-12 .tabs-left  a:hover {
            text-decoration: none;
        }
        
        .col-lg-12 .tabs-left li.cool:hover {
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
        }
        
        .textLeft {
            width: 50%;
            text-align: left;
        }
        
        .textRight {
            width: 50%;
            text-align: right;
        }

    </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a class="navbar-brand" href="./admin.php">FEU Alabang</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <span class="nav-link">Welcome, <?php echo $_SESSION['username'] ?>. <span class="sr-only">(current)</span></span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="tabs-left">
