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
            <embed src="../assets/files_pdf/Glossary+.pdf" width="100%" height="100%"></embed>
        </div>
    </div>
    <div class="footer">

    </div>
</div>
</body>

    </html><?php
