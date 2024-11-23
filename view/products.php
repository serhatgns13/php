<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>

<body>

    <h1>Ürünler sayfası ...</h1>

    <table>
        <tr>
            <th>product_id</th>
            <th>name</th>
            <th>color_code</th>
            <th>color_name</th>
        </tr>

        <?php foreach ($products as $product) { ?>

            <tr>
                <td><?php echo $product["product_id"]; ?></td>
                <td><?php echo $product["name"]; ?></td>
                <td><?php echo $product["color_code"]; ?></td>
                <td><?php echo $product["color_name"]; ?></td>
            </tr>

        <?php } ?>

    </table>

    <style>
        th,td {
            border: 1px solid #000000;
            width: 250px;
        }
    </style>

</body>

</html>