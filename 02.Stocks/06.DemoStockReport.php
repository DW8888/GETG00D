<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./format.css">
    <link rel="stylesheet" href="./format-custom.css">
    <?php
    
    
    include('./function.php');
    $ranking=get("ranking",15);
    $count = 0;
    echo "Initial Ranking: $ranking<br>";
    ?>
</head>

<body>
    <h2>Stock Rankings<span class="developer">Developer: Darwhin Gomez</span></h2>

    <form method="get">
        <label>ranking: </label> 
        <input class="number" type="number" name="ranking"
        value="<?= $ranking ?>" />
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
            include('./StocksQuery.php');
            $query=new stockQuery();
            $rows= $query->find_all();
            
            foreach($rows as $currrentRow){
                $rank = $currrentRow->get_rank();
                $symbol = $currrentRow->get_symbol();
                $companyName = $currrentRow->get_companyName();
                $quant = $currrentRow->get_quant();
                $saAuthors = $currrentRow->get_saAuthors();
                $wallStreet = $currrentRow->get_wallStreet();
                $marketCap = $currrentRow->get_marketCap();
                $marketCapInBillions=$currrentRow-> get_marketCapInBillions();


           

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
                    
           
            
            if (isset($_GET['ranking']) && $count >= $_GET['ranking']){ 

                    break;
                }
                
           

            $ranking =$count ;
         
            }
            
            ?>

        </tbody>






    </table>
</body>

</html>