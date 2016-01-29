<?php
    
    // create a table and get query to fill up table with
    $positions = [];
    $rows = CS50::query("SELECT * FROM  `history` WHERE  `user_id` =?",$_SESSION["id"]);

    // iterate through the results of the query
    foreach ($rows as $row)
    {
        $stock = lookup($row["symbol"]);
        if ($stock !== false)
        {
            // add to positions[]
            $positions[] = [
                "transaction" => $row["action"],
                "date" => $row["datetime"],
                "symbol" => $row["symbol"],
                "shares" => $row["shares"],
                "price" => $row["price"]
            ];
        }
        
    }
    
    // render history
    render("historylist.php", ["positions" => $positions, "title" => "History"]);
    
?>
