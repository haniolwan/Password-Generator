<?php

// $symbols = $_POST['symbols'];
// echo "true";

if (isset($_POST['submit']) && !empty($_POST['submit'])) {
    header("Location:index.php");
    echo "true";
} else {
}
