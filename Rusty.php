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
</head>
<body>
    <?php
        include('header.html');
    ?>
        <div class = 'orange slides'>
            <?php
                $dir = "assets/BookSamples/Rusty/";
                $files = array();
                // Open a directory, and read its contents
                if (is_dir($dir)){
                    if ($dh = opendir($dir)){
                        while (($file = readdir($dh)) != false){
                            if ($file != "." && $file != ".."){
                                echo
                                (
                                    "<div class = 'slide'>".
                                        "<img src = " . $dir. $file . ">".
                                    "</div>"
                                );
                            }
                        }
                        closedir($dh);
                    }
                }
            ?>
            <a class = 'prev' onclick='changeSlides(-1)'>←</a>
            <a class = 'next' onclick='changeSlides(1)'>→</a>
        </div>
        <p class = 'central orange'>
            Rusty has lived on the shelf of a local toy shop for many years.<br>
            His world is turned upside down when events lead him down a different path in search of his missing pieces.<br>
            <br>
            Can Rusty put himself back together?
        </p>

</body>
</html>
<script src ='scripts/slideshow.js'></script>