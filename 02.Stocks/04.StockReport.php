<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="format.css">
    <link rel="stylesheet" href="format-custom.css">
    <?php
    $lastRanking =25;
    $count = 0;
    ?>
</head>

<body>
    <h2>Stock Rankings<span class="developer">Developer: Darwhin Gomez</span></h2>

    <form method="get">
        <label>ranking: </label> <input class="number" type="number" name="ranking"
        value="<?= isset($_GET['ranking']) ? $_GET['ranking'] : 25 ?>" />

        <input type="submit" value="query" />
    </form>

    <br />

    <table>
        <thead>
            <tr>
          

                <th>rank</th>
                <th>symbol</th>
                <th>company</th>
                <th>quant</th>
                <th>sa authors</th>
                <th>wall street</th>
                <th>market cap </th>
                <th>market cap in billions</th>
            </tr>
        </thead>
        <tbody>

            <?php
            include('function.php');
            $file = fopen("./data/TopStocks.csv", "r");
            
            $row = fgetcsv($file);
            while (!feof($file)) {

                $row = fgetcsv($file);
                $rank = $row[0];
                $symbol = $row[1];
                $companyName = $row[2];
                $quant = $row[3];
                $saAuthors = $row[4];
                $wallStreet = $row[5];
                $marketCap = $row[6];
                $marketCapInBillions=$row[6]/1_000_000_000;

                /* this logic for high;ighting rows */
                if (money_in_billions($marketCap) >= 40){
                    $HL='high-light';
                                }
                elseif (money_in_billions($marketCap)<.15){
                   $HL='high-light-red';
                    } 
                else{
                    $HL= '';
                    }

            ?>

                <tr class="<?= $HL?>">
                    <td><?= $rank ?></td>
                    <td><?= $symbol ?></td>
                    <td><?= $companyName ?></td>
                    <td class="number"><?= qpa($quant) ?></td>
                    <td class="number"><?= qpa($saAuthors) ?></td>
                    <td class="number"><?= qpa($wallStreet) ?></td>
                    <td class="number"><?= money($marketCap) ?></td>
                    <td class="number"><?= money_in_billions($marketCap) ?></td>
                </tr>

            <?php
               
                
            $count++;
                    
            $lastRanking=$count;
            
                if ($count >= $_GET['ranking']) { 

                    break;
                }
                
            }

            $lastRanking =$count ;
            fclose($file);

            ?>

        </tbody>






    </table>
</body>

</html>