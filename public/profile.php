<?php

    //configuration
    include("../includes/config.php");

    $user = query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]); 

    render2("../templates/profile_template.php", ["user" => $user]);

?>
