<?php //require_once("../db/dbcon.php"); ?>
<?php //require_once("../getFromDB/SelectTables.php") ?>
<?php require_once("session.php"); ?>

<div id="bookingForm">

    <?php
    $msg = '';

    if (isset($_POST['submit']) &&
        !empty($_POST['firstname']) &&
        !empty($_POST['lastname']) &&
        !empty($_POST['phone']) &&
        !empty($_POST['email'])){

            $firstName = $_POST['firstname'];
            $lastName = $_POST['lastname'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];

//        $dbCon = dbCon($user, $pass);
//        $query = $dbCon->prepare("INSERT INTO customers (`CustomerID`, `FirstName`, `LastName`, `PhoneNum`, `Email`) VALUES (NULL, '$firstName', '$lastName', '$phone', '$email')");
//        $query->execute();

//    $query2 = $dbCon->prepare("SELECT `CustomerID` FROM `customers` WHERE `PhoneNum` = '{$phone}' LIMIT 1");
//    $query2->execute();

        $_SESSION['FN'] = $_POST['firstname'];
        $_SESSION['LN'] = $_POST['lastname'];
        $_SESSION['phone'] = $_POST['phone'];
        $_SESSION['email'] = $_POST['email'];

        header("Location: includes/bookingForm2.php");

    }
    ?>

    <h4>Book a table</h4>

    <form role="form" action="" method="post">
        <input type="text" name="firstname" placeholder="First name" required autofocus>
        <br>
        <input type="text" name="lastname" placeholder="Last name" required>
        <br>
        <input type="number" name="phone" placeholder="Phone number" required>
        <br>
        <input type="email" name="email" placeholder="Email" required>
        <br>

        <button class="waves-effect waves-light btn" id="submitBook" type="submit"
                name="submit">Continue</button>
    </form>


</div>



