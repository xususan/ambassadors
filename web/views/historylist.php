<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Transaction</th>
                <th>Date/Time</th>
                <th>Symbol</th>
                <th>Shares</th>
                <th>Price per Share</th>
            </tr>
        </thead>   
        <tbody> 
            <?php foreach ($positions as $position): ?>
                <tr>
                    <td><?= $position["transaction"] ?></td>
                    <td>
                        <?php
                        $date = new \DateTime($position["date"], new \DateTimeZone( 'UTC' ));
                        $date->setTimezone(new \DateTimeZone( 'America/New_York' ) );
                        echo $date->format('Y-m-d H:i:s');
                        ?>
                    </td>
                    <td><?= $position["symbol"] ?></td>
                    <td><?= $position["shares"] ?></td>
                    <td><?= $position["price"] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>    
</div>

