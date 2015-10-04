<?php
/**
 * Created by PhpStorm.
 * User: trener - Mateusz Marmolowski
 * Date: 05.10.15
 */


define('FILENAME', 'plik.txt');
define('CONTENT', 'abcdef'."\n".'123456');

// utworzenie pliku
if (!file_put_contents(FILENAME, CONTENT))
    die('brak uprawnien do zapisu pliku '.FILENAME);


// ZADANIE 1 - wczytaj dane z pliku i zamien je wierszami, aby cyfry znalazly sie w pierwszej linii a litery w drugiej
// .........
// ........
// .........


?>