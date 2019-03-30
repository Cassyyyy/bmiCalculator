<?php
  $gewicht = $_GET["gewicht"];
  $lengte  = $_GET["lengte"];
  BMIcalc($gewicht, $lengte);
  function BMIcalc($gewicht, $lengte){
    $lengte         = $lengte / 100;
    $bmi            = $gewicht / ($lengte * $lengte);
    $bmi            = round($bmi,1);
    switch ($bmi){
      case $bmi < 18.5:
        $text = "U heeft ondergewicht";
        break;
      case $bmi < 25:
        $text = "U heeft een normaal gewicht";
        break;
      case $bmi < 27:
        $text = "U heeft licht overgewicht";
        break;
      case $bmi < 30:
        $text = "U heeft licht overgewicht";
        break;
      case $bmi < 40:
        $text = "U heeft licht overgewicht";
        break;
      default:
        $text = "U heeft morbide obesitas";
        break;
    }
    echo "Uw BMI is: $bmi" . " - " . "$text";
  }
?>
