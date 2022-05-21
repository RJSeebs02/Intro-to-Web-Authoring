<?php
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Seva Portfolio Navigation Bar</title>
        <link rel="stylesheet" href="css/stylesheet.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="navigation">
            <nav>
                <h2 class="logo"> Port<span>Folio</span> </h2>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?page=projects">Projects</a></li>
                    <li><a href="index.php?page=profile">Profile</a></li>
                </ul>
            </nav>
                    <?php
                        switch($page){
                            case "projects":
                                include "projects.php";
                            break;
                            case "profile":
                                include "profile.php";
                            break;
                            default:
                            include "home.php";
                        }
                    ?>
        </class>
    </body>
</html>