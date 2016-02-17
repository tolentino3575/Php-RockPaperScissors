<?php

    require_once "src/rockpaperscissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {

        function test_rock_scissors_RS1()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "scissors";

            //Act
            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }

        function test_rock_scissors_RS2()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "scissors";
            $second_input = "rock";

            //Act
            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }

        function test_rock_scissors_PS1()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "paper";
            $second_input = "scissors";

            //Act
            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }

        function test_rock_scissors_PS2()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "scissors";
            $second_input = "paper";

            //Act
            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }

        function test_rock_scissors_PR1()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "paper";
            $second_input = "rock";

            //Act
            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }

        function test_rock_scissors_PR2()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "paper";

            //Act
            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }

        function test_rock_scissors_equal()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "rock";

            //Act
            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Draw", $result);
        }

    }

?>
