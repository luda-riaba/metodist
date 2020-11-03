<?php
/**
 * Created by PhpStorm.
 * User: parny
 * Date: 10.04.2019
 * Time: 16:53
 */


require "../includes/config.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $config['title_bar'];?></title>
    <?php require "../includes/link.php"?>
</head>

<body>
    <div class="main">
        <?php require "../includes/menu.php"?>
        <div class="header">

        </div>
        <div class="content">
            <?php require "../includes/sidebar.php";?>
            <div class="info">
                <div class="link">
                    <div class="item_link">
                        <h3 class="items">Мінастерство освіти і науки, молоді та спорту України</h3>
                        <img class="items" src="../assets/images/useful_link/%D0%91%D0%B5%D0%B7%20%D0%B8%D0%BC%D0%B5%D0%BD%D0%B8-1.png" alt="Logo Link">
                        <a href="https://mon.gov.ua/ua" class="items link_bottom">Перейти</a>
                    </div>
                    <!-- /.item_link -->
                    <div class="item_link">
                        <h3 class="items">Педрада портал освітян України</h3>
                        <img class="items" src="../assets/images/useful_link/logo.png" alt="Logo Link">
                        <a class="items" href="https://www.pedrada.com.ua/" class="link_bottom">Перейти</a>
                    </div>
                    <div class="item_link">
                        <h3 class="items">Основа видавнича група</h3>
                        <img src="../assets/images/useful_link/logo2.png" alt="Logo Link" class="items">
                        <a href="#" class="link_bottom items">Перейти</a>
                    </div>
                    <div class="item_link">
                        <h3 class="items">Учітельській журнал On-Line</h3>
                        <img src="../assets/images/useful_link/logo3.png" alt="Logo Link" class="items">
                        <a href="http://teacherjournal.in.ua/" class="link_bottom items">Перейти</a>
                    </div>
                        <div class="item_link">
                            <h3 class="items">Методичний портал <sup>®</sup></h3>
                            <h2 class="items">Методичний портал <sup>®</sup></h2>
                            <a href="http://metodportal.com/" class="link_bottom items">Перейти</a>
                        </div>
                    <div class="item_link">
                        <h3 class="items">Навчально методичний центр професійно-технічної освіти у Рівненській області</h3>
                        <img src="../assets/images/useful_link/logo4.jpg" alt="Logo Link" class="items">
                        <a href="https://wp.nmc-pto.rv.ua/" class="link_bottom items">Перейти</a>
                    </div>
                    <div class="item_link">
                        <h3 class="items">Інтерактивна карта навчально-практичних центрів професійної (професійно-технічної) освіти України</h3>
                        <h2 class="items">Інтерактивна карта</h2>
                        <a href="https://www.google.com/maps/d/viewer?mid=1TdvcOAfyKPMI99OTJ_GIl-OV1wwpHKF7&fbclid=IwAR28S_4sAiHco0a_2zjCaEKOCAnoH5d8z8ZqLOvBdWv6b1X7VvP1ogqoE8U&ll=49.01369303671055%2C30.40716825000004&z=6" class="link_bottom items">Перейти</a>
                    </div>
                    <div class="item_link">
                        <h3 class="items">Міністрерство освіти і науки України</h3>
                        <img src="../assets/images/useful_link/%D0%91%D0%B5%D0%B7%20%D0%B8%D0%BC%D0%B5%D0%BD%D0%B8-1.png" alt="Logo Link" class="items">
                        <a href="https://mon.gov.ua/ua" class="link_bottom items">Перейти</a>
                    </div>
                    <div class="item_link">
                        <h3 class="items">Професійно технічна освіта в Украхні</h3>
                        <img src="../assets/images/useful_link/logo5.gif" alt="Logo Link" class="items">
                        <a href="https://proftekhosvita.org.ua" class="link_bottom items">Перейти</a>
                    </div>
<!--                    .item_link>h3.items+img.items[src="../assets/images/useful_link/"][alt="Logo Link"]+a.link_bottom.items[href="#"]{Перейти}-->
                </div>
                <!-- /.link -->
            </div>
        </div>
        <div class="footer">
            <?php require "../includes/footer.php" ?>
        </div>
    </div>
</body>

</html>