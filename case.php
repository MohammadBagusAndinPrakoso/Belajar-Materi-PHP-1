<?php
/** first case */
$product = [
["name" => "Lenava", "qty" => 4, "price" => 1000000],
["name" => "Aser", "qty" => 2, "price" => 1500000],
["name" => "Toyiba", "qty" => 6, "price" => 2000000],
["name" => "Doll", "qty" => 1, "price" => 1200000],
["name" => "Susa", "qty" => 3, "price" => 1700000],
];
/** buat code untuk menghitung total jumlah yg dibeli */

function bca(){
    $product = [
    ["name" => "Lenava", "qty" => 4, "price" => 1000000],
    ["name" => "Aser", "qty" => 2, "price" => 1500000],
    ["name" => "Toyiba", "qty" => 6, "price" => 2000000],
    ["name" => "Doll", "qty" => 1, "price" => 1200000],
    ["name" => "Susa", "qty" => 3, "price" => 1700000],
    ];

    $hasil = 0;
    for($i=0 ; $i < count($product) ; $i++){
        $hasilEachItem = $product[$i]["qty"] * $product[$i]["price"];
        $hasil += $hasilEachItem;
    }

    echo "Totalnya adalah : $hasil ";
}

echo bca();

public function faktorial($angka){
    $result = 1;
    for ($i=$number; $i >= 1 ; $i--) { 
        $result = $result * $i;
    }
    return result;
}
echo "Faktorial dari 5 adalah ". faktorial(5);

/** second case
 * buat fungsi menghitung bilangan faktorial
 * faktorial(5) -> 5 * 4 * 3 * 2 * 1 = 120
 */

 /**
  * Fungsi -> Void dan Non-Void
  * Void -> Fungsi yang tidak mengembalikna nilai/value
  * Non-Void -> Fungsi yang mengembalikan nilai/value (return)

  * Analogi -> Ketua kelas meminta info tentang saldo kas
  * Fungsi hitungSaldo() -> return saldonya

  * Analogi -> Ketua kelas meminta bendahara utk narik kas 
  * Fungsi narikKas()
  */

/*function abc($x){
    $i=1;
    $hasil=$i;
    while($i<=$x){
         $hasil=$hasil * $i;
         $i++;
     }
    echo "hasilnya = ";
    echo $hasil;
}
echo abc(5);
*/


?>