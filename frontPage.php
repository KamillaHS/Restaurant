<?php require_once("includes/header.php") ?>
<?php require_once("getFromDB/SelectRestaurant.php"); ?>
<?php require_once("includes/showRestaurant.php"); ?>


    <div id="front-hero">
        <div id="inner-hero">
            <img id="hero-logo" src="<?php echo $restLogo; ?>" alt="">
            <h1 id="hero-title">The Restaurant</h1>
            <p id="hero-sub-title"><?php echo $restStars ?> / 5 Stars</p>
            <a id="hero-button" class="waves-effect waves-light btn" href="/dbAssignments/Restaurant/bookTable.php">Book a table now</a>
        </div>
    </div>


<?php require_once("includes/footer.php") ?>