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
                <div class="sertf_descr">
                    <p>Загальна інформація<span></span></p>
                    <p>Метою сертифікації є виявлення та стимулювання педагогічних працівників з високим рівнем професійної майстерності, які володіють методиками компетентнісного навчання і новими освітніми технологіями та сприяють їх поширенню.</p>
                    <p>Сертифікація педагогічного працівника відбувається виключно на добровільних засадах.</p>
                    <p><strong>Сертифікація складатиметься з трьох видів оцінювання:</strong></p>
                    <ul>
                        <li>експертне оцінювання професійних компетентностей учасників сертифікації шляхом вивчення практичного досвіду їх роботи (проводитиметься Державною службою якості освіти (ДСЯО) та її територіальними органами);</li>
                        <li>самооцінювання учасником сертифікації власної педагогічної майстерності (створення вчителем е-портфоліо);</li>
                        <li>оцінювання фахових знань та умінь учасників сертифікації шляхом їх <a href="http://testportal.gov.ua//wp-content/uploads/2019/01/Nakaz_sertyfikatsiya_140119_33na-sajt.pdf">незалежного тестування</a> (проводитиметься Українським центром оцінювання якості освіти (УЦОЯО) та регіональними центрами).</li>
                    </ul>
                    <p><a href="https://www.kmu.gov.ua/ua/npas/pro-zatverdzhennya-polozhennya-pro-sertifikaciyu-pedagogichnih-pracivnikiv?fbclid=IwAR2m0-QG_a4lXZlOah4hmyRrpF29o0i-vSeBgFqvPuCYfLoOlyOq3USHURo">Постановою</a> 
                    Кабінету Міністрів України визначено, що у 2019 році в рамках пілотного проекту сертифікацію зможе пройти <br><br> не більше однієї тисячі вчителів початкової школи.</p>
                    <p>Реєстрація для участі у сертифікації розпочнеться 15 січня і триватиме до 1 лютого включно.</p>
                    <p></p><!-- .entry-content -->

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