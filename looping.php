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
        /* 
            Soal No 1 
            Looping I Love PHP
            Lakukan Perulangan (boleh for/while/do while) sebanyak 20 iterasi. Looping terbagi menjadi dua: Looping yang pertama Ascending (meningkat) 
            dan Looping yang ke dua menurun (Descending). 

            Output: 
            LOOPING PERTAMA
            2 - I Love PHP //1
            4 - I Love PHP //2
            6 - I Love PHP //3
            8 - I Love PHP //4
            10 - I Love PHP //5
            12 - I Love PHP //6
            14 - I Love PHP //7
            16 - I Love PHP //8
            18 - I Love PHP //9
            20- I Love PHP //10

            LOOPING KEDUA
            20 - I Love PHP
            18 - I Love PHP
            16 - I Love PHP
            14 - I Love PHP
            12 - I Love PHP
            10 - I Love PHP
            8 - I Love PHP
            6 - I Love PHP
            4 - I Love PHP
            2 - I Love PHP
        */
        // Lakukan Looping Di Sini

        // Looping Pertama
        echo "<ol>";
            echo "<b><li>A. Looping Pertama - Menggunakan For</li></b><br/>";
            /*  for ($i=2; $i <= 20; $i+=2) { 
                    $hasil = $i . " - I Love PHP <br/>"; 
                    echo $hasil;
                }
            */

            for ($i=1; $i <= 20 ; $i++) { 
                $hasil = $i +=1;
                echo "$hasil - I Love PHP <br>";
            }
        echo "</ol>";

        // Looping Kedua
        echo "<ol start='2'>";
            echo "<b><li>A. Looping Pertama - Menggunakan While</li></b><br/>";
            /*  for ($a = 20; $a >= 2; $a -= 2) {
                    echo "$a - I Love PHP <br/>";
                }
            */
            
            $a = 20;
            while ($a >= 2) {
                echo "$a - I Love PHP <br>";
                $a -=2;
            }
        echo "</ol>";

        echo "<h3>Soal No 2 Looping Array Modulo </h3>";
        /* 
            Soal No 2
            Looping Array Module
            Carilah sisa bagi dengan angka 5 dari setiap angka pada array berikut.
            Tampung ke dalam array baru bernama $rest 
        */

        $numbers = [18, 45, 29, 61, 47, 34];
        echo "array numbers:  ";
        print_r($numbers);
        // Lakukan Looping di sini

        // Membuat array baru bernama $rest untuk menampung hasil dari sisa bagi 5
        $rest = [];

        foreach($numbers as $number) {
            $rest[] = $number % 5;
        }

        echo "<br>";
        echo "Array sisa baginya adalah:  "; 
        print_r($rest);
        echo "<br>";

        echo "<h3> Soal No 3 Looping Asociative Array </h3>";
        /* 
            Soal No 3
            Loop Associative Array
            Terdapat data items dalam bentuk array dimensi. Buatlah data tersebut ke dalam bentuk Array Asosiatif. 
            Setiap item memiliki key yaitu : id, name, price, description, source. 
            
            Output: 
            Array ( [id] => 001 [name] => Keyboard Logitek [price] => 60000 [description] => Keyboard yang mantap untuk kantoran [source] => logitek.jpeg ) 
            Array ( [id] => 002 [name] => Keyboard MSI [price] => 300000 [description] => Keyboard gaming MSI mekanik [source] => msi.jpeg ) 
            Array ( [id] => 003 [name] => Mouse Genius [price] => 50000 [description] => Mouse Genius biar lebih pinter [source] => genius.jpeg ) 
            Array ( [id] => 004 [name] => Mouse Jerry [price] => 30000 [description] => Mouse yang disukai kucing [source] => jerry.jpeg ) 

            Jangan ubah variabel $items

        */
        $items = [
            ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 
            ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
            ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
            ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
        ];

        $data = [];
        foreach ($items as $key => $item) {
            $data[] = [
                'id' => $item[0],
                'name' => $item[1],
                'price' => $item[2],
                'description' => $item[3],
                'source' => $item[4],
            ];
        }
        
        // Output: 

        // Hasil array assosiatif pertama: 
        /* echo "<pre>";
            print_r($items);
            echo "</pre>";
        */

        // Hasil array assosiatif kedua: 
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        
        echo "<h3>Soal No 4 Asterix </h3>";
        /* 
            Soal No 4
            Asterix 5x5
            Tampilkan dengan looping dan echo agar menghasilkan kumpulan bintang dengan pola seperti berikut: 
            Output: 
            * 
            * * 
            * * * 
            * * * * 
            * * * * *
        */

        echo "Asterix: ";
        echo "<br>";
        for ($startOne=1; $startOne <= 5; $startOne++) { 
            for($startTwo=1; $startTwo <= $startOne; $startTwo++) {
                echo "* ";
            }
            echo "<br/>";
        }
    ?>

</body>

</html>