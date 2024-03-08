<?php


class stockQuery{

    function find_all(){include("./Stocks.php");
 $file = fopen("./data/TopStocks.csv", "r");

 $rows=[];
            
 $currrentRow = fgetcsv($file);
 while (!feof($file)) {

     $currrentRow = fgetcsv($file);
     $rank = $currrentRow[0];
     $symbol = $currrentRow[1];
     $companyName = $currrentRow[2];
     $quant = $currrentRow[3];
     $saAuthors = $currrentRow[4];
     $wallStreet = $currrentRow[5];
     $marketCap = (float)$currrentRow[6];
     $marketCapInBillions=(float)$currrentRow[6] /1_000_000_000;

     $aStock = new Stock($rank,$symbol,$companyName,$quant,$saAuthors,$wallStreet,$marketCap,$marketCapInBillions);
     $rows[]= $aStock;

 }
fclose($file);
return $rows;
    }
}


?>