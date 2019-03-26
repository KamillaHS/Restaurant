<?php require_once("header.php"); ?>
<?php require_once("../db/dbcon.php"); ?>
<?php //require_once("../getFromDB/SelectTables.php") ?>
<?php require_once("session.php"); ?>
<?php require_once("../getFromDB/SelectTables.php") ?>
<link rel="stylesheet" href="../css/style.css">

<div id="booking-hero"></div>

<div id="bookingForm">
    <h1>Hello There</h1>

    <?php

    if (isset($_POST['submit']) &&
        !empty($_POST['tableNum'])){

        $tableNum = $_POST['tableNum'];

        $_SESSION['tableNum'] = $_POST['tableNum'];

        $cust1 = $_SESSION['FN'];
        $cust2 = $_SESSION['LN'];
        $cust3 = $_SESSION['phone'];
        $cust4 = $_SESSION['email'];
        $cust5 = $_SESSION['time'];
        $cust6 = $_SESSION['party'];
        $cust7 = $_SESSION['tableNum'];


        $dbCon = dbCon($user, $pass);
        $sql = "INSERT INTO `customers` (`CustomerID`, `FirstName`, `LastName`, `PhoneNum`, `Email`) VALUES (NULL, '$cust1', '$cust2', '$cust3', '$cust4')";
        $query = $dbCon->prepare($sql);
        $query->execute();

        $last_id = $dbCon->lastInsertId();

        $dbCon = dbCon($user, $pass);
        $sql2 = "INSERT INTO `booking` (`TableID`, `CustomerID`, `CreatedAt`, `BookedTime`, `PartyNum`) VALUES ('$cust7', '$last_id', CURRENT_TIMESTAMP, '$cust5', '$cust6')";
        $query2 = $dbCon->prepare($sql2);
        $query2->execute();

        header("Location: bookingConfirm.php");

    }
    ?>

    <h4>Book a table</h4>

    <form role="form" action="" method="post">
        <select class="browser-default" name="tableNum" required autofocus>
            <option value="" disabled selected>Choose a table</option>
            <?php
            if($_SESSION['party'] <= 2) {
                foreach($getTables as $data) {
                    if($data['TableSize'] == 2) {
                        echo "<option value='" . $data['TableID'] . "'>Table " . $data['TableID'] . "</option>";
                    }
                }
            }
            elseif($_SESSION['party'] <= 4 && $_SESSION['party'] > 2) {
                foreach($getTables as $data) {
                    if($data['TableSize'] == 4) {
                        echo "<option value='" . $data['TableID'] . "'>Table " . $data['TableID'] . "</option>";
                    }
                }
            }
            elseif($_SESSION['party'] <= 6 && $_SESSION['party'] > 4) {
                foreach($getTables as $data) {
                    if($data['TableSize'] == 6) {
                        echo "<option value='" . $data['TableID'] . "'>Table " . $data['TableID'] . "</option>";
                    }
                }
            }
            elseif($_SESSION['party'] <= 8 && $_SESSION['party'] > 6) {
                foreach($getTables as $data) {
                    if($data['TableSize'] == 8) {
                        echo "<option value='" . $data['TableID'] . "'>Table " . $data['TableID'] . "</option>";
                    }
                }
            }
            ?>
        </select>

        <button class="waves-effect waves-light btn" id="submitBook" type="submit"
                name="submit">Continue</button>
    </form>

</div>


<?php require_once("footer.php"); ?>
