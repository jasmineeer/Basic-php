<?php
// menghitung BMI
/**
 * 1. Define weight
 * 2. Define height
 * 3. Count BMI -> weight / height * height
 * 4. Show number of BMI
 * 5. Show the category
 */

 $weight = 40;
 $height = 1.5;
 $bmi = $weight / $height * $height;
 echo "Your BMI: $bmi \n";
 if ($bmi < 18.5) {
     echo "Kurang berat badan";
 } elseif ($bmi >= 18.5 && $bmi < 23) {
     echo "Normal";
 } elseif ($bmi >= 23 && $bmi < 30) {
     echo "Cenderung obesitas";
 } elseif ($bmi >= 30) {
     echo "Obesitas";
 }
?>