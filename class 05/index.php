<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Class 05</title>
</head>
<body>



<div class="php_element">

<?php

// *01 = Empty section Start // 

$userName = 'Shafoun';

if(empty($userName)){
    echo "Welcome $userName";
}else{
    echo "Please Enter Your Name........!";
}

// *01 = Empty section end // 



// implode section start //

echo "<br><br>";
 $number = [
    "+880 1818403922",
    "+880 1814589657",
    "+880 1811458752",
    "+880 1794615241",
    "+880 1890090531",
 ];

 $numberString = implode(" <br>" , $number);
 print_r($numberString);
// implode section end

// explode  section start //
echo "<br><br>";

$Word = "Dear PHP Laravel, Will You Be mine ,Please";

print_r(explode(",", $Word));

// explode section end //

echo "<br><br>";
// end  //
// $videourlApi = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/0.jpg";
// $videoUrl = "https://youtu.be/p9LU2lL-oYA?si=3iyh63YzIcd7ts_O";
// $mainUrl = explode("?si=", $videoUrl)[0];
// $UrlArray = explode("/", $mainUrl);
// $videoId = end($UrlArray);

// $imageUrl = str_replace("<insert-youtube-video-id-here>", $videoId, $videourlApi );

// echo '<img src="' .$imageUrl . '" width="500px" height="300px">';



function YouTubeThumbnailCreator($videoUrl){

    $videourlApi = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/0.jpg";
    $mainUrl = explode("?si=", $videoUrl)[0];
    $UrlArray = explode("/", $mainUrl);
    $videoId = end($UrlArray);
    
    $imageUrl = str_replace("<insert-youtube-video-id-here>", $videoId, $videourlApi );
    echo '<img src="' .$imageUrl . '" width="500px" height="300px">';
}

YouTubeThumbnailCreator("https://youtu.be/4URgSbIbYME?si=bA_PhozJYIuumDHc");

// end //

?>
</div>
    
</body>
</html>