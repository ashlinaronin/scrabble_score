<?php

    require_once __DIR__."/../src/ScrabbleScore.php";
    //require_once "src/ScrabbleScore.php";

    class ScrabbleScoreTest extends PHPUnit_Framework_TestCase
    {
        function test_getScore_oneLetterWord()
        {
            $test_ScrabbleScore = new ScrabbleScore;
            $input_word = "a";

            $result = $test_ScrabbleScore->getScore($input_word);

            $this->assertEquals(1, $result);
        }
    }

 ?>
