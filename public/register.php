<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // Inform registrants of their registration errors
        
        if ($_POST["username"] == NULL)
        {
            apologize("Error: Username not entered");
        }
        
        // if password is empty
        else if ($_POST["password"] == NULL )
        {
            apologize("Error: Password not entered");
        }
        
        // if passwords do not match
        else if ($_POST["password"] != $_POST["confirmation"])
        {
            apologize("Error: Password and confirmation do not match.");
        }
        
        $result = CS50::query("INSERT IGNORE INTO users (username, hash, name, college) VALUES(?, ?, ?, ?)", $_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT), $_POST["name"], $_POST["college"]);
        
        if ($result == 0)
        {
            apologize("Failed to register. User already exists");
        }
        // yay, inserted into table!
        $rows = CS50::query("SELECT LAST_INSERT_ID() AS id");
        $_SESSION["id"] = $rows[0]["id"];
        redirect("/");
    }

?>