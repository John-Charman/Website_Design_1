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
        <img src = "assets/GemmaDay.png" alt = "Author">
        <p class = 'central orange'>
            I’m half English and half Malaysian.<br>
            When people ask me about Malaysia, I’m instantly transported back to when I was a curious and clumsy four year old child in a department store.<br>
            I vividly remember seeing a row of brightly coloured tights being displayed on a set of shiny plastic mannequin legs,
            I couldn’t stop myself from getting closer and admiring the beautiful blend of rainbow materials that were covered in a mixture of lace and sequins.<br>
            Curiosity got the better of me and I had to touch the alluring fabric.<br>
            I enthusiastically raised my hand up much too quickly and bashed the tips of my fingers against the glossy mannequin leg and in one swift motion,
            I had knocked it clean away from its display stand.<br>
            I watched on in horror as the adorned shaped plastic limb collided with its neighbour, and one by one, each leg toppled into the next, until they all hit the floor like a set of neon dominoes.<br>
            In the aftermath, I just stood there unsure of what to do,
            but everyone had already seen and heard the chaotic cacophony and had made their way to huddle around the wreckage as I shyly stood in the spotlight.<br>
            The staff were in good spirits and had a chuckle about my unskillful exploits as they promptly rectified the situation.<br>
            <br>
            Thankfully I’m a lot less clumsy these days, but my curiosity remains.<br>
            I have worked for over a decade in education, both in the school library and teaching literacy lessons.<br>
            My love of playing with words and creating stories has never left me.<br>
            I hope you enjoy the worlds and characters I have created and that they can bring a smile to your face as you watch their adventures unfold.<br>
        </p>
    </div>

        <div class = 'slides'>
            <?php
                $dir = "assets/AuthorPortfolio/";
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
</body>
</html>
<script src ='scripts/slideshow.js'></script>