<?php

$password = $_POST[password];

if (isset($_POST['submit'])) {

    if($password == "ADMIN")
    {
        echo '<script type="text/javascript">alert("PASSWORD IS CORRECT.");';
        echo 'window.location.href = "../dashboard.php";</script>';
    }

    echo '<script type="text/javascript">alert("Referred key does not exist in the database. Please enter a valid key.");';
    echo 'window.location.href = "../admin-login.html";</script>';
    
}

?>