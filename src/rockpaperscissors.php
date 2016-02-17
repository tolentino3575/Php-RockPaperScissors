<?php


    class RockPaperScissors
    {
        // $values = rand(0, 2);
        // $computer = array(0=>"rock",1=>"paper",2=>"scissors");
        // $new_value = $computer([$values]);

        function playGame($first_input, $second_input)
        {
            if ((($first_input == "rock")&&($second_input == "scissors")) || (($first_input == "scissors")&&($second_input =="paper")) || (($first_input == "paper")&&($second_input =="rock")))
            {
                return "Player 1";
            } elseif ((($first_input == "scissors")&&($second_input =="rock")) || (($first_input == "paper")&&($second_input =="scissors")) || (($first_input == "rock")&&($second_input =="paper")))
            {
                return "Player 2";
            } elseif ($first_input == $second_input)
            {
                return "Draw";
            }
        }
    }



    // if (($first_input == "rock")&&($second_input == "scissors"))
    // {
    //     return "Player 1";
    // } elseif (($first_input == "scissors")&&($second_input =="rock"))
    // {
    //     return "Player 2";
    // } elseif (($first_input == "paper")&&($second_input =="scissors"))
    // {
    //     return "Player 2";
    // } elseif (($first_input == "scissors")&&($second_input =="paper"))
    // {
    //     return "Player 1";
    // } elseif (($first_input == "paper")&&($second_input =="rock"))
    // {
    //     return "Player 1";
    // } elseif (($first_input == "rock")&&($second_input =="paper"))
    // {
    //     return "Player 2";
    // } elseif ($first_input == $second_input)
    // {
    //     return "Draw";
    // }




?>
