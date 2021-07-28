<?php
/**
 * 1. Define weight
 * 2. Define height
 * 3. Count BMI -> weight / (height * height)
 * 4. Show number of BMI
 * 5. Show category
 */

 $weight = 73;
 $height = 1.72;
 $bmi = $weight / ($height * $height);
 echo "Your BMI : $bmi ";
 if ($bmi < 18.5){
    echo "Kurang Berat Badan";
 } elseif ($bmi >= 18.5 && $bmi < 23){
    echo "Normal";
 } elseif ($bmi >= 23 && $bmi < 30){
    echo "Cenderung Obesitas";
 } elseif ($bmi >= 30){
     echo "Obesitas";
 }
?>