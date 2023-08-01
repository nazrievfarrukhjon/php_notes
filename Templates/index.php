<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Товары</h1>
<table>
    <tr>
        <th>ID</th>
        <th>name</th>
        <th>price</th>
    </tr>
    <?php foreach ($this->products as $product) : ?>
    <tr>
        <td><?php echo $product->id; ?></td>
        <td><a href="/index.php?ctrl=Product&id=<?php echo $product->id; ?>"><?php echo $product->title; ?></a></td>
        <td><?php echo sprintf('%0.2f', $product->price); ?></td>
    </tr>
    <?php endforeach; ?>
</table>


<!--<h1>Услуги</h1>-->
<!--<table>-->
<!--    <tr>-->
<!--        <th>ID</th>-->
<!--        <th>name</th>-->
<!--        <th>price</th>-->
<!--    </tr>-->
<!--    --><?php //foreach ($this->services as $service) { ?>
<!--        <tr>-->
<!--            <td>--><?php //echo $service->id; ?><!--</td>-->
<!--            <td>--><?php //echo $service->title; ?><!--</td>-->
<!--            <td>--><?php //echo $service->price; ?><!--</td>-->
<!--        </tr>-->
<!--    --><?php //} ?>
<!--</table>-->

</body>
</html>
