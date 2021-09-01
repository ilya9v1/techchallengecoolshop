<?php
$row = 1;
if (($handle = fopen("file.csv", "r")) !== FALSE) {
    if (!empty($argv[1]) && !empty($argv[2])) {
        $clm=$argv[1];
        $key=$argv[2];
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;
        if($key==$data[$clm]){
            for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "\n";
            }
        }
    }
}else{
 while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "\n";
        }
    }
}
    fclose($handle);
}
?>


