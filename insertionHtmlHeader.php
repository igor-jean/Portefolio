<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<?php
$pageActuelle = $_SERVER["PHP_SELF"];
?>
<body>
    <header>
        <div class="headerFlex">
            <img src="img/moi.jpg" alt="moi">
            <nav>
                <ul>
                    <li>
                        <a href="index.php" <?php if($pageActuelle == "/index.php"){echo "class='navGras'";} ?> title="Page D'accueil">Accueil</a>
                    </li>
                    <li>
                        <a href="cv.php" <?php if($pageActuelle == "/cv.php"){echo "class='navGras'";} ?> title="Page de CV" >CV</a>
                    </li>
                    <li>
                        <a href="contact.php" <?php if($pageActuelle == "/contact.php"){echo "class='navGras'";} ?> title="Page Contact">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>