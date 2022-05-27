<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name = "author" content = "John Charman">
    <meta name = "keywords" content = "Stories, Illustration, Writing, Books">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DrawsomeStories</title>
    <link rel = "stylesheet" href = main.css >
    <script src = "app.js"></script>
</head>
<body>
    <?php
        include('header.php');
    ?>
    <div id = "background">
        <img class = "logo" src = "assets/logo.png" alt = "DrawsomeStories">
        <div id="gallery">
            <div class="row">
                <div class="column">
                    <img src="assets/BookCovers/01.jpg" onclick = "setupBookSample('benny', '<p>Benny wants to build his own rocket and become an astronaut.<br>\
                        With the help of his family he travels through space and goes on an adventure to see the planets in our solar system. <br><br> Benny is the Space Bunny.</p>',
                        'https://www.amazon.co.uk/gp/product/B082TP743H')">
                </div><div class="column">
                    <img src="assets/BookCovers/02.jpg" onclick = "setupBookSample('flick', '<p>All Flick ever wanted to do was to learn how to dance.<br>\
                        She goes to lots of different dance classes to find her own way of expressing herself. <br><br> Flick is the Tap Dancing Fox.</p>',
                        'https://www.amazon.co.uk/gp/product/B085LN147C')">
                </div>
                <div class="column">
                    <img src="assets/BookCovers/03.jpg" onclick = "setupBookSample('rusty', '<p> Rusty has lived on the shelf of a local toy shop for many years. <br>\
                        His world is turned upside down when events lead him down a different path in search of his missing pieces. <br><br>Can Rusty put himself back together?</p>')">
                </div>
            </div>
            <div style="padding:10px"></div>
        </div>
    </div>
</body>
</html>
