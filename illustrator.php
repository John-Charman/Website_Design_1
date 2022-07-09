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
    include("header.html");
    ?>
    <div class = 'flex-col'>
        <img class = "logo" src = "assets/JohnDay.png" alt = "Illustrator">
        <p class = 'orange central'>
            I enjoy being creative in whatever manner I can.<br>
            I started young with drawing and moved from crayons to pencils at an early age, possibly due to a disagreement with my parents over using the walls as my canvas. <br>
            I was incorporating my terrible sense of humour into drawings by age four and blending colour paints, on my brother's face, by age six.<br>
            <br>
            By this age I'd started school and discovered my favourite creative subject: Maths, (yes, you read that correctly.) a subject which, much like myself, shared a lack of concern for reality.<br>
            I would set out with my small toolkit of logic into a world of puzzles, solving each in my own way. <br>
            <br>
            By age nine, I discovered my drawings could move! I had to animate them first but I caught them, those cheeky rascals.<br>
            <br>
            It took a lot of training from this point on, but I finally levelled up Maths enough for it to evolve.<br>
            Maths evolved into.... Programming!<br>
            Now my drawings don't simply move, they're alive! ALIVE!<br>
            <br>
            I could not ask for a more satisfying skill to add to my already eclectic (read: eccentric) set of hobbies. <br>
            Who knows what I'll add next, maybe I'll make them talk.
        </p>
    </div>

    <div class = 'gallery flex-col wrap'>
        <?php
            $dir = "assets/IllustratorPortfolio/";
            // Open a directory, and read its contents
            if (is_dir($dir))
            {
                if ($dh = opendir($dir))
                {
                    $i = 0;
                    while (($image = readdir($dh)) != false)
                    {
                        if ($image != "." && $image != "..")
                        {
                            echo
                            (
                                "<img class = 'gallery-img' src = '" . $dir . $image . "'/>"
                            );
                        }
                    }
                    closedir($dh);
                }
            }
        ?>
    </div>

</body>
</html>
<script src = 'scripts/modalGallery.js'></script>