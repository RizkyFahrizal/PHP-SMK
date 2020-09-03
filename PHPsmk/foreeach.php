<?php 
 $nama=['Pak isa ','Pak Three','Bu indung',300];
    var_dump ($nama);

    echo '<br>';
    foreach ($nama as $key) {
        echo $key;
        echo '<br>';
    }

$jeneng=[
    'tejo'=> "surabaya",
    'budi'=> "malang",
    'siti'=> "sidoarjo"
];

var_dump ($jeneng);
echo "<br>";
foreach ($jeneng as $key => $value) {
    echo $key.'=>'.$value;
    echo "<br>";
}

?>