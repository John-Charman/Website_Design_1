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
    include("header.php");
    ?>
    <div id = "background">
        <img class = "logo" src = "assets/John.png" alt = "Illustrator">
        <p>John enjoys creating uniquely designed characters that make people smile,<br><br>
            and telling terrible jokes that make people sigh.
        </p>

        <div id="gallery">
            <?php
                $dir = "assets/IllustratorPortfolio/";
                $files = array();
                // Open a directory, and read its contents
                if (is_dir($dir)){
                    if ($dh = opendir($dir)){
                        while (($file = readdir($dh)) != false){
                            if ($file != "." && $file != ".."){
                                $files[] = $dir . $file;
                            }
                        }
                        closedir($dh);
                    }
                }
            ?> 
            <script>
                var jsvar = <?=json_encode($files)?>;
                console.log(jsvar);
                setupModalGallery(4,jsvar)
            </script>
        </div>
    </div>
</body>
</html>