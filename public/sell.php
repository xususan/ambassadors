<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $stocksbought = CS50::query("SELECT symbol FROM  `portfolios` WHERE  `user_id` =?",$_SESSION["id"]);
        
        // render form
        render("sell_form.php", ["title" => "Sell", "stocks" => $stocksbought]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $rows = CS50::query("SELECT * FROM portfolios WHERE user_id = ? AND symbol = ?", $_SESSION["id"], $_POST["symbol"]);
        if ($rows === false)
        {
            apologize("Error: Shares do not exist");
        }
        
        // yay, shares bought!
        $shares = $rows[0]["shares"];
        $price = lookup($_POST["symbol"])["price"];
        $value = $price * $shares;
        
        // update portfolios (shares have been sold)
        CS50::query("DELETE FROM portfolios WHERE user_id = ? AND symbol = ?", $_SESSION["id"], $_POST["symbol"]);
        
        // update cash amount
        CS50::query("UPDATE users SET cash = cash + ? WHERE id = ?", $value, $_SESSION["id"]);
        
        // update history
        CS50::query("INSERT INTO history (user_id, symbol, shares, action, price, datetime) VALUES (?, ?, ?, 'SELL', ?, NOW())", $_SESSION["id"],$_POST["symbol"], $shares, $price);
        redirect("/");
}

?>