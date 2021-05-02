<?php
// $data = array("aaa,bbb,cccc",PHP_EOL);
// // $d1 = explode(",",$data);
// file_put_contents('testcsv.csv',$data,FILE_APPEND);

$data = "Hello world, Hello there, hello here".PHP_EOL;
fputcsv("test.csv",$data);
echo "File created <br>";
?>