<?php
// Membuat class bernama WordCount
class WordCount
{

    // Membuat method countWords dengan parameter $sentence
    public function countWords($sentence)
    {
        // mengembalikan fungsi hasil perhitungan jumlah kata. Method explode() digunakan untuk memecah string $sentence menjadi sebuah array dengan menggunakan spasi
        return count(explode(" ", $sentence));
    }
}
