<?php 

// koşullu ifadeler if -else -else if , switch case

// $products = [
//     ['product_id' => 1,'name' => 'Bilgisayar','color_code' => 'SH','color_name' => 'Siyah'],
//     ['product_id' => 1,'name' => 'Kalvye', 'color_code' => 'BZ','color_name' => 'bEYAZ'],
//     ['product_id' => 1,'name' => 'Monitör', 'color_code' => 'SH','color_name' => 'Siyah'],
// ];

// is_array anlamı dizi mi değil mi anlamına geliyor.
// if (is_array($products)) {
//     print_r($products);
// } else {
//     print "Bu Bir dizi değildir";
// }

// $products = null; // null demek tanımsız boş olduğunu söyler

// if (isset($products)) { // isset değişken var mı yokmu sorgulama
//     print_r($products);
// } else {
//     print "Bu Bir değişken tanımlı değildir";
// }


// $products = [
//     ['product_id' => 1, 'name' => 'Bilgisayar', 'color_code' => 'SH', 'color_name' => 'Siyah'],
//     ['product_id' => 2, 'name' => 'Kalvye', 'color_code' => 'BZ', 'color_name' => 'bEYAZ'],
//     ['product_id' => 3, 'name' => 'Monitör', 'color_code' => 'SH', 'color_name' => 'Siyah'],
// ];


// if (isset($products[3])) {
//     print_r($products);
// } else if (empty($products)) {
//     print "Bu Bir değişkenin değeri boştur.";
// } else {
//     print "Herhangi ir koşul sağlanamadı.";
// }

// if ($products[0]['product_id'] > 2) {
//     print($products[0]['name']);
// }


// switch ($products[2]['product_id']) {
//     case 2:
//         print ($products[1]['name']);
//         break;

//     case 1:
//         print ($products[0]['name']);
//         break;

//     case 3:
//         print ($products[2]['name']);
//         break;

//     default;
//         print (': deault koşulu çalıştı.');
//         break;
// }