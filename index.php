<?php
ini_set ('display_errors', 1);
ini_set ('display_startup_errors', 1);
error_reporting (E_ERROR);
?>
<!DOCTYPE html>
<html>
<head>  
    <meta charset="utf-8">
    <title>
        Онлайн-магазин
    </title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header>
        <div id="headerinside">
            <div id="logo"></div>
            <div id="companyname">Brand</div>
            <div id="navWrap">
                <a href="#">Главная</a>
                <a href="#">Магазин</a>
            </div>
        </div>
    </br>
    </header>
    <div id="content">
<div id="content">
<?php
    $goods = [
       [ 'id' => 1,
        'name' => 'Iphone',
        'desc' => 'Iphone Description',
        'img' => '/images/origami-logo.svg',
        'price' => '2000 $'
        ],
        [
        'id' => 2,
        'name' => 'HTC',
        'desc' => 'HTC Description',
        'img' => '/images/origami-logo.svg',
        'price' => '1200$'
        ],
        [
        'id' => 3,
        'name' => 'Samsung',
        'desc' => 'Samsung Description',
        'img' => '/images/origami-logo.svg',
        'price' => '1400$'
        ]
    ];

    
    $page = $_GET['page'];
    if (!isset($page)) {
        echo 'Main page content';
    } elseif ($page == 'shop'){
        echo 'Goods catalog';
    } elseif ($page == 'product'){
        echo 'Product page';
    }


    // echo $goods[1]['name'] . '<br>';
    // echo $goods[2]['price'] . '<br>';

    // foreach($goods as $key => $good) {
    //     echo 'Massiv key:' . $key . '<br>';
    //     echo $good ['id'] . '<br>';
    //     echo $good['name'] . '<br>';
    //     echo $good['desc'] . '<br>';
    //     echo $good['img'] . '<br>';
    //     echo $good['price'] . '<br>';

    //     echo '<hr>';
    // }
    
?>

        <!--<div id="promo">
            <h1 id="PromoText">
            Здесь будет рекламный заголовок
            </h1>
        </div>
        <div id="MainTextWrap">
            <div id="MainText">
                Text for main page.
                Text for main page.
                Text for main page.
            </div>
        </div>
    -->
    </div>
    <footer>
        Here will be podval saita
    </footer>
</body>
</html>