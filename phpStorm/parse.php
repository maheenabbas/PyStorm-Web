<?php
$serverName = "mars.qc.cuny.edu";
$userName = "nama3805";
$password = "23993805";
$dbName = "nama3805";

$con = mysqli_connect($serverName, $userName, $password, $dbName);

if (!$con){
    die("Connection failed" .mysqli_connect_error());
}
echo "Connected successfully";

$source_name = $_POST['The Project Gutenberg eBook of The Art of War, by Sun Tzŭ'];
$source_url = $_POST['https://www.gutenberg.org/cache/epub/132/pg132.txt'];
$source_begin = $_POST['Sun Tzŭ'];
$source_end = $_POST['311.'];

$sql = "INSERT INTO source (source_name, source_url, source_begin, source_end)
    VALUE ('$source_name', '$source_url', '$source_begin', '$source_end');";

if (mysqli_query($con, $sql)){
    echo "data stored in DB successfully"
        . " please browse your localhost php my admin"
        . " to view the updated data";

    echo nl2br("\n$source_name\n $source_url\n"
        . "$source_begin\n $source_end");
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($con);
}
