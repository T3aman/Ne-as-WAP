<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Texty</title>
    </head>
    <body>
        <?php
        include "text.php"; // nacteni třídy
        $class = new text("h1"); //nastavení TAGU
        $class->text("Testovaci test nadpisu"); //nastavení Obsahu
        echo $class; //vypsání

        $class = new text("img"); // tvorba obrázku
        $class->image("image.png", "testovaci alt"); // nstavení obrázku
        echo $class;
        
        $class = new text("a"); // tvorba odkazu
        $class->href("test.html", "testovaci alt", "text"); // nastavení odkazu
        echo $class;

        $class = new text("span");
        $class->text("Testovaci test spanu");
        echo $class;

        $class = new text("p");
        $class->text("Testovaci test odstavce");
        echo $class;


        $class = new text("sfdhjgk"); //spatne zadaný TAG
        $class->text("sadghj");
        echo $class;
        ?>
    </body>
</html>
