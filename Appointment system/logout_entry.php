<?php

session_start();
$_SESSION['ID'] = $row['id'];
unset($_SESSION['Login-entry']);
unset($_SESSION['email']);
unset($_SESSION['contact_No']);
// unset($_SESSION['Access']);
// $_SESSION['Login'] = $row['last_name'];
// $_SESSION['Login'] = $row['email'];
// $_SESSION['Login'] = $row['contact_No'];
echo header("Location: Dashboard.php");

