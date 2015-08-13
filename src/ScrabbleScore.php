<?php

    class ScrabbleScore
    {
        function getScore($input_word)
        {
            /*Created an associative array with letter keys and score values to
            easily access letter scores.*/
            $letter_values = array(
                'a' => 1,
                'e' => 1,
                'i' => 1,
                'o' => 1,
                'u' => 1,
                'l' => 1,
                'n' => 1,
                'r' => 1,
                's' => 1,
                't' => 1,
                'd' => 2,
                'g' => 2,
                'b' => 3,
                'c' => 3,
                'm' => 3,
                'p' => 3,
                'f' => 4,
                'h' => 4,
                'v' => 4,
                'w' => 4,
                'y' => 4,
                'k' => 5,
                'j' => 8,
                'x' => 8,
                'q' => 10,
                'z' => 10
            );

            //Converts an input word to an array of lowercase letters
            $input_letters = str_split(strtolower($input_word));
            $score = 0;


            /* If the input word is not empty and only consists of alphabetic
               characters, calculate and return score. Otherwise return error -1. */
            if(!empty($input_word) && ctype_alpha($input_word)) {
                foreach($input_letters as $letter) {
                    $score += $letter_values[$letter];
                }
                return $score;
            } else {
                return -1;
            }

        }
    }


 ?>
