<?php

use PHPUnit\Framework\TestCase;

require_once("WordCount.php");

class SimpleTest extends TestCase
{
    public function testCountWord()
    {
        $Wc = new WordCount();

        $TestSentence = "My Name is Muhammad Lutfi Hakim";
        $WordCount = $Wc->countWords($TestSentence);

        $this->assertEquals(6, $WordCount);
    }
}
