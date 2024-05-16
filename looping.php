<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>

<body>
    <h1>Berlatih Looping</h1>

    <?php
    echo "<h3>Soal No 1 Looping I Love PHP</h3>";

    // Lakukan Looping Di Sini
    echo "<h5>LOOPING PERTAMA</h5>";

    $first = 2;
    while ($first <= 20) {
        echo $first . " - I Love PHP <br>";
        $first += 2;
    }
    echo "<h5>LOOPING KEDUA</h5>";

    $second = 20;
    while ($second >= 2) {
        echo $second . " - I Love PHP <br>";
        $second -= 2;
    }


    echo "<h3>Soal No 2 Looping Array Modulo </h3>";


    $numbers = [18, 45, 29, 61, 47, 34];
    echo "array numbers: ";
    print_r($numbers);

    foreach ($numbers as $nomor) {
        $output[] = $nomor % 5;
    }
    echo "<br>";
    echo "Array sisa baginya adalah:  ";
    echo "<br>";
    print_r($output);


    echo "<h3> Soal No 3 Looping Asociative Array </h3>";



    $items = [
        ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],
        ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
        ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
        ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
    ];

    foreach ($items as $values) {
        $data = [
            "id" => $values[0],
            "name" => $values[1],
            "price" => $values[2],
            "descrption" => $values[3],
            "source" => $values[4]
        ];
        print_r($data);
        echo  "<br>";
    };

    // Output: 

    echo "<h3>Soal No 4 Asterix </h3>";

    echo "Asterix: <br>";
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    ?>

</body>

</html>