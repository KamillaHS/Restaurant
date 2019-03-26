<?php require_once("includes/header.php") ?>


    <div id="table-hero"></div>
    <div id="bookingForm">
        <h2>Search based on Customer</h2>
        <p>Search by phone number to get a list of bookings for the specific customer</p>
        <form role="form" action="" method="post">
            <input type="number" name="phone" placeholder="12345678" required>
            <br>

            <button class="waves-effect waves-light btn" id="searchPhone" type="submit"
                    name="submit">Search</button>
        </form>
    </div>
    <div id="bookingForm">
        <h2>Search based on Table</h2>
        <p>Search by table number to get a list of bookings for the specific table</p>
        <form role="form" action="" method="post">
            <input type="number" name="tablenum" placeholder="2" required>
            <br>

            <button class="waves-effect waves-light btn" id="searchNum" type="submit"
                    name="submit">Search</button>
        </form>
    </div>


<?php require_once("includes/footer.php") ?>