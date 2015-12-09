<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="">
</head>

<body>
    <?php
        $edades=[10,20,30,40,50,60];
        $altura=[1.75,2.00,1.82,1.72,1.65];
        $peso= [70,80,120,74,90];
        function medias($e,$a,$p) {
            $mediaedad=0;
            for($i=0; $i<count($e);$i++) {
                $mediaedad=$mediaedad+$e[$i];
            }
            $mediaedad=$mediaedad/count($e);
            $medialtura=0;
            for($i=0; $i<count($a);$i++) {
                $medialtura=$medialtura+$a[$i];
            }
            $medialtura=$medialtura/count($a);
            $mediapeso=0;
            for($i=0; $i<count($p);$i++) {
                $mediapeso=$mediapeso+$p[$i];
            }
            $mediapeso=$mediapeso/count($p);
            return array("EDAD" => $mediaedad,
                         "ALTURA" => $medialtura,
                         "PESO" => $mediapeso);
        }

        var_dump(medias($edades, $altura, $peso));
?>
</body>
</html>
