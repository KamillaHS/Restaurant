<?php
foreach ($getTables as $data) {
    echo "<div id='show-single'>";

    if($data['TableSize'] == 2) {
        echo "<img src=\"assets/table2.png\" alt=''>";
        echo "<p id='table-num'>" . $data['TableID'] . "</p>";
    }
    if($data['TableSize'] == 4) {
        echo "<img src=\"assets/table4.png\" alt=''>";
        echo "<p id='table-num'>" . $data['TableID'] . "</p>";
    }
    if($data['TableSize'] == 6) {
        echo "<img src=\"assets/table6.png\" alt='''>";
        echo "<p id='table-num'>" . $data['TableID'] . "</p>";
    }
    if($data['TableSize'] == 8) {
        echo "<img src=\"assets/table8.png\" alt=''>";
        echo "<p id='table-num'>" . $data['TableID'] . "</p>";
    }

    echo "</div>";
}