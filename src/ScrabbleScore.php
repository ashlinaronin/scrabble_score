<?php

    class ScrabbleScore
    {
        function getScore($input_word)
        {
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
                't' => 1
            );

            $input_letters = str_split($input_word);
            $score = 0;

            foreach($input_letters as $letter) {
                $letter_score = $letter_values[$letter];
                $score = $score + $letter_score;
            }

            return $score;
        }
    }


 ?>
