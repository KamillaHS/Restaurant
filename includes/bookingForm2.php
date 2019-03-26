<?php require_once("header.php"); ?>
<?php require_once("session.php"); ?>
<link rel="stylesheet" href="../css/style.css">

<div id="booking-hero"></div>

    <div id="bookingForm">
        <h1>Hello There</h1>

        <?php

        echo $_SESSION['FN'];
        echo "<br>";
        echo $_SESSION['LN'];
        echo "<br>";
        echo $_SESSION['phone'];
        echo "<br>";
        echo $_SESSION['email'];


        if (isset($_POST['submit']) &&
            !empty($_POST['bookingTime']) &&
            !empty($_POST['party'])){

            $bookingTime = $_POST['bookingTime'];
            $party = $_POST['party'];

            $_SESSION['time'] = $_POST['bookingTime'];
            $_SESSION['party'] = $_POST['party'];

            header("Location: bookingForm3.php");

        }
        ?>

        <h4>Book a table</h4>

        <form role="form" action="" method="post">
            <input type="datetime-local" name="bookingTime" required autofocus>
            <br>
            <input type="number" name="party" placeholder="Party number" required>
            <p>When you press "Continue", you will get a list of available tables for the number of people in your party.</p>
            <br>

            <button class="waves-effect waves-light btn" id="submitBook" type="submit"
                    name="submit">Continue</button>
        </form>


<!--            <form role="form" action="" method="POST">-->
<!--                <label for="tableNum"></label>-->
<!--                <input type="number" name="tableNum" placeholder="1">-->
<!--                <label for="bookingTime"></label>-->
<!--                <input type="datetime-local" name="bookingTime">-->
<!--                <br>-->
<!--                <label for="party"></label>-->
<!--                <input type="number" name="party" placeholder="2">-->
<!--                <br><br>-->
<!--                <button type="button" name="submit" class="waves-effect waves-light btn" id="submitBook">Submit</button>-->
<!--            </form>-->
    </div>

<?php

//if (isset($_POST['submit'])) {

//        $firstName = $_POST['firstName'];

//    $lastName = $_POST['lastName'];
//    $phone = $_POST['phone'];
//    $email = $_POST['email'];
//    $tableNum = $_POST['tableNum'];
//    $bookingTime = $_POST['bookingTime'];
//    $party = $_POST['party'];

//    $dbCon = dbCon($user, $pass);
//    $query = $dbCon->prepare("INSERT INTO customers (`CustomerID`, `FirstName`, `LastName`, `PhoneNum`, `Email`) VALUES (NULL, '$firstName', '$lastName', '$phone', '$email')");
//    $query2 = $dbCon->prepare("INSERT INTO `booking` (`TableID`, `CustomerID`, `CreatedAt`, `BookedTime`, `PartyNum`) VALUES ('$tableNum', NULL, CURRENT_TIMESTAMP, '$bookingTime', '$party')");
//    $query->execute();
//    $query2->execute();
//    echo "You booked the table";

//    echo $firstName;

//}
//else{
//    echo "Error???";
//}

?>

<?php require_once("footer.php"); ?>
