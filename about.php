<?php

$name = 'Данил';
$age = '23';
$mail = 'tikkimikk666@gmail.com';
$city = 'Новокузнецк';
$newLine = '<br>';
$about = 'Я знаю немного php.' . $newLine . ' Умею работать с базой, создание базы, ее подключение, выводом, вводом, изменением и удалением записей из нее.' . $newLine . ' Хотелось бы научиться большему, понять логику и научиться самому писать код, а не копипастить. ' . $newLine . ' Научиться ООП, узнать про Yii2 и найти работу, где можно будет получить хороший опыт и знания. ' . $newLine . ' Хотелось бы еще лекций по работе с  CMS вроде 1СBitrix.';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>about</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Обо мне</h1>

    <p>
        Меня зовут <?php echo $name; ?>, мне <?php echo $age; ?> года. Я из города <?php echo $city; ?>

    </p>

    <p>
        <?php echo $about; ?>
    </p>

    <p>
        Мои контакты: <a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a>
    </p>

</div>
</body>
</html>
