<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("changepw_form.php", ["title" => "Change Password"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // check that all fields have some entry
        if ($_POST["newpw"] == NULL || $_POST["confirmation"] == NULL)
        {
            apologize("You must enter a password into all fields");
        }
        
        // query information from users
        $rows = CS50::query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);
        $row = $rows[0];
        
        // check if old password matches up
        if (password_verify($_POST["oldpw"], $row["hash"]) != true)
        {
            apologize("Wrong password");
        }
        
        // new password match
        if ($_POST["newpw"] !== $_POST["confirmation"] )
        {
            apologize("New password must match confirmation.");
        }
        
        // check for any errors while updating
        if (CS50::query("UPDATE users SET hash = ? WHERE id = ?", password_hash($_POST["newpw"], PASSWORD_DEFAULT), $_SESSION["id"]) == 0)
        {
            apologize("An error occured while updating your password.");
        }
        
        redirect("/");
        
    }

?>