<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Recipes Platform</title>
</head>

<body>
    <header class="flex-container topnav">
        <!-- logo strony :) -->
        <img src="img/logo.png" alt="logo" id="logo">

        <!-- wyszukiwanie z bazy danych -->
        <form action="search.php" method="get">
            <!-- pole wyszukiwania -->
            <input type="text" name="search" id="search" placeholder="Wyszukaj Recepture...">
            <!-- button wyszukiwania -->
            <input type="submit" value="Szukaj">
        </form>
    </header>

    <main class="flex-container-wrap">
        <div class="card text-center">
            <h3>nazwa oferty</h3>
            <p>cena: 100zł</p>
        </div>

        <?php
        include "display_products.php";
        ?>

    </main>
</body>

</html>