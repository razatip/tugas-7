<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Array</title>
</head>
<body>
<h1>Berlatih Array</h1>
<?php
echo "<h3> Soal 1 </h3>";
/* SOAL NO 1
Kelompokkan nama-nama di bawah ini ke dalam Array.
Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" Adults: "Hopper", "Nancy", "Joyce", "Jonathan", "Murray" */
$kids = array(
    0 => "Mike",
    1 => "Dustin",
    2 => "Will",
    3 => "Lucas",
    4 => "Max",
    5 => "Eleven",
);
// Lengkapi di sini
$adults = array(
    0 => "Hopper",
    1 => "Nancy",
    2 => "Joyce",
    3 => "Jonathan",
    4 => "Murray",
);

print_r($kids);
echo "<br>";
print_r($adults);

echo "<h3> Soal 2</h3>";
/* SOAL NO 2
Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array. */
echo "Cast Stranger Things: " ;
echo "<br>";
echo "Total Kids: " . count($kids); // Berapa panjang array kids echo "<br>";
echo "<ol>";
for($i = 0; $i < 6; $i++){
   echo "<li> $kids[$i] </li>";
}
// Lanjutkan
echo "</ol>";
echo "Total Adults: " . count($adults); // Berapa panjang array adults echo "<br>";
echo "<ol>";
for($i = 0; $i < 5; $i++){
  echo "<li> $adults[$i] </li>";
}
// Lanjutkan


/* SOAL No 3
Susun data-data berikut ke dalam bentuk Asosiatif Array didalam Array Multidimensi
Name: "Will Byers" Age: 12, Aliases: "Will the Wise" Status: "Alive" Name: "Mike Wheeler" Age: 12, Aliases: "Dungeon Master" Status: "Alive" Name: "Jim Hopper" Age: 43, Aliases: "Chief Hopper" Status: "Deceased"

Name: "Eleven" Age: 12, Aliases: "El" Status: "Alive" Output: Array
(
[0] => Array
(
[Name] => Will Byers [Age] => 12
[Aliases] => Will the Wise
[Status] => Alive
)
[1] => Array
(
[Name] => Mike Wheeler [Age] => 12
[Aliases] => Dugeon Master [Status] => Alive
)
[2] => Array
(
[Name] => Jim Hooper [Age] => 43
[Aliases] => Chief Hopper [Status] => Deceased
)
[3] => Array
(
[Name] => Eleven
[Age] => 12
[Aliases] => El
[Status] => Alive
)
) */
echo "</ol>";

    echo "<h3>Soal no 3</h3>";
    $nama = array(
        0 => array(
            "Name" => "Mike Wheeler <br>",
            "Age" => "12 <br>",
            "Aliases" => "Dugeon Master <br>",
            "Status" => "Alive <br><br>"
        ), 
        1 => array(
            "Name" => "Will Byers <br>" ,
            "Age" => "12 <br>", 
            "Aliases" => "Will the Wise <br>",
            "Status" => "Alive <br><br>"
        ),
        2 => array(
            "name" => "Jim Hopper <br>",
            "Age" => "43 <br>", 
            "Aliases" => "Chief Hopper <br>" ,
            "Status" => "Deceased <br><br>"
        ),
        3 => array(
            "Name" => "Eleven <br>",
            "Age" => "12 <br>",
            "Aliases" => "El <br>",
            "Status" => "Alive <br>"
        )
    ); 
    
    print_r($nama);
?>
</body>
</html>