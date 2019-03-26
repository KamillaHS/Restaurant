
<?php require_once("/../getFromDB/SelectRestaurant.php"); ?>
<?php require_once("showRestaurant.php"); ?>

<!doctype html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

<header>
    <nav>
        <div class="nav-wrapper">
            <div id="logo-box">
                <img src="<?php echo $restLogo; ?>" alt="">
                <a href="/dbAssignments/Restaurant/" class="brand-logo left">The Restaurant</a>
            </div>
            <div id="nav-box">
                <ul id="nav-items" class="right">
                    <li><a href="/dbAssignments/Restaurant/tables.php">View Tables</a></li>
                    <li><a class="waves-effect waves-light btn" id="signup-button" href="/dbAssignments/Restaurant/bookTable.php">Book Table</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>