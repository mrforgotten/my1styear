<?php
    $kai = $_POST["number1"];
    $ped = $_POST["number2"];
    $price1 = $_POST["price1"];
    $price2 = $_POST["price2"];
    $total = $kai*$price1 + $ped*$price2;
    echo "Kai ",$price1," THB", " order ",$kai; ?><br>
    <?php echo "Ped ",$price2," THB", " order ",$ped; ?><br>
    <?php echo "TAX 7%"; ?><br>
    <?php echo "Total ",$total-$total*0.07," THB";?>
<br>