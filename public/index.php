<?php

    // configuration
    // require("../includes/config.php"); 
    
    // set up a table which we will fill from our query into portfolios
    // $positions = [];
    // $rows = CS50::query("SELECT * FROM  `portfolios` WHERE  `user_id` =?",$_SESSION["id"]);
    
    // iterate through rows of portfolios that user owns
    /*foreach ($rows as $row)
    {
        $stock = lookup($row["symbol"]);
        if ($stock !== false)
        {
            // add values to a table
            $positions[] = [
                "name" => $stock["name"],
                "price" => $stock["price"],
                "shares" => $row["shares"],
                "symbol" => $row["symbol"]
            ];
        }
        
    }*/
    
    // render portfolio
    //render("portfolio.php", ["positions" => $positions, "title" => "Portfolio", "cash" => $cash[0]["cash"]]);
    // render("profile_view.php");

?>
<?php include_once("home.html"); ?>
