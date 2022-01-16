<?php
include 'links.html';

$con = mysqli_connect("localhost", "root", "", "post");

if (!$con) {
    echo '<h3 class="alert alert-danger text-center">Unable To Connect To MYsql Database. Please check details in connection.php</h3>';
}
