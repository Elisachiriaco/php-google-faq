<?php 
include 'database.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <img src="logo.png" alt="logo">
            <h4>Privacy e termini</h4>
            <ul>
                <li><a href="#">Introduzione</a> </li>
                <li><a href="#">Norme sulla privacy</a></li>
                <li><a href="#">Termini di servizio</a> </li>
                <li><a href="#">Tecnologie</a></li>
                <li><a href="#">Domande frequenti</a></li>
            </ul>
        </nav>
    </header>
    <hr>
    <main>
        <div class="container">
            <?php for ($i = 0; $i < count($questions); $i++){
                echo $questions[$i]['domanda'];
                echo $questions[$i]['risposta'];
            };
            ?>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>