<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>

<body>
    <h1>Berlatih Function PHP</h1>
    <?php

    echo "<h3> Soal No 1 Greetings </h3>";


    // Code function di sini
    function greetings($nama)
    {
        echo "Helo $nama, Selamat Datang di Sanbercode! <br>";
    }

    // Hapus komentar untuk menjalankan code!
    greetings("Bagas");
    greetings("Wahyu");
    greetings("Ridho Alfandi");

    echo "<br>";

    echo "<h3>Soal No 2 Reverse String</h3>";


    // Code function di sini 
    function reverse($kata)
    {
        $panjangKata = strlen($kata);
        $Reverse = "";
        for ($i = $panjangKata - 1; $i >= 0; $i--) {
            $Reverse .= $kata[$i];
        }
        return $Reverse;
    }
    function reverseString($string)
    {
        $revString = reverse($string);
        echo $revString . "<br>";
    }

    // Hapus komentar di bawah ini untuk jalankan Code
    reverseString("Ridho Alfandi");
    reverseString("Sanbercode");
    reverseString("We Are Sanbers Developers");
    echo "<br>";

    echo "<h3>Soal No 3 Palindrome </h3>";



    // Code function di sini

    function palindrome($word)
    {
        $reverseWord = reverse($word);

        if ($reverseWord == $word) {
            echo "$word : true <br>";
        } else {
            echo "$word : false <br>";
        }
    }

    // Hapus komentar di bawah ini untuk jalankan code
    palindrome("civic"); // true
    palindrome("nababan"); // true
    palindrome("jambaban"); // false
    palindrome("racecar"); // true


    echo "<h3>Soal No 4 Tentukan Nilai </h3>";


    // Code function di sini
    function tentukan_nilai($nilai)
    {
        if ($nilai >= 85 && $nilai <= 100) {
            echo "Sangat Baik <br>";
        } else if ($nilai >= 70 && $nilai <= 85) {
            echo "Baik <br>";
        } else if ($nilai >= 60 && $nilai <= 70) {
            echo "Cukup <br>";
        } else {
            echo "Kurang";
        }
    }
    // Hapus komentar di bawah ini untuk jalankan code
    echo tentukan_nilai(98); //Sangat Baik
    echo tentukan_nilai(76); //Baik
    echo tentukan_nilai(67); //Cukup
    echo tentukan_nilai(43); //Kurang


    ?>

</body>

</html>