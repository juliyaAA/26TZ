
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <?php
        if(!isset($_GET['name'])) {
            echo 'Извините, произошла ошибка.';
        } else {
        echo 'Спасибо,' . $_GET['name'] .', мы свяжемся с вами в ближайшее время.';
        }
       
    ?>

        
    </body>
    </html>