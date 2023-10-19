<?php
// Membuat class bernama WordCount
class WordCount
{

    // Membuat method countWords dengan parameter $sentence
    public function countWords($sentence)
    {
        // explode(" ", $sentence): Fungsi explode memecah string $sentence menjadi array berdasarkan pemisah yang diberikan, dalam hal ini adalah spasi " ". Hasilnya adalah array yang berisi setiap kata dalam kalimat.
        // count(): Fungsi ini menghitung jumlah elemen dalam array.        
        // Jadi, return count(explode(" ", $sentence)); akan mengembalikan jumlah kata dalam variabel $sentence.
        return count(explode(" ", $sentence));
    }
}
