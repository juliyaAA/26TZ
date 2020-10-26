<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function isValid($value)
    {
        return isset($value) && $value != '';
    }

    if (!isValid($_GET['name'])) {
        echo 'Укажите имя!';
    } else if (!isValid($_GET['phone'])) {
        echo 'Укажите номер телефона!';
    } else {
        echo 'Спасибо,' . $_GET['name'] . ', мы свяжемся с вами в ближайшее время.';
    }


    ?>


</body>

</html>