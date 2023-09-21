<?php
// $gods = array([
//         {
//           "name": "acee",
//           "age": 20,
//         },
//         {
//           "name": "appu",
//           "age": 22,
//         },
//         {
//           "name": "kid",
//           "age": 19,
//         },
//       ];
      $gods=array();
      $gods[]="Lakshmi";
      $gods[]="Krishna";
      $gods[]="Radha";
      $gods[]="Balram";
      $gods[]="Shiva";
      $gods[]="Parvati";
      $gods[]="Ram";
      $gods[]="Saraswati";
      $gods[]="Bishnu";
      $gods[]="Brahma";
      $gods[]="Ashok";
      $gods[]="Ganesh";
      $gods[]="Durga";
      $gods[]="Kali";
      $gods[]="Surya";
      $gods[]="Aryaman";
      $gods[]="Kartikeya";

    //  print_r($gods);
    $searchString=strtolower($_GET['search']);
// echo $_GET['search'].' searching...';
// print_r($gods);//echo only prints string
$hint='';
$len = strlen($searchString);
if($len==0){
    '';
    exit(0);//String input nahuda exit hunxa
}
foreach ($gods as $god) {//Foreach le array ma matra kam garxa ra array ma vayako each 
    if ($searchString == strtolower(substr($god, 0, $len))) {
        $hint .= $god.",";//$hint = &hint.$god.',';
    }
//     if($hint != ''){
//         break;
//     }
}
echo $hint
    ?>

