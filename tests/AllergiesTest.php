<?php
  require_once "src/Allergies.php";

  class AllergiesTest extends PHPUnit_Framework_TestCase
    {
        function testOneAllergy()
        {
            $test_Allergies = new Allergies;
            $input = 1;

            $result = $test_Allergies->findAllergies($input);

            $this->assertEquals(array("eggs"), $result);
        }
        function testTwoAllergies()
        {
            $test_Allergies = new Allergies;
            $input = 7;

            $result = $test_Allergies->findAllergies($input);

            $this->assertEquals(array("shellfish","peanuts","eggs"), $result);
        }
        function testMultiAllergy()
        {
            $test_Allergies = new Allergies;
            $input = 255;

            $result = $test_Allergies->findAllergies($input);

            $this->assertEquals(array("cats","pollen","chocolate","tomatoes","strawberries","shellfish","peanuts","eggs"), $result);
        }
    }

?>
