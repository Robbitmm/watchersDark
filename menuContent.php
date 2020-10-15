<?php
    $data = file_get_contents("content.json");
    $json = json_decode($data, true);

    $outout = "<div class='movies'>
                <a name='movies'>
                    <h1>Filmes</h1>
                </a>";

    foreach($json['movies'] as $movie){
        $title = $movie['title'];
        $subt = $movie['subt'];
        $img = $movie['img'];
        $time = $movie['duration'];
        $language = $movie['language'];
        $link = "<?php".
                    "header("."Location: index.php?movie=$title&subt=$subt".");".
                "?>";

        $outout .= "<nav class='title'>";
        $outout .= "<a href='$link'>";
        $outout .= "<img class='capa' src='$img'>";
        $outout .= "<ul class'info'>";
        $outout .= "<li class='topic-Title'>".$title."<li>";
        $outout .= "<li class='topic-Subtitle'>".$subt."</li>";
        $outout .= "<li class='topic'>".$time."<li>";
        $outout .= "<li class='topic'>".$language."</li>";
        $outout .= "        </ul>
                    </a>
                </nav>";
    }

    $outout .= "</div>";
    echo $outout;
?>