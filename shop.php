<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>БАРБЕРШОП "БОРОДИНСКИЙ"</title>
    <link rel="stylesheet" href="/styles/common.css" type="text/css"/>
    <link rel="stylesheet" href="/styles/page.css" type="text/css"/>
</head>
<body>
<?php include 'includes/main-nav.php';?>
<main class="market-container">
    <h1>BARBERSHOP BORODINSKI - МАГАЗИН</h1>
    <div class="nav-panel">
        <nav class="bread-crumbs">
            <a class="nav-panel-txt" href="/index.php">ГЛАВНАЯ</a>
            <a class="nav-panel-txt" href="/shop.php">МАГАЗИН</a>
        </nav>
    </div>
    <div class="shop-content">
        <sidebar>
            <div class="index-content">
                <h2 class="index-content-title">ПРОИЗВОДИТЕЛИ:</h2>
                <form>
                    <p><input type="checkbox" name="a" value="BAXTER OF CALIFORNIA">BAXTER OF CALIFORNIA</p>
                    <p><input type="checkbox" name="a" value="MR NATTY">MR NATTY</p>
                    <p><input type="checkbox" name="a" value="SUAVECITO">SUAVECITO</p>
                    <p><input type="checkbox" name="a" value="MALIN+GOETZ">MALIN+GOETZ</p>
                    <p><input type="checkbox" name="a" value="MURRAY'S">MURRAY'S</p>
                    <p><input type="checkbox" name="a" value="AMERICAN CREW">AMERICAN CREW</p>
                </form>
            </div>
            <div class="index-content">
                <h2 class="index-content-title">ГРУППЫ ТОВАРОВ:</h2>
                <form>
                    <p><input type="checkbox" name="a" value="БРИТВЕННЫЕ ПРИНАДЛЕЖНОСТИ">БРИТВЕННЫЕ ПРИНАДЛЕЖНОСТИ</p>
                    <p><input type="checkbox" name="a" value="СРЕДСТВА ДЛЯ УХОДА">СРЕДСТВА ДЛЯ УХОДА</p>
                    <p><input type="checkbox" name="a" value="АКСЕССУАРЫ">АКСЕССУАРЫ</p>
                </form>
            </div>
        </sidebar>
        <div class="content-cart">
            <div class="products">
                <div class="cart-column"><a href="/BaxSet.php"><img src="img/logo.png" width="170" alt="Барбершоп &laquo;Бородинский&raquo;"></a></div>
                <div class="cart-column"><a href="/AIR CONDITIONER.php"><img src="img/logo.png" width="170"  alt="Барбершоп &laquo;Бородинский&raquo;"></a></div>
                <div class="cart-column"><a href="/HAIRGEL.php"><img src="img/logo.png" width="170" alt="Барбершоп &laquo;Бородинский&raquo;"></a></div>
                <div class="cart-column"><a href="/ClayHair.php"><img src="img/logo.png" width="170" alt="Барбершоп &laquo;Бородинский&raquo;"></a></div>
                <div class="cart-column"><a href="/Shaving Gel.php"><img src="img/logo.png" width="170" alt="Барбершоп &laquo;Бородинский&raquo;"></a></div>
                <div class="cart-column"><a href="/ShavingSet.php"><img src="img/logo.png" width="170" alt="Барбершоп &laquo;Бородинский&raquo;"></a></div>
            </div>
        </div>
    </div>
</main>
<?php include 'includes/footer.php';?>
</body>
</html>