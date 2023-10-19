<?php
// Mengimpor TestCase dari PHPUnit
use PHPUnit\Framework\TestCase;

// Memuat file WordCount.php
require_once("WordCount.php");

// Membuat class SimpleTest yang merupakan turunan dari TestCase
class SimpleTest extends TestCase
{

    // Membuat method testCountWord
    public function testCountWord()
    {
        // Membuat object dari class WordCount
        $Wc = new WordCount();

        // Membuat variabel TestSentence berisi kalimat
        $TestSentence = "My Name is Muhammad Lutfi Hakim";

        // Memanggil method countWords() dari objek WordCount
        $WordCount = $Wc->countWords($TestSentence);

        // Memeriksa apakah jumlah kata yang dihitung sesuai dengan yang diharapkan dengan menggunakan assertEquals. Fungsi dari assertEquals adalah memeriksa nilai yang dihasilkan dari fungsi apakah sama dengan nilai ekspektasi kita atau tidak.
        $this->assertEquals(6, $WordCount);
    }
}
