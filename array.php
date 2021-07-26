<?php
/**
 * array adalah kumpulan nilai yang berjenis sama
 * setiap data punya posisi yang disebut index (start from 0)
 * 
 * variabel -> individu
 * array -> populasi
 */
// $student = "Bill Gates";
// $siswa = ["John Cena","The Rock","Batista","Rey Mysterio"];
// echo $siswa[3];

// array numeric -> array yang indexnya berupa numerik
// array assosiative -> array yang indexnya berupa string

// array digunakan saat ada yang bisa di kelompokkan 
$person1_nama = "Gopal";
$person1_address = "Madrid";
$person1_age = 40;



$person = [
    [ "name" => "Gopal","address" => "Madrid", "age" => 40], 
    [ "name" => "Kaizo", "address" => "Saturnus", "age" => 80],
    [ "name" => "Kokochi","address" => "Pluto", "age" => 20]
];

echo $person[1]["name"];
?>