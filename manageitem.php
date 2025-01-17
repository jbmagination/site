<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>sudocoin</title>
    <html prefix="og: https://ogp.me/ns#">
    <meta property="og:title" content="sudocoin" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://i.ytimg.com/vi/if-2M3K1tqk/maxresdefault.jpg" />
    <meta property="og:type" content="website">

    <link rel="icon" type="image/png"
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8b/Cryptocurrency_Logo.svg/633px-Cryptocurrency_Logo.svg.png">

    <meta name="og:description" content="Create your very own custom Minecraft achievements!">
    <meta name="keywords" content="sudo, coin, crypto, currency">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#FFFF00">

    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="https://coin.sudocode1.xyz/">
    <meta name="twitter:title" content="sudocoin">
    <meta name="twitter:description" content="sudo, coin, crypto, currency">
    <meta name="twitter:image" content="https://i.ytimg.com/vi/if-2M3K1tqk/maxresdefault.jpg">

    <!-- Bootstrap Core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- PHP Modules -->
    <?php require "modules/siteFunctions.php" ?>

</head>

<body style="font-style:Arial">

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href=".">sudocoin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="tools.zip">Download Tools</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="store">Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="transactions">Transactions</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <a href="signup" class="btn btn-outline-success">Signup</a>
                </form>
            </div>
        </div>
    </nav>
    <!-- Navigation bar end -->

    <br>

    <div class="container">
        <!-- Centers content below -->

        <?php
    secondaryFunction(); // secon func

    while (1) {
    ?>
        <form action="" method="post">
            Item Name
            <input type="text" name="itemName" value="<?php $viewingData['itemName'] ?>"><br>
            Charge
            <input type="text" name="amountToCharge" value="<?php $viewingData['amountToCharge'] ?>"><br>
            Stock
            <input type="text" name="stock" value="<?php $viewingData['stock'] ?>"><br>
            Contact
            <input type="text" name="contactSeller" value="<?php $viewingData['contactSeller'] ?>"><br>
            Description
            <input type="text" name="descr" value="<?php $viewingData['descr'] ?>"><br>
            Category
            <select id="catelist" name="category">
                <option value="software">Software</option>
                <option value="exchange">Cash Exchange</option>
                <option value="books">Books (Digital & non Digital)</option>
                <option value="videos">Videos</option>
                <option value="giftcards">Gift Cards</option>
                <option value="inGame">In-game Items</option>
                <option value="other">Other Items</option>
            </select><br>
            <input type="hidden" name="itemId" value="<?php $viewingData['itemId'] ?>">
            <input type="hidden" name="sellerId" value="<?php $viewingData['sellerId'] ?>">
            Password
            <input type="password" name="password"><br>
            <input type="submit">
        </form>
        <?php
    }
    ?>

    </div>
</body>

</html>