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

        function test_getScore_twoLetterWord()
        {
            $test_ScrabbleScore = new ScrabbleScore;
            $input_word = "as";

            $result = $test_ScrabbleScore->getScore($input_word);

            $this->assertEquals(2, $result);
        }

        function test_getScore_threeLetterWord()
        {
            $test_ScrabbleScore = new ScrabbleScore;
            $input_word = "dog";

            $result = $test_ScrabbleScore->getScore($input_word);

            $this->assertEquals(3, $result);
        }
    }

 ?>
