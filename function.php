<?php



function calculatePremiumPrice($basicPrice) {
   
    $premiumPrice = $basicPrice * 10;
    
  
    return $premiumPrice;
}


$basicPrice = 9.99;
$premiumPrice = calculatePremiumPrice($basicPrice);

?>