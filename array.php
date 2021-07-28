<?php
/**
 * Array adalah kumpulan nilai yang berjenis sama
 * Setiap data punya posisi yang disebut "index" (start from 0)
 * 
 * variabel -> individu
 * array -> populasi
 */

 // $student = "Bill Gates";
 // $siswa = ["John Cena", "The Rock", "Batista", "Rey Mysterio"]
 // echo $siswa[3];

 // Array Numeric -> Array yang index-nya berupa numerik/angka
 // Array ASssosiative -> Array yang index-nya berupa String

 $person = [
    ["name" => "Gopal", "address" => "Madrid", "age" => 40],
    ["name" => "Kaizo", "address" => "Saturnus", "age" => 80],
    ["name" => "Kokochi", "address" => "Pluto", "age" => 20],
];

echo $person[2]["address"];
?>