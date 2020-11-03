<?php
/**
 * Created by PhpStorm.
 * User: parny
 */


require "includes/config.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $config['title_bar'];?></title>
    <?php require 'includes/link.php'?>
</head>

<body>
    <div class="main">
        <?php require "includes/menu.php"?>
        <div class="header">

        </div>
        <div class="content">
            <?php require "includes/sidebar.php";?>
            <div class="info">
                <div class="info_index">
                   <h2>Персональний сайт</h2><h2>Басараби Наталії Миколаївни</h2>
                    <p><b>Посада:</b> методист</p>
                    <p><b>Кваліфікаційна категорія:</b> вища</p>
                    <p><b>Педагогічний стаж:</b> 27 років</p>
                    <p style="text-align: center;"><img src="assets/images/imdex_images/IMG_2721.JPG" alt="Photo"><img src="assets/images/imdex_images/_MG_1973%20(1).JPG" alt="Photo"><b></p><p>Індивідуальна науково - методична тема:</b> Застосування інформаційно-комунікаційних та тренінгових технологій у процесі розвитку професійної компетентності педагогічних працівників закладу професійної (Професійно технічної освіти).</p>
                    <h3 style="text-align: center;">Моє життєве кредо!</h3>
                    <p class="info_index_kredo" style="text-align: center;">Щоб перше слово було добре,</p>
                    <p class="info_index_kredo" style="text-align: center;">Щоб друге слово було правдиве,</p>
                    <p class="info_index_kredo" style="text-align: center;">Щоб третє слово було справедливе,</p>
                    <p class="info_index_kredo" style="text-align: center;">Щоб четверте слово було щире,</p>
                    <p class="info_index_kredo" style="text-align: center;">Щоб п'яте слово було відважне,</p>
                    <p class="info_index_kredo" style="text-align: center;">Щоб шосте слово було делікатне,</p>
                    <p class="info_index_kredo" style="text-align: center;">Щоб сьоме слово несло втіху,</p>
                    <p class="info_index_kredo" style="text-align: center;">Щоб восьме слово було ласкавим,</p>
                    <p class="info_index_kredo" style="text-align: center;">Щоб дев'яте слово було сповнене поваги,</p>
                    <p class="info_index_kredo" style="text-align: center;">Щоб десяте слово було мудре.</p>
                    <p class="info_index_kredo" style="text-align: center;">Далі мовчи!!!</p>
                </div>
            </div>
        </div>
        <div class="footer">
            <?php require "includes/footer.php"?>
        </div>
    </div>
</body>

</html>