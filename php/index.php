<?php
    echo '
    <!DOCTYPE HTML>
    <html lang="en">
        <head>
            <title>';
            if (!isset($_GET['menu']) || $_GET['menu'] == 1) { echo 'Home'; }
            else if ($_GET['menu'] == 2) { echo 'About Us'; }
            else if ($_GET['menu'] == 3) { echo 'Contact Us'; }
            echo '
            </title>
            <meta http-equiv="content-type" content="text/html; charset=UTF-8">
            <meta name="description" content="">
            <meta name="keywords" content="">
            <meta name="author" content="Alen Šimec">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        </head>
        <body>';
            include ('menu.php');
            echo '
            <main>
                <h1>';
                if (!isset($_GET['menu']) || $_GET['menu'] == 1) { echo 'Home'; }
                else if ($_GET['menu'] == 2) { echo 'About Us'; }
                else if ($_GET['menu'] == 3) { echo 'Contact Us'; }
                # Create another page!
                echo '</h1> 
                <p>lorem ipsum</p>
            </main>
        </body>
    </html>';
    ?>