<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $url = 'https://api.mercadolibre.com/products/search?status=active&site_id=MLB&q=samsung#json';
        $ch = curl_init($url);
        $resultado = curl_exec($ch);
        var_dump($resultado);
    ?>
</body>
</html>