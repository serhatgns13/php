<?php

// $veriable = "Eren CnnetKuşu & Efe Hoca";
// $arg1     = 20;
// $arg2     = '20';

// if ($arg1 === $arg2) {
//     print "eşittir.";
// }else if($arg1 > $arg2){
//     print $arg1 . ' : büyüktür.';
// }else if($arg1< $arg2){
//     print $arg1 . ' küçüktür ' . $arg2;
// }else{
//     print "koşul dışı...";
// }

// $variable = "kasım yüksel & Eren Cennetkulşu";
// $args1 = 1;
// $args2 = 20;

// print $args1 += $args2; // gelen sonuç 1 + 20 = 21
// print $args1 += 50; // Değişken değilde direk değer vermemiz ile toplama yapa biliyoruz sonuç 51
// print $args1 .= 50; // .=  gelen veri ile 50 birleştirme sonuç 150
// print $args1 -= 50; // -= eksi değince veri eksiltme çıkan sonuç 49

// Diziler

// $array = [] = array(); // her ikiside dizi aynı şey

// $array = array(
//     "foo" => "bar",
//     "bar" => "foo",
// );

// $array = [
//     "product" => "Bilgisayar",
//     "color" => "Siyah",
// ];

// $array = [

//    'products' => ["product" => "Bilgisayar", "Color" => "Siyah","İşlemci tipi" => ["i7","RYZEN 7"]],
//    'books' => ["product" => "Kitap", "color" => "Byeaz"],

// ];

// $array = [

//    "Bilgisayar", // Tek boyutlu diziler
//    "Siyah"

//  ];


// print_r($array)

// var_dump($array);


// foreach , for, while  dizileri döngüleri çeviriyoruz 

// foreach ($array as $key => $value) {
//     if ($key !== "products") {
//         print "Anahtar : " . $key . " Değer : " . $value. "<hr/>";
//     }

// }

// print count($array);
// exit;

// for ($i = 0; $i <count($array); $i++) { 
//     print $array[$i] . '<hr/>';
// }

// $array = [

//     "Bilgisayar", // Tek boyutlu diziler
//     "Kitap",
//     "Defter",
//     "Kalem",
//     "Silgi",
//     "Çanta",
//     "Defter"

//   ];

//   $a = 0;

// while ($a <= 6) {
//     print $array[$a] . '<hr/>';
//     $a++;
// }

// $a = 25;
// $b = 20;

//print($a > $b) ? 'Büyüktür. ' : 'Değildir';

//  $a = "";
//  $b = 20;

// null kontrol
// print $a ?? 'Değersiz.';

// print $a ?: 'değersiz.';

// $array =
// [
//     "Bilgisayar", // Tek boyutlu diziler
//     "Kitap",
//     "Defter",
//     "Kalem",
//     "Silgi",
//     "Çanta",
//     "Defter"
//   ];

//   $new_array = array_map(function($item) {
//     return 'Kırtasiye : '.$item;
// }, $array);

// var_dump($new_array);

// $string = "Bilgisayar,Kitap,Defter,Kalem,Silgi,Çanta,Defter";

// $array = explode(',',$string);

// print_r($array);

//  $array =
//  [
//      "Bilgisayar", // Tek boyutlu diziler
//      "Kitap",
//      "Defter",
//      "Kalem",
//      "Silgi",
//      "Çanta",
//      "Defter"
// ];

// unset($array[4]); // veri silme

// $string = implode(' . ',$array);

// print_r($array);


// print_r($_GET); 

// require_once __DIR__ . '/config.php'; // dosyayı içeriye aktar bazı yerlede dosya aktarsamda sen bir kere olarak aktar anlamına geliyor
// print(APP_URL);
// print('<hr/>');
// print(APP_ROOT);


// Döngüler for, fereach , while


// for ($i = 0; $i < count($products); $i++) {

//     print $products[$i]['product_id'] . ' ' . $products[$i]['name'];

//     print "<hr/>";
// }

// $products = [
//     ['product_id' => 1, 'name' => 'Bilgisayar', 'color_code' => 'SH', 'color_name' => 'Siyah'],
//     ['product_id' => 2, 'name' => 'klavye', 'color_code' => 'BZ', 'color_name' => 'Beyaz'],
//     ['product_id' => 3, 'name' => 'Monitör', 'color_code' => 'SH', 'color_name' => 'Siyah'],
// ];

// foreach ($products as $key => $product) {
//     print $product['product_id'] . '<br/>';
//     print $product['name']. '<br/>';
//     print $product['color_code']. '<br/>';
//     print $product['color_name']. '<br/>';
//     print('<hr/>');
// }

require_once __DIR__ . '/config.php';
require_once APP_ROOT . '/controller/HomeController.php';
require_once APP_ROOT . '/controller/ProductController.php';


if ($_SERVER['REQUEST_URI'] == '/') {

    $HomeController = new HomeController();
    $HomeController->index();

    // require_once APP_ROOT . '/view/start.php';
} else if ($_SERVER['REQUEST_URI'] == '/products') {
    // require_once APP_ROOT . '/view/products.php';
    $PorductController = new $PorductController();

    $PorductController->product();

} else {
    require_once APP_ROOT . '/view/404.php';
}