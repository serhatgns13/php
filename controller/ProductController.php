<?php


class ProductController
{
    function products()
    {

        $title = "ürünler sayfası";
        $products = [
            ['product_id' => 1, 'name' => 'Bilgisayar', 'color_code' => 'SH', 'color_name' => 'Siyah'],
            ['product_id' => 2, 'name' => 'Kalvye', 'color_code' => 'BZ', 'color_name' => 'bEYAZ'],
            ['product_id' => 3, 'name' => 'Monitör', 'color_code' => 'SH', 'color_name' => 'Siyah'],
        ];


        require_once APP_ROOT . '/view/products.php';
    }
}