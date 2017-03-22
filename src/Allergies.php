<?php
    class Allergies
    {
        function findAllergies($input)
        {
            $allergens = array();
            while($input > 0)
            {
                if ($input >= 128){
                  array_push($allergens, "cats");
                  $input = $input - 128;
                } elseif ($input >= 64){
                  array_push($allergens, "pollen");
                  $input = $input - 64;
                } elseif ($input >= 32){
                  array_push($allergens, "chocolate");
                  $input = $input - 32;
                } elseif ($input >= 16){
                  array_push($allergens, "tomatoes");
                  $input = $input - 16;
                } elseif ($input >= 8){
                  array_push($allergens, "strawberries");
                  $input = $input - 8;
                } elseif ($input >= 4){
                  array_push($allergens, "shellfish");
                  $input = $input - 4;
                } elseif ($input >= 2){
                  array_push($allergens, "peanuts");
                  $input = $input - 2;
                } elseif ($input >= 1){
                  array_push($allergens, "eggs");
                  $input = $input - 1;
                }
            }
            return $allergens;
        }



    }




?>
