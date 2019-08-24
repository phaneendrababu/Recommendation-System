<?php
/*$row = 1;
if (($handle = fopen("cosine_similarity.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        for ($c=1; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}*/

/*$file = fopen("cosine_similarity.csv","r");
print_r(fgetcsv($file));
fclose($file);*/

//Open the file.
$fileHandle = fopen("cosine_similarity.csv", "r");

//Loop through the CSV rows.
while (($row = fgetcsv($fileHandle, 0, ",")) !== FALSE) {
    //Print out my column data.
    echo 'Name: ' . $row[0] . '<br>';
    echo 'Country: ' . $row[1] . '<br>';
    echo 'Age: ' . $row[2] . '<br>';
    echo '<br>';
}
?>