<?php

function stringToMorse($string) {
    $morseCode = array(
        'A' => '.-',
        'B' => '-...', 
        'C' => '-.-.',
        'D' => '-..', 
        'E' => '.',
        'F' => '..-.', 
        'G' => '--.',
        'H' => '....', 
        'I' => '..', 
        'J' => '.---',
        'K' => '-.-', 
        'L' => '.-..',
        'M' => '--', 
        'N' => '-.', 
        'O' => '---',
        'P' => '.--.',
        'Q' => '--.-',
        'R' => '.-.',
        'S' => '...',
        'T' => '-',
        'U' => '..-', 
        'V' => '...-', 
        'W' => '.--', 
        'X' => '-..-',
        'Y' => '-.--',
        'Z' => '--..',
        '0' => '-----',
        '1' => '.----', 
        '2' => '..---', 
        '3' => '...--',
        '4' => '....-', 
        '5' => '.....', 
        '6' => '-....', 
        '7' => '--...',
        '8' => '---..',
        '9' => '----.' 
                         /* here when i put '' => '' or "" => "" for space it give me error syntax*/
    );
    return strtr(strtoupper($string), $morseCode); //strtr — Translate characters or replace substrings and (strtoupper — Make a string uppercase
    }
    $string = 'bonjour de ma part'; //it translates this sentence to morseCode -...----..------..-.-. -... --.- .--..-.-.-
    echo stringToMorse($string); 
 ?>

<!-- //this below n1 translate words in search bar
/*1. if (isset($_POST['input'])) {
     $input = $_POST['input'];
     $morseCode = stringToMorse($input);
     echo "<p>Morse code: $morseCode</p>";
 }
<form action="" method="post">
    <input type="text" name="input" placeholder="Enter a word or phrase">
   <button type="submit">Translate to Morse code</button>
</form>*/


//to add table or show result of each word in table we add the following code ..
//2. $words = explode(' ', $string);

// echo '<table border="1">';
// foreach ($words as $word) {
//     $morseWord = stringToMorse($word);
//     echo '<tr><td>' . htmlspecialchars($word) . '</td><td>' . htmlspecialchars($morseWord) . '</td></tr>';
// }
// echo '</table>'; --> -->

