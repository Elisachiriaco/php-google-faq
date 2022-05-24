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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <img src="logo.png" alt="logo">
            <h4>Privacy e termini</h4>
            <ul>
                <li><?php for($i = 0;$i < count($nav);$i++){
                    echo $nav[$i];
                };
                ?></li>
            </ul>
        </nav>
        <hr>
    </header>

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
        <div class="container py-3">
        <?php for($i = 0; $i < count($footer); $i++){
            echo $footer[$i];
        };
        ?>
        </div>
    </footer>
</body>
</html>