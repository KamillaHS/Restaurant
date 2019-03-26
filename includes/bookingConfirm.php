<?php require_once("header.php"); ?>
<?php require_once("session.php"); ?>
<link rel="stylesheet" href="../css/style.css">

    <div id="booking-hero"></div>

<div id="bookingForm">
    <h2>Booking completed</h2>
    <p>Below, you can see your booking information.</p>

    <div id="completed-info">
        <?php
            if(!empty($_SESSION)) {
                echo "<b>Name:</b> " . $_SESSION['FN'] . " " . $_SESSION['LN'];
                echo "<br>";
                echo "<b>Phone number:</b> " . $_SESSION['phone'];
                echo "<br>";
                echo "<b>Email:</b> " . $_SESSION['email'];
                echo "<br>";
                echo "<b>Booked time:</b> " . $_SESSION['time'];
                echo "<br>";
                echo "<b>Number of people in party:</b> " . $_SESSION['party'];
                echo "<br>";
                echo "<b>Booked table:</b> " . $_SESSION['tableNum'];
            }
            else {
                echo "You have not made a booking, or you have reloaded the site.";
            }
        ?>
    </div>
</div>

<?php require_once("footer.php"); ?>
<?php include_once("endsession.php"); ?>
