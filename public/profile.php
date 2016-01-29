<?php

// configuration
require("../includes/config.php"); 

$row = CS50::query("SELECT * FROM  `users` WHERE  `user_id` =?",$_SESSION["id"]);
render("profile_view.php", ["name" => $row[0]["name"], "college" => $row[0]["college"], "points" => $row[0]["points"]]);

?>