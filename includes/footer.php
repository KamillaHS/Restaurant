
<?php require_once("/../getFromDB/SelectRestaurant.php"); ?>
<?php require_once("showRestaurant.php"); ?>

<footer class="page-footer">
    <b>Address: </b><?php echo $restAddress ?>
    <br>
    © 2019 Copyright <b>The Restaurant</b>
    <div>
        <a class="waves-effect waves-light btn" id="admin-button" href="/dbAssignments/Restaurant/admin.php">Admin</a>
    </div>
</footer>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>