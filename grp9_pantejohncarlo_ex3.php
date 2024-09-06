<?php

$filename = 'sample.txt';

if (file_exists($filename)) {
    $content = file_get_contents($filename);
    echo "File Contents: <br>" . nl2br(htmlspecialchars($content)) . "<br><br>";
} else {
    echo "File does not exist yet.<br><br>";
}

$data = "This is a sample data to be written into the file.\n";

file_put_contents($filename, $data, FILE_APPEND);
echo "Data has been written to the file.<br><br>";

if (file_exists($filename)) {
    echo "The file '$filename' exists.<br><br>";
} else {
    echo "The file '$filename' does not exist.<br><br>";
}

if (file_exists($filename)) {
    $fileArray = file($filename);
    echo "File read as an array:<br>";
    foreach ($fileArray as $line) {
        echo nl2br(htmlspecialchars($line));
    }
} else {
    echo "The file does not exist, cannot read it as an array.<br>";
}
?>
