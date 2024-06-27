<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     
        //php string method

        $name="i am sakib";

        echo strlen($name);
        echo "<br>";

        $wcounter="i am not robot";

        echo str_word_count($wcounter);
        echo "<br>";

        $find="i am sakib";

        echo strpos("sakib","i");
        echo "<br>";

        $up="i am sakib";

        echo strtoupper($up);
        echo "<br>";

        $low="I AM SAKIB";
        
        echo strtolower($low);
        echo "<br>";

        $cut="i am sakib";

        echo trim($cut,"i");
        echo "<br>";

        $add="i'm in a";

        echo str_replace("a","abudhabi","$add");
        echo "<br>";

        $turn="sakib";

        echo strrev("$turn");
        echo "<br>";

        $exp="we have four word";

        $exs = explode(" ",$exp);
        
        print_r($exs);


      
    ?>
</body>
</html>