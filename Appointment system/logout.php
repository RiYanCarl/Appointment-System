<?php

session_start();
unset($_SESSION['Login']);
unset($_SESSION['Access']);
echo header("Location: Login.php");

