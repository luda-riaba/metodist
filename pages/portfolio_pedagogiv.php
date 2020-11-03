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
            <h1>Портфоліо педагогів</h1>

            <div class="title1">
                <img src="../assets/images/portfolio_teachers/Luda.jpg" alt="Photo">
                <span></span>
                <h2>РЯБОЇ ЛЮДМИЛИ СТАНІСЛАВІВНИ</h2>
                <h4>ВИКЛАДАЧ СПЕЦДИСЦИПЛІН ГРУП "ОПЕРАТОР ЕООМ; РЕЄСТРАЦІЯ БУХГАЛТЕРСЬКИХ ДАНИХ"</h4>
                <a href="https://sites.google.com/view/riaba/главная" target="_blank">Читати детальныше</a>
            </div>
            <div class="title1">
                <img src="../assets/images/portfolio_teachers/korol.jpg" alt="Photo">
                <h2>КОРОЛЬ СВІТЛАНИ ВАСИЛІВНИ</h2>
                <h4>ВИКЛАДАЧ СПЕЦДИСЦИПЛІН ГРУП "ОПЕРАТОР ЕООМ; РЕЄСТРАЦІЯ БУХГАЛТЕРСЬКИХ ДАНИХ"</h4>
                <a href="https://sites.google.com/view/korol-s-v" target="_blank">Читати детальныше</a>
            </div>
            <div class="title1">
                <img src="../assets/images/portfolio_teachers/kolosovich.jpg" alt="Photo">
                <h2>Колосовича Олексія Васильовича</h2>
                <h4>майстер виробничого навчання мулярів; пічників; штукатурів </h4>
                <a href="https://sites.google.com/view/kolosokvych-o-v/главная" target="_blank">Читати детальныше</a>
            </div>
            <div class="title1">
                <img src="../assets/images/portfolio_teachers/klumchuk.jpg" alt="Photo">
                <h2>Климчук Наталії Миколаївни</h2>
                <h4>майстер виробничого навчання "Оператор ЕООМ; реєстрація бухгалтерських даних"</h4>
                <a href="https://sites.google.com/view/natali4ka/главная" target="_blank">Читати детальныше</a>
            </div>
            <div class="title1">
                <img src="../assets/images/portfolio_teachers/nazarchuk.jpg" alt="Photo">
                <h2>Назарук Мирослави Степанівни</h2>
                <h4>викладач економічних дисциплін</h4>
                <a href="https://sites.google.com/view/nazaruk1956/головна" target="_blank">Читати детальныше</a>
            </div>
            <div class="title1">
                <img src="../assets/images/portfolio_teachers/stepanovich.jpg" alt="Photo">
                <h2>Степанович Катерини Василівни</h2>
                <h4>майстер виробничого навчання опоряджувальників</h4>
                <a href="https://sites.google.com/view/katia004/головна" target="_blank">Читати детальныше</a>
            </div>
            <div class="title1">
                <img src="../assets/images/portfolio_teachers/voytovich.jpg" alt="Photo">
                <h2>ВОЙТОВИЧ ОЛЬГИ ЛЕОНІДІВНИ</h2>
                <h4>ВИКЛАДАЧ СПЕЦДИСЦИПЛІН ГРУП ПІДГОТОВКИ МОЛОДШИХ СПЕЦІАЛІСТІВ</h4>
                <a href="https://sites.google.com/view/voitovychol" target="_blank">Читати детальныше</a>
            </div>
            <div class="title1">
                <img src="../assets/images/portfolio_teachers/lipinska.jpg" alt="Photo">
                <h2>Ліпінської Валентини Юріївни</h2>
                <h4>викладач економічних дисциплін груп підготовки молодших спеціалістів </h4>
                <a href="https://sites.google.com/view/lipinskav" target="_blank">Читати детальныше</a>
            </div>
            <div class="title1">
                <img src="../assets/images/portfolio_teachers/Lukachuk.jpg" alt="Photo">
                <h2>Лукащук Олени Ігорівни</h2>
                <h4>викладач спецдисциплін, інженер з охорони праці</h4>
                <a href="https://sites.google.com/view/lukashchukoi" target="_blank">Читати детальныше</a>
            </div>
        </div>
    </div>
    <div class="footer">
        <?php require "../includes/footer.php" ?>
    </div>
</div>
</body>

</html>