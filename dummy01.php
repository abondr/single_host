<?php
$servername = "localhost";
$username = "root";
$password = "system";
$dbname = "zero_host";
$countryJson = file_get_contents("https://restcountries.eu/rest/v2/all");
$countryArr = json_decode($countryJson);
define("DS", DIRECTORY_SEPARATOR);

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "insert into p3_country(c_name,c_capital,c_slug,c_flag) values";

foreach ($countryArr as $country){
  $sql .= "(\"{$country->name}\",\"{$country->capital}\",\"{$country->alpha3Code}\",".
          "\"{$country->alpha3Code}.svg\"),";

}
$sql = substr($sql,0,-1).";";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
