<?php
if (!empty($_SESSION['userId'])) {
    $session_userId = $_SESSION['userId'];
    include('models/user.php');
    $userClass = new User();
}

if (empty($session_userId)) {   
    header("Location: ../test/index.php?controller=authentication&action=login");
}